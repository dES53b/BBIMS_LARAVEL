<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Donor;
use App\Models\Clinic;
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:donor')->except('logout');
        $this->middleware('guest:clinic')->except('logout');
    }

    function clinicLoginPage(){
      return view('regroles.clinic-login');
    }

    function clinicLogin(Request $request){
      $this->validate($request, [
              'username'   => 'required',
              'password' => 'required'
          ]);

          if (Auth::guard('clinic')
          ->attempt(['username' => $request->username,
           'password' => $request->password])) {

            return redirect()->intended('/clinic');
          }
          return back()->withInput($request->only('username', 'remember'));
    }


    //Donor login

    function donorLoginPage(){
      return view('regroles.donor-login');
    }

    function donorLogIn(Request $request){
      $this->validate($request, [
              'donor_id'   => 'required',
              'national_id' => 'required'
          ]);

          if (Auth::guard('donor')
          ->attempt(['donor_id' => $request->donor_id,
           'national_id' => $request->national_id])) {

              return redirect()->intended('/donor');
          }
          return back()->withInput($request->only('donor_id', 'remember'));
    }

}
