<?php

namespace App\Http\Controllers\Admin\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PopularCategory;
use Helper;


class PopularCategoryController extends Controller
{
  public function __construct ()
  {
    $this->middleware('auth:admin');
  }
  public function index(){
    $fe_categories=PopularCategory::with('category')->get();

    return view('admin.category.feature_category.manage',compact('fe_categories'));
  }

  public function add_popular_c(Request $request)
  {
    try {
      $request->validate([
        'category_id' => 'required|numeric|unique:popular_categories,id',
        'priority' => 'nullable|numeric|min:1|max:1000',
        'status' => 'required|numeric'
      ]);
      PopularCategory::create($request->all());
      Helper::notifySuccess('PopularCategory  Added successfully');
      return redirect(route('admin.popular-category'));
    } catch (\Exception $e) {
      Helper::notifyError($e->getMessage());
      return back();
    }
  }




    public function edit_popular_c ($id)
    {
      try {
        $popular_category = PopularCategory::findOrFail($id);
        $popular_category->status = !$popular_category->status;
        $popular_category->save();

        Helper::notifySuccess('PopularCategory Updated successfully');
        return redirect(route('admin.popular-category'));
      } catch (\Exception $e) {
        Helper::notifyError($e->getMessage());
        return back();
      }
}

  public function delete_popular_c($id)
  {
    try {
      PopularCategory::destroy($id);

      Helper::notifySuccess('PopularCategory Deleted successfully');
      return redirect(route('admin.popular-category'));
    } catch (\Exception $e) {
      Helper::notifyError($e->getMessage());
      return back();
    }
   }
  //
}
