<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CollectionPoint;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
class AdminAccountController extends Controller
{
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
            'pick_deliver_stations' => 'required|string|unique:pick_deliver_stations',
            'station_location' => 'required|string',
            'full_names' => 'required|string',
            'phone_number' => 'required|digits:10|unique:pick_deliver_stations',
        ]);
        $station = new CollectionPoint;
        $station->pick_deliver_stations = $request->input('pick_deliver_stations');
        $station->location = $request->input('station_location');
        $station->full_names = $request->input('full_names');
        $station->phone_number = $request->input('phone_number');
        $station->save();
        Toastr::success('new Station has been added.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('admin/all-stations');
    }
}
