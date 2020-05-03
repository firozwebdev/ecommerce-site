<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AutoCompleteController extends Controller
{

// Aucomplete search

  public function search(Request $request)
  {
        $search = $request->get('term');

        $result = Product::where('product_name', 'LIKE', '%'. $search. '%')->get();
        return response()->json($result);

  }

// Full text search

  public function search_product (Request $request)
    {

    		$searched_product = Product::search($request->get('search_product'))->get()->take(1);

        return view('front.partials.search', compact('searched_product'));
    }




}
