<?php

namespace App\Http\Controllers\Admin;

use Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// Models
use App\Models\Backend\Admin;
use App\Models\Backend\Role;
use App\Models\Backend\AdminRole;

class SellerController extends Controller
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
      $roles = Role::where('name','seller')->with('users')->first();
      return view('admin.sellers.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('admin.sellers.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'name' => 'required|max:250',
        'email' => 'required|email|max:250|unique:admins,email',
        'password' => 'required|min:6|max:250| confirmed'
      ]);
      try {
        $role_seller = Role::where('name', 'seller')->first();
        $request->merge(['password' => bcrypt($request->password)]);
        $seller = Admin::create($request->all());
        $seller->roles()->attach($role_seller);

        Helper::notifySuccess('Seller Added successfully');
        return redirect(route('admin.sellers.index'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      try {
        $seller = Admin::findOrFail($id);
        return view('admin.sellers.edit', compact('seller'));
      } catch (\Exception $e) {
        Helper::notifyError($e->getMessage());
        return back();
      }

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
      $request->validate([
        'name' => 'required|max:250',
        'email' => 'required|email|min:6|max:250|unique:admins,email,'.$id,
        'password' => 'nullable|min:6|max:250|confirmed'
      ]);
      try {
        $seller = Admin::findOrFail($id);
        $seller->name = $request->name;
        $seller->email = $request->email;
        if ($request->password) {
          $seller->password =  bcrypt($request->password);
        }
        $seller->save();

        Helper::notifySuccess('Seller Updated successfully');
        return redirect(route('admin.sellers.index'));
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
        try {

          $seller = Admin::findOrFail($id);
          $seller->delete();
          
          $role_seller = AdminRole::where('admin_id', $seller->id)->first();
          $role_seller->delete();

          Helper::notifySuccess('Seller Deleted successfully');
          return redirect(route('admin.sellers.index'));
        } catch (\Exception $e) {
          // return $e;
          Helper::notifyError($e->getMessage());
          return back();
        }

    }
}
