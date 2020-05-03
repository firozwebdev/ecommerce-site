<?php

namespace App\Http\Controllers\Admin;

use Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\SubCategory;

class CouponController extends Controller
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

        $coupons=Coupon::all();
        return view('admin.cupons.manage',compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $products=Product::all();
          $sub_categories=SubCategory::all();
          return view('admin.cupons.create',compact('products','sub_categories'));

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


         $this->validate($request, [


         ]);

              $coupon=new Coupon();
              $coupon->name=$request->name;
              $coupon->code=$request->code;
              $coupon->type=$request->type;
              $coupon->category=$request->category;
              $coupon->product=$request->product;
              $coupon->value=$request->value;
              $coupon->shiping=$request->shiping;
              $coupon->start_date=$request->start_date;
              $coupon->end_date=$request->end_date;
              $coupon->coupons_limit=$request->coupons_limit;
              $coupon->customer_limit=$request->customer_limit;
              $coupon->status=1;
              $coupon->save();

              Helper::notifySuccess('Coupon Added successfully');
              return redirect(route('admin.coupons.index'));
          }
          catch(\Exception $e) {
              Helper::notifyError($e->getMessage());
              return back();
          }
         }




    /**
     * Display the specified resource.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coupon=Coupon::where('id',$id)->first();
        return view('admin.cupons.view',compact('coupon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $sub_categories=SubCategory::all();
      $products=Product::all();
       $coupon=Coupon::where('id',$id)->first();
       return View('admin.cupons.edit',compact('coupon','sub_categories','products'));
       }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
       try {
         $coupon=Coupon::findOrFail($id);
         $coupon->update($request->all());

         Helper::notifySuccess('Coupon Updated successfully');
         return redirect(route('admin.coupons.index'));
     }
     catch(\Exception $e) {
         Helper::notifyError($e->getMessage());
         return back();
     }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      try {

        $coupon=Coupon::findOrFail($id);
        $coupon->delete();

        Helper::notifySuccess('Coupon Deleted successfully');
        return redirect(route('admin.coupons.index'));
    }
    catch(\Exception $e) {
        Helper::notifyError($e->getMessage());
        return back();
    }

}
}
