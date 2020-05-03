<?php
namespace App\Http\Controllers\FrontEnd\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Auth;
use Helper;

class CustomerController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('customer.home.home');
    }

    public function orders() {
        $orders = Order::with('customer')->where('customer_id', Auth::user()->id)->get();
        return view('customer.orders.index', compact('orders'));
    }

    public function orders_cancel($id) {
        try {
            $order = Order::find($id);
            $order->delete();
            Helper::notifySuccess('Orders Cancel Successfully');
            return back();
        }
        catch(\Exception $e) {
            Helper::notifyError($e->getMessage());
            return back();
        }
    }

    public function update(Request $request,$id){
      try {

        $order=Order::findOrfail($id);
        $order->update($request->all());

      } catch (\Exception $e) {
        return $e->getMessage();
      }
}

     public function edit($id)
     {
       try {

         $order=Order::findOrfail($id);
          return view('customer.edit',compact('order'));
       } catch (\Exception $e) {
         return $e->getMessage();

       }

     }

}
