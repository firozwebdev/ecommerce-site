<?php

namespace App\Http\Controllers\Admin;
use Helper;
use Validator;
use App\Ads;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdsController extends Controller
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
       try {

         $ads=Ads::all();
         return view('admin.ads.manage',compact('ads'));

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
        return view('admin.ads.create');
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
            'title' => 'required',
            'images' => 'required|image|mimes:jpeg,png|max:2048:',
          ]);
          if ($validator->fails()) {
              return back()
                      ->withErrors($validator)
                      ->withInput();
          }
          if ($request->file('images')->isValid()) {
              $image_name= $request->images->getClientOriginalName();
              $request->images->move(public_path('uploads/documents').'/adsimages/', $image_name);

              $ads=new Ads();
              $ads->title=$request->title;
              $ads->link=$request->link;
              $ads->images= $image_name;
              $ads->status=1;
              $ads->save();

              Helper::notifySuccess('Ads Added successfully');
              return redirect(route('admin.ads.index'));
          }
      } catch (\Exception $e) {
          Helper::notifyError($e->getMessage());
          return back();
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function show(Ads $ads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      try {
        $ads=Ads::findorfail($id);
        return view('admin.ads.edit',compact('ads'));
      } catch (\Exception $e) {
        return $e->getMessage();

    }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      try {
          $validator = Validator::make($request->all(), [
            'title' => 'required',
            'images' => 'max:2048:',
          ]);
          if ($validator->fails()) {
              return back()
                      ->withErrors($validator)
                      ->withInput();
          }
          $ads= Ads::findOrFail($id);
          $ads->update($request->all());

          if ($request->hasFile('images')) {
            if ($request->file('images')->isValid()) {
              $image_name= $request->images->getClientOriginalName();
              $ads->images=$image_name;
              $request->images->move(public_path('uploads/documents').'/adsimages/', $image_name);
              $ads->save();
            }
          }

        Helper::notifySuccess('Ads Updated successfully');
        return redirect(route('admin.ads.index'));
      } catch (\Exception $e) {
        Helper::notifyError($e->getMessage());
        return back();
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
          $ads=Ads::findOrFail($id);
          $ads->delete();
          Helper::notifySuccess('Ads Deleted Successfully');
          return redirect(route('admin.ads.index'));
        } catch (\Exception $e) {
          Helper::notifyError($e->getMessage());
          return back();
        }

    }
}
