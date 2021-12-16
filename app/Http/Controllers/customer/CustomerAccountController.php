<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerAccountController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }
    public function newlaundry()
    {
        return view('user.new-laundry');
    }
}
