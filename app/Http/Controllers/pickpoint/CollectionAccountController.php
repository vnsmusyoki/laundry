<?php

namespace App\Http\Controllers\pickpoint;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollectionAccountController extends Controller
{
    public function index(){
        return view('pickpoints.dashboard');
    }
}
