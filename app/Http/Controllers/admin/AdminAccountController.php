<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\CollectorRegistration;
use App\Models\CollectionPoint;
use App\Models\CustomerLaundry;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
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
        return view('admin.dashboard');
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
    public function confirmpayment($order)
    {
        $order = CustomerLaundry::findOrFail($order);
        return view('admin.confirm-payment', compact('order'));
    }
    public function paymentverdict(Request $request, $order)
    {
        $this->validate($request, [
            'payment_verdict' => 'required'
        ]);
        $verdict = $request->input('payment_verdict');

        $order = CustomerLaundry::findOrFail($order);
        return view('admin.confirm-payment', compact('order'));
    }
}
