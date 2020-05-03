<?php

namespace App\Http\Controllers\Admin\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Helper;
use Auth;
use App\Models\VendorProfile;


class ProfileController extends Controller
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
       $v_profile=VendorProfile::where('seller_id',Auth::guard('admin')->user()->id)->limit(1)->get();
      return view('admin.seller_profile.profile',compact('v_profile'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('admin.seller_profile.create');
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
          $validator = Validator::make($request->all(), [
            'name' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png|',
            'shop_iamge' => 'required|image|mimes:jpeg,png|',
          ]);
          if ($validator->fails()) {
              return back()
                      ->withErrors($validator)
                      ->withInput();
          }
          if ($request->file('avatar','shop_iamge	')->isValid()) {
              $avatar_name= $request->avatar->getClientOriginalName();
              $shop_iamge= $request->shop_iamge->getClientOriginalName();
              $request->avatar->move(public_path('uploads/documents').'/Sellerimages/', $avatar_name);
              $request->shop_iamge->move(public_path('uploads/documents').'/Sellerimages/', $shop_iamge);

              $profile=new VendorProfile();
              $profile->seller_id=$request->seller_id;
              $profile->name=$request->name;
              $profile->email=$request->email;
              $profile->phone_number=$request->phone_number;
              $profile->address=$request->address;
              $profile->avatar=$avatar_name;
              $profile->shop_iamge= $shop_iamge;
              // dd($profile);
               $profile->save();

              Helper::notifySuccess('Profile Created successfully');
              return redirect(route('admin.seller-profiles.index'));
          }
      } catch (\Exception $e) {
          Helper::notifyError($e->getMessage());
          return back();
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data=VendorProfile::where('seller_id',Auth::guard('admin')->user()->id())->first();

      return view('admin.seller_profile.profile',compact('data'));
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
      try {


          $profile= VendorProfile::findORFail($id);
          $profile->update($request->all());

          if ($request->hasFile('avatar','shop_iamge')) {
            if ($request->file('avatar','shop_iamge')->isValid()) {
              $avatar_name=$request->avatar->getClientOriginalName();
              $shop_iamge_name= $request->shop_iamge->getClientOriginalName();
              $request->avatar->move(public_path('uploads/documents').'/Sellerimages/',$avatar_name);
              $request->shop_iamge->move(public_path('uploads/documents').'/Sellerimages/', $shop_iamge_name);
              $profile->avatar=$avatar_name;
              $profile->shop_iamge=$shop_iamge_name;
              $profile->save();

            }
          }

        Helper::notifySuccess('Profile Updated successfully');
        return redirect(route('admin.seller-profiles.index'));
      } catch (\Exception $e) {
        Helper::notifyError($e->getMessage());
        return back();
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
