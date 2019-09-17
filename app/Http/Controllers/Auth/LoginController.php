<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Database\Eloquent;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Archive;



class LoginController extends Controller
{


    //use AuthenticatesUsers;
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


    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        //$email = $request->only('email');
/*
        if($email === 'administrador@gmail.com'){
          dd('Hola Mundo');
        }*/

        if (Auth::attempt($credentials)) {
            //dd($request->all());
            //dd($user);
            return redirect()->intended('test');

        }else {

            return back()->with('failed_auth', 'Las credenciales ingresadas son incorrectas!');

        }
    }


    public function logout(){

        Auth::logout();
          return view('login');

    }


/*
    public function __construct()
    {
        $this->middleware('auth');
    }
*/




    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/test';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
