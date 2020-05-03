<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Helper;
use App\Models\Product;

class HomepageSettingController extends Controller
{

    public function show_top_selection_product(){
      try {

        $top_selection = Product::where('status', 1)->orderByUniqueViews()->get();
         return view('front.pages.all-top-selection',compact('top_selection'));

      } catch (\Exception $e) {
           return $e->getMessage();
      }

    }


  public function show_new_arrival()
  {
    try {

        $new_arrival_product=Product::where('status',1)->latest()->get();
        return view('front.pages.all-new-arrivals',compact('new_arrival_product'));
    } catch (\Exception $e) {

        return $e->getMessage();
    }
  }


}
