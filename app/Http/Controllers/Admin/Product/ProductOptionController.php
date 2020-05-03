<?php
namespace App\Http\Controllers\Admin\Product;

use Auth;
use Helper;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductForm;

// Models
use App\Models\Product;
use App\Models\SellerProduct;
use App\Models\ProductColor;
use App\ProductSize;
use App\Models\SubCategory;
class ProductController extends Controller {

    public function __construct ()
    {
      $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        if (Auth::user()->hasRole(['seller'])) {
          $products = SellerProduct::where('seller_id', Auth::user()->id)->with(['products','products.sub_category'])->get();
          $products = $products->map(function($item, $key){
            return $item->products;
          });

        }else{
          $products = Product::with('sub_category')->paginate(10);
        }
        return view('admin.products.manage', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        try {
            $sub_categories = SubCategory::all();
            return view('admin.products.create', compact('sub_categories'));
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
      try {
             $this->validate($request,[
               'name'='required',
               'descirption'='required',
             ])

        $data=new ProductOption ();
        $data->name=$request->name;
        $data->descirption=$request->name;
        $data->status=1;
        $data->save();
         return redirect(route('admin.product-options'))->with([
           'message'=>'Product Option Add Successfully',
         ])
      } catch (\Exception $e) {

          return $e->getMessage();

      }

    }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id) {
            $product = Product::where('id', $id)->first();
            return view('admin.products.view', compact('product'));
        }
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id) {
            try {
                $sub_categories = SubCategory::all();
                $product = Product::where('id', $id)->first();
                return view('admin.products.edit', compact('product', 'sub_categories', 'product_colors'));
            }
            catch(\Exception $e) {
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

            $data=ProductOption::findOrFail($id);
            $data=update($request->all);
            return redirect(route('admin.product-options'))->with([
              'message'=>'Product Updated Successfully',
            ]);

          } catch (\Exception $e) {
            return $e->getMessage();

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
              $data=ProductOption::findOrFail($id);
              $data->delete();
              return redirect(route('admin.product-options'))->with([
                'message'=>'Product Option Deleted '
              ])

            } catch (\Exception $e) {

              return $e->getMessage();

            }


        }




    }
