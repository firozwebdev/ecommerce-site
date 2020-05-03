<?php

namespace App\Http\Controllers\Admin;

use App\PaymentMethod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Helper;

class PaymentMethodController extends Controller
{
  public function __construct ()
  {
    $this->middleware('auth:admin');
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pay_methods=PaymentMethod::all();
        return view('admin.payment_method.manage',compact('pay_methods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.payment_method.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      try {

        $pay_method= new PaymentMethod();
        $pay_method->name=$request->name;
        $pay_method->status=1;
        $pay_method->save();
        Helper::notifySuccess('Payment Method Added successfully');
        return redirect(route('admin.payment-methods.index'));
    }
    catch(\Exception $e) {
        Helper::notifyError($e->getMessage());
        return back();
    }
   }


    /**
     * Display the specified resource.
     *
     * @param  \App\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pay_method=PaymentMethod::findOrFail($id);
      return view('admin.payment_method.edit',compact('pay_method'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
          $pay_method=PaymentMethod::findOrFail($id);
          $pay_method->update($request->all());

          Helper::notifySuccess('Payment Method Updated successfully');
          return redirect(route('admin.payment-methods.index'));
          }
          catch(\Exception $e) {
          Helper::notifyError($e->getMessage());
          return back();
          }
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
          $pay_method=PaymentMethod::findOrFail($id);
          $pay_method->delete();

          Helper::notifySuccess('Payment Method Deleted successfully');
          return redirect(route('admin.payment-methods.index'));
          }
          catch(\Exception $e) {
          Helper::notifyError($e->getMessage());
          return back();
          }
      }
}
