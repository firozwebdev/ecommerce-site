<?php
namespace App\Http\Controllers\FrontEnd;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Product;
use App\Models\VendorProfile;
use App\Models\SellerProduct;
use App\Models\SubCategory;
use App\Newsletter;

class WelcomeController extends Controller {

    public function faq()
    {
        return view('front.pages.faq');
    }

    public function terms()
    {
        return view('front.pages.terms');
    }

    public function compare()
     {
        return view('front.pages.compare');
    }

    public function wishlist()
    {
        return view('front.pages.wishlist');
    }

    public function blog()
     {
        return view('front.pages.blog');
    }

    public function contact()
     {
        return view('front.pages.contact');
    }

    public function about()
     {
        return view('front.pages.about');
    }

    public function shop()
    {
        return view('front.shop.shop');
    }

    public function seller_product($id)
    {
        try {
            $s_product = SellerProduct::where('seller_id', $id)->with('products')->get();
            $s_info = VendorProfile::where('seller_id', $id)->first();
            return view('front.pages.seller_product', compact('s_product', 's_info'));
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
    public function newsletters(Request $request)
     {
        try {
            $this->validate($request, ['email' => 'required', ]);
            $newsletter = new Newsletter();
            $newsletter->email = $request->email;
            $newsletter->save();
            return back()->with(['message' => 'You Are Subscibed! Tnx']);
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }


}
