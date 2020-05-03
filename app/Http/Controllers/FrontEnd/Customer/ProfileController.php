<?php

namespace App\Http\Controllers\FrontEnd\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\User;
use Helper;
use Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }


    public function index()
    {
      return view('customer.profile.profile');

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
    public function edit(){
       return view ('customer.profile.edit');

    // {   $data = User::find(Auth::user()->id);
    //   return view ('customer.profile.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request )
    {

      try {

        $profile=User::findOrFail(Auth::user()->id);
        $profile->update($request->all());

       if ($request->hasFile('image'))
       {
         $file = $request->file('image');
         $name=time().$file->getClientOriginalName();
         $profile->image = $name;
         $file->move(public_path('uploads').'/userimages/', $name);
         $profile->save();
       }

       Helper::notifySuccess('Customer Profile Updated');
       return redirect(route('customer.profile.index'));

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
        //
    }
}
