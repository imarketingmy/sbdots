<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo()
    {
        
        // Logic that determines where to send the user
        if (\Auth::user()->role == '1')
        {
            return '/admin';
        }
        
        else if (\Auth::user()->role == '2')
        {
            return '/staff';
        }

        else if (\Auth::user()->role == '3')
        {
            return '/player';
        }

        else if (\Auth::user()->role == '4')
        {
            return '/affiliate';
        }
    }
}
