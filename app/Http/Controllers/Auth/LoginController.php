<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function authenticated(Request $request, $user) { 
        if($user->user_type_id == 1){
            return redirect()->route('dashboard.superadmin.index'); 
        }
        if($user->user_type_id == 2){
            return redirect()->route('dashboard.provincial.index'); 
        }
        if($user->user_type_id == 3){
            return redirect()->route('dashboard.provincialarea.index'); 
        }
        if($user->user_type_id == 4){
            return redirect()->route('dashboard.school.index'); 
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
