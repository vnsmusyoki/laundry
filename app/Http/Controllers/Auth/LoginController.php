<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
 

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function authenticated(Request $request, $user)
    {

        if ($user->hasRole('administrator')) {
            return  redirect()->route('admin');
        }
        if ($user->hasRole('user')) {
            return  redirect()->route('customer');
        }
        if ($user->hasRole('collector')) {
            return  redirect()->route('collector');
        }
    }
}
