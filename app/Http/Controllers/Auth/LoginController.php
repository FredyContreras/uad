<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Roster\Employee;
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
        // dd($parametros);
        $user = Employee::where('employee_id',$request->user)
                      ->where('password',$request->password)
                      ->first();
        if($user){
          // Session::put('user',$user);
          // Session::has('name');//bool
          // Session::get('name');
          // Session::flush();
          return 'success';
        }else{
          return 'fail';
        }

    }
}
