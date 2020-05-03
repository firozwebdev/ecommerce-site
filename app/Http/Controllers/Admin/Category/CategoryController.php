<?php

namespace App\Http\Controllers\Admin\Category;

use Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Category;
use App\Models\SubCategory;

class CategoryController extends Controller
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
       $categories=Category::with('menu')->paginate(10);

       return view('admin.category.manageCategories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $menus=Menu::all();
      $categories=Category::all();

      return view('admin.category.create',compact('menus','categories'));
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
               'category_icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',

           ]);

         if($request->hasfile('category_icon'))
           {
              $file = $request->file('category_icon');
              $name=time().$file->getClientOriginalName();
              $file->move(public_path('uploads').'/Categoryimages/', $name);
         }

              $category= new Category();
              $category->name=$request->name;
              $category->menu_id=$request->menu_id;
              $category->description=$request->description;
              $category->category_icon=$name;
              $category->slug =str_slug($request->name)."=".rand(255,999);
              $category->status=1;
              $category->save();

              Helper::notifySuccess('Category Added  successfully');
              return redirect('admin/categories');
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
        $category= Category::with('menu')->where('id', $id)->first();
        $menus=Menu::all();

        return view('admin.category.editCategory',compact('category','menus'));
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
          $category=Category::findOrFail($id);
          $category->update($request->all());

         if ($request->hasFile('category_icon'))
         {
           $file = $request->file('category_icon');
           $name=time().$file->getClientOriginalName();
           $category->category_icon = $name;
           $file->move(public_path('uploads').'/Categoryimages/', $name);
           $category->save();
         }

         Helper::notifySuccess('Category Updated Successfully');
         return redirect(route('admin.categories.index'));
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

        $category = Category::findOrFail($id);
        $category->delete();

        Helper::notifySuccess('Category Deleted Successfully');
        return redirect(route('admin.categories.index'));
      } catch (\Exception $e) {
        Helper::notifyError($e->getMessage());
        return back();
      }

    }

    public function search_category(Request $request){
        return response()->json([
            'categories' =>Category::where('id','LIKE','%'.$request->q.'%')->whereNotIn('status',[0])->get()->map(
                function($category){
                    return ['id'=>$category->id,'name'=>$category->name,'category_icon' => $category->category_icon];

            })
        ]);
    }


}
