<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesContentController extends Controller
{
    public function index(){
        return view('pages.homepage');
    }
}
