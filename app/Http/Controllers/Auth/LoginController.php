<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use APP\Models\Roster\Employee;
use Illuminate\Http\Request;
use View;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        // $this->validate($request,{
        //     'user'      =>   'required',
        //     'password'  =>   'required'
        // });

        $parametros = $request->all();
        // dd($parametros);

        $user = Employee::where('username',$request->loginUser)
                      ->where('password',$request->loginPassword)
                      ->first();

        if($user){
          Session::put('user',$user);
          // Session::has('name');//bool
          // Session::get('name');
          // Session::flush();
          return view('home');
        }else{
          return view('login');
        }

    }
}
