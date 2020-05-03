<?php

namespace App\Http\Controllers\Admin\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Order;
use App\Models\SellerProduct;
class SellerProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      try {
        $orders_products =Order::with('customer')->get();

        $order_full_details = [];
        $i = 0;
        foreach ($orders_products as $key => $value) {
          $product_ids = json_decode($value->product_id);
          $product_qtys = json_decode($value->product_qty);
          for ($j=0; $j < count($product_ids); $j++) {
            $single_product = SellerProduct::where('seller_id', Auth::guard('admin')->user()->id)
                                      ->where('product_id', $product_ids[$j])
                                      ->with('products')->first();
            if ($single_product) {
              $order_full_details[$i]['product_info'] = $single_product;
              $order_full_details[$i]['order_quantity'] = $product_qtys[$j];
              $order_full_details[$i]['order_id'] = $value->id;
              $order_full_details[$i]['order_status'] = $value->status;
              $order_full_details[$i]['customer_name'] = $value->customer->name;
              $order_full_details[$i]['customer_phone'] = $value->customer->phone_number;
              $order_full_details[$i]['customer_adress'] = $value->customer->delivery_address;
            }
          }
          $i++;
        }
        $order_full_details = json_decode(json_encode($order_full_details));
        return view('admin.home.home',compact('order_full_details'));

      } catch (\Exception $e) {
         return $e->getMessage();

      }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
