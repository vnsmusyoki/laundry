<?php

namespace App\Http\Controllers\pickpoint;

use App\Http\Controllers\Controller;
use App\Models\CollectionPoint;
use App\Models\CustomerLaundry;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
class CollectionAccountController extends Controller
{
    public function index()
    {
        return view('pickpoints.dashboard');
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
        $user = User::where('email', $request->input('email'));
        $laundrylength = 6;
        $str = "1234567890";
        $laundryid = substr(str_shuffle($str), 0, $laundrylength);
        $laundry = new CustomerLaundry;
        $laundry->customer_id = $user->id;
        $laundry->checkpoint_id = CollectionPoint::where('user_id', auth()->user()->id)->get('id');
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
        return redirect()->to('collector/received-order-payment/'.$laundry->id);
    }
    public function uploadpayment($order){
        $order = CustomerLaundry::findOrFail($order);
        return view('pickpoints.order-payment', compact('order'));
    }
}