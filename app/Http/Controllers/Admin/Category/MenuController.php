<?php

namespace App\Http\Controllers\Admin\Category;

use Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;

class MenuController extends Controller
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
      $menus=Menu::paginate(10);

      return view('admin.menu.manage',compact('menus'));
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

     try {
       $this->validate($request, [
        'name' => 'required',
        'menu_icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
      ]);

      if($request->hasfile('menu_icon'))
      {
         $file = $request->file('menu_icon');
         $name=time().$file->getClientOriginalName();
         $file->move(public_path('uploads').'/Menuimages/', $name);
      }
       $menu= new Menu();
       $menu->name=$request->name;
       $menu->description=$request->description;
       $menu->menu_icon=$name;
       $menu->slug =str_slug($request->name)."=".rand(255,999);
       $menu->status=1;
       $menu->save();

      Helper::notifySuccess('Menu Added  successfully');
      return redirect(route('admin.menus.index'));
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
        $menu=Menu::where('id', $id)->first();

        return view('admin.menu.edit',compact('menu'));
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
      try {

        $menu=Menu::findOrFail($id);
        $menu->update($request->all());

       if ($request->hasFile('menu_icon'))
       {
         $file = $request->file('menu_icon');
         $name=time().$file->getClientOriginalName();
         $menu->menu_icon = $name;
         $file->move(public_path('uploads').'/Menuimages/', $name);
         $menu->save();
       }

       Helper::notifySuccess('Menu updated successfully');
       return redirect(route('admin.menus.index'));

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

       $menu=Menu::findOrFail($id);
       $menu->delete();

       Helper::notifySuccess('Menu Delete successfully');

       return redirect(route('admin.menus.index'));
     } catch (\Exception $e) {

       return redirect(route('admin.menus.index'))->with([
         'message'=>$e->getMessage()
       ]);

     }
    }
}
