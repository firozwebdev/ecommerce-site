<?php

namespace App\Http\Controllers\Admin\Category;

use Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Models
use App\Models\Menu;
use App\Models\Category;
use App\Models\SubCategory;


class SubcategoryController extends Controller
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
      $sub_categories=SubCategory::with('menu')->paginate(10);

      return view('admin.sub_category.manage',compact('sub_categories'));
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

      try   {

        $this->validate($request, [
        'name' => 'required',
        ]);

        if($request->hasfile('icon'))
        {
          $file = $request->file('icon');
          $name=time().$file->getClientOriginalName();
          $file->move(public_path('uploads').'/SubCategory/', $name);
        }

        $sub_category= new SubCategory();
        $sub_category->name=$request->name;
        $sub_category->menu_id=$request->menu_id;
        $sub_category->category_id=$request->category_id;
        $sub_category->description=$request->description;
        $sub_category->slug =str_slug($request->name)."=".rand(255,999);
        $sub_category->icon=$name;
        $sub_category->status=1;
        $sub_category->save();

        Helper::notifySuccess('Sub Category Added  successfully');
        return redirect(route('admin.sub-categories.index'));
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

        $sub_category = SubCategory::with('menu','category')->where('id', $id)->first();
        $menus = Menu::all();
        $categories = Category::all();

        return view('admin.sub_category.edit',compact('sub_category','menus','categories'));
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
        $sub_category=SubCategory::findOrFail($id);
        $sub_category->update($request->all());

        if ($request->hasFile('icon'))
        {
          $file = $request->file('icon');
          $name=time().$file->getClientOriginalName();
          $sub_category->icon = $name;
          $file->move(public_path('uploads').'/SubCategory/', $name);
          $sub_category->save();
        }

        Helper::notifySuccess('SubCategory Updated Successfully');
        return redirect(route('admin.sub-categories.index'));
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
        $sub_category=SubCategory::findOrFail($id);
        $sub_category->delete();

        Helper::notifySuccess('Sub Category Deleted Successfully');
        return redirect(route('admin.sub-categories.index'));
      } catch (\Exception $e) {
        Helper::notifyError($e->getMessage());
        return back();
      }
    }
}
