<?php
namespace App\Helpers;

use Cart;
use Image;
use PDF;

use App\Models\Menu;
use App\Models\Product;
use App\Models\Order;

class Helper
{
  public static function getMenus()
  {
    try {
      $menus = Menu::with(['categories','categories.sub_category'])->get();

      return $menus;
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  public static function notifySuccess($message)
  {
    session()->flash('alert-type', 'success');
    session()->flash('message', $message);
  }

  public static function notifyError($message)
  {
    session()->flash('alert-type', 'error');
    session()->flash('message', $message);
  }

  public static function getCartItems()
  {
    $cart_content=Cart::content();
    $cart_collection = collect($cart_content);
    $newcart_content = $cart_content->map(function($item, $key){
      $item_collection = collect($item);
      $product = Product::select()->where('id',$item->id)->first();
      $product_images = json_decode($product->multiple);
      if (count($product_images)>0) {
        $item_collection->put('product_image',$product_images[0]);
      }else{
        $item_collection->put('product_image',NULL);
      }
      return $item_collection;
    });

    return $newcart_content;
  }

  public static function showProductImage($product_id)
  {
    $imagePath = url('/uploads/documents/productimages');
    try {
      $product = Product::findOrFail($product_id);
      $product_images = json_decode($product->multiple);
      if (count($product_images) > 0) {

        return Image::make($imagePath.$product_images[0])->response();
      }
    } catch (\Exception $e) {
      return Image::make($imagePath.'/default/placeholder.png')->response();
    }
  }

  public static function getProductImage($product_id)
  {
    $imagePath = url('/uploads/documents/productimages');
    try {
      $product = Product::findOrFail($product_id);
      $product_images = json_decode($product->multiple);
      if (count($product_images) > 0) {

        return $imagePath.$product_images[0];
      }
    } catch (\Exception $e) {
      return $imagePath.'/default/placeholder.png';
    }
  }

  public static function generateCustomerInvoice(Order $order)
  {
    $storagePath = storage_path();
    $products = self::orderProductDetails($order);

    $savePath = '/app/customerInvoice/invoice_'.$order->order_id.'.pdf';

    $pdf = PDF::loadView('pdf.customer-invoice', compact('order', 'products'));

    $pdf->save($storagePath.$savePath);

    $order->invoice_link = $savePath;
    $order->save();
  }

  public static function orderProductDetails(Order $order)
  {
    $product_full_details = [];

    $product_ids = json_decode($order->product_id);
    $product_qtys = json_decode($order->product_qty);

    for ($j=0; $j < count($product_ids); $j++) {
      $single_product = Product::where('id',$product_ids[$j])->first();
      if ($single_product) {
        $product_full_details[$j]['product_info'] = $single_product;
        $product_full_details[$j]['order_quantity'] = $product_qtys[$j];
        $product_full_details[$j]['order_id'] = $order->order_id;
      }
    }
    $product_full_details = json_decode(json_encode($product_full_details));

    return $product_full_details;
  }

  public static function getProductCurrentPrice(Product $product)
  {
    $product_current_price = $product->product_price;
    $today = date('d-m-Y',time());

    if ($product->start_date && $product->end_date) {
      $start_date = date('d-m-Y',strtotime($product->start_date));
      $end_date = date('d-m-Y',strtotime($product->end_date));
      if (($today>= $start_date) && ($today<= $end_date)) {
        $product_current_price = $product->special_price?$product->special_price:$product->product_price;
      }
    }

    return $product_current_price;
  }

  public static function checkProductDiscount(Product $product)
  {
    $product_current_price = false;
    $today = date('d-m-Y',time());

    if ($product->start_date && $product->end_date) {
      $start_date = date('d-m-Y',strtotime($product->start_date));
      $end_date = date('d-m-Y',strtotime($product->end_date));
      if (($today>= $start_date) && ($today<= $end_date)) {
        $product_current_price = $product->special_price?$product->special_price:$product->product_price;
      }
    }

    return $product_current_price;
  }
}

?>
