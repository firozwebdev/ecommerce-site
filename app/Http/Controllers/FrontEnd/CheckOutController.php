<?php

namespace App\Http\Controllers\FrontEnd;

Use Auth;
use Session;
use DB;
use Helper;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\Controller;

Use App\Models\Order;
use App\PaymentMethod;
use App\ShippingZone;



class CheckOutController extends Controller
{
    private $orderIdStartInt = 100000;
    private $orderIdString = "YN";

    public function __construct()
    {
      $this->middleware('auth');
    }


    public function checkout(){
      try {

        $cartcontent= Cart::content();
        $s_zones= ShippingZone::all();
        $pay_methods= PaymentMethod::all();
        $carts_count = Cart::count();

        return view('front.checkout.checkout',compact('cartcontent','pay_methods','s_zones','carts_count'));

      } catch (\Exception $e) {
        return $e->getMessage();
      }


    }

    public function store(Request $request)
   {
      try {
        $this->validate($request,[
            'customer_id' => 'required|max:191',

        ]);

         $customer_id = Auth::user()->id;
         $cart = Cart::content();


         $data = new Order;
         $data['customer_id']=$customer_id;
         $data->product_id = json_encode($request->product_id);
         $data->product_name = json_encode($request->product_name);
         $data->total_price = $request->total_price;
         $data->product_qty = json_encode($request->product_qty);
         $data->product_color=json_encode($request->product_color);
         $data->product_size=json_encode($request->product_size);
         $data->product_price=json_encode($request->product_price);
         $data->delivery_address = $request->delivery_address;
         $data->home_address = $request->home_address;
         $data->phone_number = $request->phone_number;
         $data->payment_method = $request->payment_method;
         $data->status ='Pending';
         $data->save();

         $orderId = $this->orderIdString. ($this->orderIdStartInt + $data->id);

         $lastOrder = Order::findOrFail($data->id);
         $lastOrder->order_id = $orderId;
         $lastOrder->save();

         Helper::generateCustomerInvoice($lastOrder);

         Cart::destroy();
        return redirect('customer/orders')->with([
        'alert-type' => 'success',
        'message' => 'Your Order Completed Successfuly'
      ]);

      }
       catch (\Exception $e) {
        return $e->getMessage();


      }

}
}
