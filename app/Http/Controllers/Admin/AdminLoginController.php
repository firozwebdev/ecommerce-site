<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
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
   // protected $redirectTo = '/home';
  public function __construct()
  {
      $this->middleware('guest:admin')->except('logout');
  }
  public function login_form()
  {
    return view('admin.auth.login');
  }

  public function loginAdmin(Request $request)
  {
   // Validate the form data
   $this->validate($request, [
     'admin_email_address'   => 'required|email',
     'admin_password' => 'required|min:6'
   ]);
   // Attempt to log the user in
   if (Auth::guard('admin')->attempt(['email' => $request->admin_email_address, 'password' => $request->admin_password])) {
     // if successful, then redirect to their intended location
     Helper::notifySuccess("Welcome");
     return redirect()->intended(route('admin.dashboard.index'));
   }
   // if unsuccessful, then redirect back to the login with the form data
   Helper::notifyError("Invalid Credentials");
   return redirect()->back()
          ->withInput($request->only('email', 'remember'));
  }

  public function logout()
  {
     Auth::guard('admin')->logout();
     Helper::notifySuccess("Logged Out");
     return redirect()->route('admin.login');
  }
}
