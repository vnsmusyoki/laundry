<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\CollectionPoint;
use App\Models\CustomerLaundry;
use App\Models\User;
use Illuminate\Http\Request;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;

class CustomerAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('user.dashboard');
    }
    public function newlaundry()
    {
        $points = CollectionPoint::all();
        return view('user.new-laundry', compact('points'));
    }
    public function storelaundry(Request $request)
    {

        $this->validate($request, [
            'collection_point' => 'required',
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
        $laundrylength = 6;
        $str = "1234567890";
        $laundryid = substr(str_shuffle($str), 0, $laundrylength);
        $laundry = new CustomerLaundry;
        $laundry->customer_id = auth()->user()->id;
        $laundry->checkpoint_id = $request->input('collection_point');
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
        $laundry->collection_status = "Waiting";
        $laundry->save();


        Toastr::warning('Order has been Placed.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('user/all-pending-orders');
    }
    public function pendingorders()
    {
        $orders = CustomerLaundry::where(['customer_id' => auth()->user()->id, 'collection_status' => 'Waiting'])->get();

        return view('user.pending-orders', compact('orders'));
    }
    public function editpendingorder($order)
    {
        $order = CustomerLaundry::findOrFail($order);
        $points = CollectionPoint::all();
        return view('user.edit-pending-order', compact('order', 'points'));
    }
    public function deletependingorder($order)
    {
        $laundry = CustomerLaundry::findOrFail($order);
        Storage::delete('public/laundry/' . $laundry->picture);
        $laundry->delete();
        Toastr::error('Order has been Deleted.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('user/all-pending-orders');
    }
    public function updatependingorder(Request $request, $order)
    {
        $this->validate($request, [
            'collection_point' => 'required',
            'luggage_category' => 'required|string',
            'number_of_pieces' => 'required|string',
            'additional_description' => 'required|string',
            'picture' => 'optional|image|mimes:jpeg,png,jpg|max:6048',
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

        $laundry = CustomerLaundry::findOrFail($order);
        $laundry->checkpoint_id = $request->input('collection_point');
        $laundry->luggage_category = $request->input('luggage_category');
        $laundry->amount  = $price;
        $laundry->luggage_category = $request->input('luggage_category');
        $laundry->additional_description = $request->input('luggage_category');
        if ($request->hasFile('picture')) {
            Storage::delete('public/laundry/' . $laundry->picture);
            $fileNameWithExt = $request->picture->getClientOriginalName();
            $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $Extension = $request->picture->getClientOriginalExtension();
            $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
            $path = $request->picture->storeAs('laundry', $filenameToStore, 'public');
            $laundry->picture = $filenameToStore;
        }
        $laundry->number_of_pieces = $request->input('number_of_pieces');
        $laundry->collection_status = "Waiting";
        $laundry->save();


        Toastr::warning('Order has been Edited.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('user/all-pending-orders');
    }
    public function allorders()
    {
        $orders = CustomerLaundry::where('customer_id', auth()->user()->id)->get();

        return view('user.all-orders', compact('orders'));
    }
    public function alltransactions()
    {
        $orders = CustomerLaundry::where('customer_id', auth()->user()->id)->get();

        return view('user.all-transactions', compact('orders'));
    }
    public function pendinglaundries()
    {
        $orders = CustomerLaundry::where(['customer_id' => auth()->user()->id, 'delivery_status' => 'Waiting'])->get();

        return view('user.pending-laundries', compact('orders'));
    }
    public function accountsecurity()
    {
        return view('user.account-profile');
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
