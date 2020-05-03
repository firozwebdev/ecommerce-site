<?php

namespace App\Http\Controllers\Admin\Seller;

use Helper;
use Validator;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductForm;

// Models
use App\Models\Product;
use App\Models\SellerProduct;
use App\Models\ProductColor;
use App\ProductSize;
use App\Order;
use App\Models\SubCategory;
use Auth;


class ProductController extends Controller
{


  public function store(Request $request) {
      try {
          $validator = Validator::make($request->all(), [
                          'multiple' => 'required',
                          'name' => 'required',
                          'title' => 'required',
                          'sub_category_id' => 'required',
                          'product_price' => 'required',
                          'product_quantity' => 'required',
                          'sku' => 'required',
                          'stock' => 'required',
                          'description' => 'required',
                          'multiple' => 'required',
                          'multiple.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4048',
                          'seller_id' => 'required',
                      ]);
          if ($validator->fails()) {
              return back()
                      ->withErrors($validator)
                      ->withInput();
          }
          if ($request->hasfile('multiple')) {
              foreach ($request->file('multiple') as $image) {
                  $name = $image->getClientOriginalName();
                  $image->move(public_path('uploads/documents') . '/productimages/', $name);
                  $data[] = $name;
              }

              DB::transaction(function () use ($request, $data) {
                $product = New Product();
                $product->product_name = $request->name;
                $product->product_title = $request->title;
                $product->sub_category_id = $request->sub_category_id;
                $product->slug = str_slug($request->title) . "-" . rand(255, 999);
                $product->product_price = $request->product_price;
                $product->special_price = $request->special_price;
                $product->discount = $request->discount;
                $product->start_date = $request->start_date;
                $product->end_date = $request->end_date;
                $product->product_quantity = $request->product_quantity;
                $product->sku = $request->sku;
                $product->stock = $request->stock;
                $product->video_link = $request->video_link;
                $product->multiple = json_encode($data);
                $product->description = $request->description;
                $product->color = json_encode(request('color'));
                $product->size = json_encode(request('size'));

                if(Auth::guard('admin')->user()->hasRole(['admin'])){
                   $product->status=1;
                } else{
                    $product->status=0;
                  }
                 $product->save();

                $seller_product = New SellerProduct();
                $seller_product->seller_id =$request->seller_id;
                $seller_product->product_id =$product->id;
                $seller_product->save();

              });

            }

        Helper::notifySuccess('Product Added successfully');
        return redirect(route('admin.products.create'));
    }
    catch(\Exception $e) {
        Helper::notifyError($e->getMessage());
        return back();
    }
}

  public function show_orders()
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
      // return json_encode($order_full_details);
    return view('admin.seller_orders.total_orders',compact('order_full_details'));
    
    } catch (\Exception $e) {
      return $e->getMessage();

    }


  }

public function view_orders($id)
{
   try {
     $orders_products =Order::findOrfail($id);

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
     // return json_encode($order_full_details);
     return view('admin.seller_orders.view_order',compact('order_full_details'));


   } catch (\Exception $e) {
     return $e->getMessage();

   }


}

}
