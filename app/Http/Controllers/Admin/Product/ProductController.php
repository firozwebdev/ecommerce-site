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
            $validator = Validator::make($request->all(), ['multiple' => 'required',
                            'name' => 'required',
                            'title' => 'required',
                            'sub_category_id' => 'required',
                            'product_price' => 'required',
                            'product_quantity' => 'required',
                            'sku' => 'required',
                            'stock' => 'required',
                            'description' => 'required',
                            'color' => 'required',
                            'size' => 'required',
                            'multiple' => 'required',
                            'multiple.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4048',
                        ]);
            if ($validator->fails()) {
                return back()
                        ->withErrors($validator)
                        ->withInput();
            }
            if ($request->hasfile('multiple')) {
                foreach ($request->file('multiple') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move(public_path('uploads/documents') . '/productimages/', $name);
                    $data[] = $name;
                }
                $product = New Product();
                $product->product_name = $request->name;
                $product->product_title = $request->title;
                $product->sub_category_id = $request->sub_category_id;
                $product->slug = str_slug($request->title) . "-" . rand(255, 999);
                $product->product_price = $request->product_price;
                $product->special_price = $request->special_price;
                $product->discount = $request->discount;
                $product->start_date = $request->start_date;
                $product->end_date = $request->end_date;
                $product->product_quantity = $request->product_quantity;
                $product->sku = $request->sku;
                $product->stock = $request->stock;
                $product->video_link = $request->video_link;
                $product->multiple = json_encode($data);
                $product->description = $request->description;
                $product->color = json_encode(request('color'));
                $product->size = json_encode(request('size'));
                // $product->warrantly=$request->warrantly;
                $product->status = 1;
                $product->save();
              }

          Helper::notifySuccess('Product Added successfully');
          return redirect(route('admin.products.index'));
      }
      catch(\Exception $e) {
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
        public function update(Request $request, $id) {
            try {
                $product = Product::findOrFail($id);

                $product->update($request->all());
                if ($request->hasfile('multiple')) {
                    foreach ($request->file('multiple') as $image) {
                        $name = $image->getClientOriginalName();
                        $image->move(public_path('uploads/documents') . '/productimages/', $name);
                        $data[] = $name;
                        $product->multiple = json_encode($data);
                        $product->save();
                    }
                }
                Helper::notifySuccess('Product Updated successfully');
                return redirect(route('admin.products.index'));
            }
            catch(\Exception $e) {
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
        public function destroy($id) {
            try {
                $product = Product::findorfail($id);
                $product->delete();
                Helper::notifySuccess('Product Delete successfully');
                return redirect(route('admin.products.index'));
            }
            catch(\Exception $e) {
                return redirect(route('admin.products.index'))->with(['message' => $e->getMessage() ]);
            }
        }

        public function searchProducts(Request $request){
            return response()->json([
                'products' =>Product::where('id','LIKE','%'.$request->q.'%')->whereNotIn('status',[0])->get()->map(
                    function($product){
                        return ['id'=>$product->id,'product_name'=>$product->product_name,'product_images' => $product->multiple];
                })
            ]);
        }



    }
