<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesContentController extends Controller
{
    public function index()
    {
        return view('pages.homepage');
    }
    public function aboutus()
    {
        return view('pages.about-us');
    }
    public function services()
    {
        return view('pages.services');
    }
    public function housecleaning()
    {
        return view('pages.house-cleaning');
    }
    public function cleaningservices()
    {
        return view('pages.cleaning-services');
    }
    public function carwashing()
    {
        return view('pages.car-washing');
    }
    public function contactus()
    {
        return view('pages.contact-us');
    }
    public function bookingservice()
    {
        return view('pages.booking-service');
    }
    public function plumbingservices()
    {
        return view('pages.plumbing-services');
    }
    public function registeraccount(Request $request)
    {

        $this->validate($request, [
            'full_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = new User;
        $user->name = $request->input('full_name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->account_category = "Customer";
        $user->save();
        $user->attachRole('user');

        return redirect()->route('login');
    }
}
