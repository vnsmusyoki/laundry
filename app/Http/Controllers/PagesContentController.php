<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesContentController extends Controller
{
    public function index(){
        return view('pages.homepage');
    }
    public function aboutus(){
        return view('pages.about-us');
    }
    public function services(){
        return view('pages.services');
    }
    public function housecleaning(){
        return view('pages.house-cleaning');
    }
    public function cleaningservices(){
        return view('pages.cleaning-services');
    }
    public function carwashing(){
        return view('pages.car-washing');
    }
    public function contactus(){
        return view('pages.contact-us');
    }
    public function bookingservice(){
        return view('pages.booking-service');
    }
    public function plumbingservices(){
        return view('pages.plumbing-services');
    }
}
