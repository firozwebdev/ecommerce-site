<?php

namespace App\Http\Controllers\Admin;
use Helper;
use App\ShippingZone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShippingZoneController extends Controller
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

        $s_zones=ShippingZone::all();
        return view('admin.shipping_zone.manage',compact('s_zones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('admin.shipping_zone.create');
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

          $s_zone=new ShippingZone();
          $s_zone->name=$request->name;
          $s_zone->status=1;
          $s_zone->save();

          Helper::notifySuccess('ShippingZone  Added successfully');
          return redirect(route('admin.shipping-zone.index'));
      }
      catch(\Exception $e) {
          Helper::notifyError($e->getMessage());
          return back();
      }
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShippingZone  $shippingZone
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingZone $shippingZone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShippingZone  $shippingZone
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
          $s_zone=ShippingZone::findOrFail($id);
          return view('admin.shipping_zone.edit',compact('s_zone'));

        } catch (\Exception $e) {
          return $e->getMessage();

        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShippingZone  $shippingZone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {

          $s_zone=ShippingZone::findOrFail($id);
          $s_zone->update($request->all());
          Helper::notifySuccess('ShippingZone  Updated successfully');
          return redirect(route('admin.shipping-zone.index'));
      }
      catch(\Exception $e) {
          Helper::notifyError($e->getMessage());
          return back();
      }
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShippingZone  $shippingZone
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      try {
        $s_zone=ShippingZone::findOrFail($id);
        $s_zone->delete();

        Helper::notifySuccess('ShippingZone  Deleted successfully');
        return redirect(route('admin.shipping-zone.index'));
    }
    catch(\Exception $e) {
        Helper::notifyError($e->getMessage());
        return back();
    }
  }

}
