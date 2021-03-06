<?php

namespace App\Http\Controllers\pickpoint;

use App\Http\Controllers\Controller;
use App\Mail\CollectorNofityClient;
use App\Models\CollectionPoint;
use App\Models\CustomerLaundry;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class CollectionAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $point = CollectionPoint::where('user_id', auth()->user()->id)->get()->first();
        $orders = CustomerLaundry::where('checkpoint_id', $point->id)->get();
        return view('pickpoints.dashboard',compact('orders'));
    }
    public function createlaundry()
    {
        $points = CollectionPoint::all();

        return view('pickpoints.create-laundry', compact('points'));
    }
    public function storelaundry(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'luggage_category' => 'required|string',
            'number_of_pieces' => 'required|string',
            'additional_description' => 'required|string',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:6048',
        ]);

        $category = $request->input('luggage_category');
        $pieces = $request->input('number_of_pieces');

        if ($category == "Clothes") {
            if ($pieces == "Less than 10") {
                $price = 100;
            } else if ($pieces == "Between 10  and 30") {
                $price = 200;
            } else if ($pieces == "Between 30  and 50") {
                $price = 300;
            } else {
                $price = 500;
            }
        } else {
            if ($pieces == "Less than 10") {
                $price = 150;
            } else if ($pieces == "Between 10  and 30") {
                $price = 250;
            } else if ($pieces == "Between 30  and 50") {
                $price = 350;
            } else {
                $price = 550;
            }
        }
        $point = CollectionPoint::where('user_id', auth()->user()->id)->get()->first();
        $user = User::where('email', $request->input('email'))->get()->first();
        $laundrylength = 6;
        $str = "1234567890";
        $laundryid = substr(str_shuffle($str), 0, $laundrylength);
        $laundry = new CustomerLaundry;
        $laundry->customer_id = $user->id;
        $laundry->checkpoint_id = $point->id;
        $laundry->luggage_category = $request->input('luggage_category');
        $laundry->laundry_id  = "ORDER-" . $laundryid;
        $laundry->amount  = $price;
        $laundry->luggage_category = $request->input('luggage_category');
        $laundry->additional_description = $request->input('luggage_category');
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('laundry', $filenameToStore, 'public');
        $laundry->picture = $filenameToStore;
        $laundry->number_of_pieces = $request->input('number_of_pieces');
        $laundry->collection_status = "Received";
        $laundry->save();


        Toastr::warning('Order has been Placed.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('collector/received-order-payment/' . $laundry->id);
    }
    public function uploadpayment($order)
    {
        $order = CustomerLaundry::findOrFail($order);
        return view('pickpoints.order-payment', compact('order'));
    }
    public function updatepayment(Request $request, $order)
    {

        $this->validate($request, [
            'transaction_code' => 'required|string|min:10|max:10|unique:customer_laundries'
        ]);
        $order = CustomerLaundry::findOrFail($order);
        $order->transaction_code = $request->input('transaction_code');
        $order->payment_status = "Pending";
        $order->save();
        Toastr::warning('Order payment has been received.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('collector/all-paid-orders');
    }
    public function paidorders()
    {
        $point = CollectionPoint::where('user_id', auth()->user()->id)->get()->first();
        $orders = CustomerLaundry::where('checkpoint_id', $point->id)->get();
        return view('pickpoints.all-orders', compact('orders'));
    }
    public function pendingorders()
    {
        $point = CollectionPoint::where('user_id', auth()->user()->id)->get()->first();
        $orders = CustomerLaundry::where('laundry_status', 'Cleaning')->where('checkpoint_id', $point->id)->get();
        return view('pickpoints.pending-laundries', compact('orders'));
    }
    public function allorders()
    {
        $point = CollectionPoint::where('user_id', auth()->user()->id)->get()->first();
        $orders = CustomerLaundry::where('checkpoint_id', $point->id)->get();
        return view('pickpoints.all-orders', compact('orders'));
    }
    public function orderdetails($order)
    {
        $order = CustomerLaundry::findOrFail($order);
        return view('pickpoints.view-customer-order', compact('order'));
    }
    public function completeorder($order)
    {
        $order = CustomerLaundry::findOrFail($order);
        $order->laundry_status = "Cleaned";
        $order->collection_status = "Collected";
        $order->delivery_status = "Taken by Customer";
        $order->save();
        Toastr::success('Collector has been completed.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('collector/collected-orders');
    }
    public function collectedorders()
    {
        $point = CollectionPoint::where('user_id', auth()->user()->id)->get()->first();
        $orders = CustomerLaundry::where('checkpoint_id', $point->id)->where('delivery_status', 'Taken by Customer')->get();
        return view('pickpoints.picked-orders', compact('orders'));
    }
    public function notifyclient($order)
    {

        $order = CustomerLaundry::findOrFail($order);
        $order->delivery_status = "returned to CheckPoint";
        $order->save();
        $message = "Great!, You can now collect your order " . $order->laundry_id . " from  your Collection Point is  " . $order->laundrycheckpoint->collection_name;
        $topic = "Your Laundry has been CLEANED";
        $receiver = $order->laundryuser->email;
        Mail::to($receiver)->send(new CollectorNofityClient($receiver, $message, $topic));
        Toastr::success('Collector has been notified.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function accountsecurity()
    {
        return view('pickpoints.account-profile');
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
