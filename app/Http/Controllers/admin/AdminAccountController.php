<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\AdminDeliverOrder;
use App\Mail\CollectorRegistration;
use App\Mail\OrderPayment;
use App\Models\CollectionPoint;
use App\Models\CustomerLaundry;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AdminAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $delivered = CustomerLaundry::where('laundry_status', 'Cleaned')->get();
        $paid = CustomerLaundry::where('payment_status', 'Accepted')->get();
        $neworders = CustomerLaundry::where(['payment_status'=>'Accepted', 'laundry_status'=>'Cleaning'])->get();
        $collectors = User::where('account_category', 'Collector')->get();

        return view('admin.dashboard', compact(['delivered', 'paid', 'collectors', 'neworders']));
    }
    public function addcollectionpoint()
    {
        return view('admin.collectionpoints.create-new-point');
    }
    public function storecollectionpoint(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'location_description' => 'required|string',
            'full_names' => 'required|string',
            'collection_name' => 'required|string',
            'town' => 'required|string',
            'phone_number' => 'required|digits:10|unique:collection_points',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:6048',
        ]);


        $passwordlength = 6;
        $str = "1234567890";
        $password = substr(str_shuffle($str), 0, $passwordlength);

        $user = new User;
        $user->name = $request->input('full_names');
        $user->email = $request->input('email');
        $user->password = bcrypt($password);
        $user->account_category = "Collector";
        $user->save();
        $user->attachRole('collector');


        $station = new CollectionPoint;
        $station->location_description = $request->input('location_description');
        $station->town = $request->input('town');
        $station->collection_name = $request->input('collection_name');
        $station->user_id = $user->id;
        $station->phone_number = $request->input('phone_number');
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('collectionpoints', $filenameToStore, 'public');
        $station->picture = $filenameToStore;
        $station->save();

        $message = "You have successfully been registered to Klear Collectors.Your default password is " . $password . ". You can change anytime as this is your security key. Customer laundry will be delivered and picked from your station once in a while.";
        $receiver = $request->input('email');
        $topic = "Successful account registration";
        Mail::to($receiver)->send(new CollectorRegistration($topic, $message, $receiver));
        Toastr::success('New Collection Point has been Added.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('admin/all-collection-points');
    }

    public function collectionpoints()
    {
        $points = CollectionPoint::all();
        return view('admin.collectionpoints.index', compact('points'));
    }
    public function showcollectionpoint($point)
    {
        $point = CollectionPoint::findOrFail($point);
        return view('admin.collectionpoints.view-collection-point', compact('point'));
    }
    public function editcollectionpoint($point)
    {
        $point = CollectionPoint::findOrFail($point);
        return view('admin.collectionpoints.edit-collection-point', compact('point'));
    }
    public function updatecollectionpoint(Request $request, $id)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:users',
            'location_description' => 'required|string',
            'full_names' => 'required|string',
            'town' => 'required|string',
            'phone_number' => 'required|digits:10|exists:collection_points',
            'picture' => 'optional|image|mimes:jpeg,png,jpg|max:6048',
        ]);

        $station = CollectionPoint::findOrfail($id);
        $station->location_description = $request->input('location_description');
        $station->town = $request->input('town');
        if ($request->hasFile('picture')) {
            Storage::delete('public/collectionpoints/' . $station->picture);
            $fileNameWithExt = $request->picture->getClientOriginalName();
            $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $Extension = $request->picture->getClientOriginalExtension();
            $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
            $path = $request->picture->storeAs('collectionpoints', $filenameToStore, 'public');
            $station->picture = $filenameToStore;
        }
        $station->phone_number = $request->input('phone_number');
        $station->save();

        $user = User::findOrFail($station->user_id);
        $user->name = $request->input('full_names');
        $user->email = $request->input('email');

        $user->save();

        Toastr::warning('Collection Point has been Edited.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('admin/all-collection-points');
    }
    public function allorders()
    {
        $orders = CustomerLaundry::where('transaction_code', '!=', null)->get();
        return view('admin.all-orders', compact('orders'));
    }
    public function readyorders()
    {
        $orders = CustomerLaundry::where('laundry_status', 'Cleaning')->where('transaction_code', '!=', null)->get();
        return view('admin.ready-laundries', compact('orders'));
    }
    public function confirmpayment($order)
    {
        $order = CustomerLaundry::findOrFail($order);
        return view('admin.confirm-payment', compact('order'));
    }
    public function viewcustomeroder($order)
    {
        $order = CustomerLaundry::findOrFail($order);
        return view('admin.view-customer-order', compact('order'));
    }

    public function paymentverdict(Request $request, $order)
    {
        $this->validate($request, [
            'payment_verdict' => 'required'
        ]);
        $verdict = $request->input('payment_verdict');

        $order = CustomerLaundry::findOrFail($order);
        if ($verdict == "Accept") {
            $order->payment_status = "Accepted";
            $order->laundry_status = "Cleaning";
            $order->collection_status = "Transported";
            $order->delivery_status = "NotDelivered";
            $order->pickup_date = Carbon::now()->addDay();
            $order->save();
            $message = "Great!, Your Order Payment is Now CONFIRMED. You will receive back your cleaned laundry in the next 24 HOURS FROM NOW.Your order ID " . $order->laundry_id . " with a PAYMENT of KSHS. " . $order->amount . " Has been approved. Transaction Code - " . $order->transaction_code . " .Login for furher details.";
            $topic = "Order Payment Verification";
            $receiver = $order->laundryuser->email;
            Mail::to($receiver)->send(new OrderPayment($receiver, $message, $topic));
        } else {
            $order->payment_status = "Cancelled";
            $order->laundry_status = "Cancelled";
            $order->collection_status = "Cancelled";
            $order->delivery_status = "Cancelled";
            $order->pickup_date = Carbon::now();
            $order->save();
            $message = "Unfortunately!, after unsuccessfull checkup and validation of the TRANSACTION CODE" . $order->transaction_code . " provided, we could not verify and as a result your order " . $order->laundry_id . " Has been CANCELLED.";
            $topic = "Order Payment Verification";
            $receiver = $order->laundryuser->email;
            Mail::to($receiver)->send(new OrderPayment($receiver, $message, $topic));
        }
        Toastr::success('Payment has been verified and the Email sent to the client.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('admin/all-orders');
    }
    public function deliverorder($order)
    {
        $order = CustomerLaundry::findOrFail($order);
        $order->laundry_status = "Cleaned";
        $order->collection_status = "Returned";
        $order->delivery_status = "delivered to Collection Point";
        $order->save();
        $message = "Great!, Your Laundry is Now CLEANED and has been dispatched back to your collection Point.You will be notified when to collection by the collection point Manager. Thanks for allowing us serve you.Your order ID " . $order->laundry_id . " and your Collection Point is  " . $order->laundrycheckpoint->collection_name . " . You can call this number for close monitoring as we ensure your luggage reaches the destination. Phone Number - " . $order->laundrycheckpoint->phone_number;
        $topic = "Your Laundry has been CLEANED";
        $receiver = $order->laundryuser->email;
        Mail::to($receiver)->send(new AdminDeliverOrder($receiver, $message, $topic));
        Toastr::success('Client has been notified to check with the collection point.', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->to('admin/ready-laundries');
    }
    public function completedorders()
    {
        $orders = CustomerLaundry::where('laundry_status', 'Cleaned')->get();
        return view('admin.completed-orders', compact('orders'));
    }
    public function accountsecurity()
    {
        return view('admin.account-profile');
    }
    public function updatepassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:8|max:20|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = User::find(auth()->user()->id);
        $user->password = bcrypt($request->input('password'));
        $user->save();

        Toastr::success('password has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function updateemail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
        ]);

        $user = User::find(auth()->user()->id);
        $user->email = $request->input('email');
        $user->save();

        Toastr::success('Email Address has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function updateavatar(Request $request)
    {
        $this->validate($request, [
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:6048',
        ]);
        $user = User::find(auth()->user()->id);
        Storage::delete('public/profiles/' . $user->picture);
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('profiles', $filenameToStore, 'public');
        $user->picture = $filenameToStore;
        $user->save();

        Toastr::success('Account Avatar has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
