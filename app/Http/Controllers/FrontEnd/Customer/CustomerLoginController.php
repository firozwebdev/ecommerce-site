<?php

namespace App\Http\Controllers\Frontend\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerLoginController extends Controller
{
   public function showLoginForm()
  {
     return view('front.pages.customer-auth');
  }

}
