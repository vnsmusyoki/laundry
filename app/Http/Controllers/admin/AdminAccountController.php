<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAccountController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function addcollectionpoint(){
        return view('admin.collectionpoints.create-new-point');
    }
}
