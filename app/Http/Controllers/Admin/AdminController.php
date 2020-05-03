<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use App\Models\Contact;
use App\User;
use App\Models\Product;
use App\Newsletter;
use Helper;
use App\Models\Order;
use App\Models\SellerProduct;

class AdminController extends Controller {
    private $paginationMax = 10;


    public function __construct() {
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

        $date = date('m');
        //Carbon Method
        $fromDate = Carbon::now()->subMonth()->startOfMonth()->toDateString();
        $tillDate = Carbon::now()->subMonth()->endOfMonth()->toDateString();

         $customers=User::all();

         $total_sell=Order::where('status','Delivered')->get();
         $total_orders=Order::all();

         $currentMonthData = DB::table("orders")
                         ->whereRaw('MONTH(created_at) = ?',[$date])
                         ->get();
         $currentMonthsell = DB::table("orders")->where('status','Delivered')
                         ->whereRaw('MONTH(created_at) = ?',[$date])
                         ->get();

          $pastMontData = Order::whereBetween(DB::raw('date(created_at)'), [$fromDate, $tillDate])->get();
          $pastMontsell = Order::where('status','Delivered')->whereBetween(DB::raw('date(created_at)'), [$fromDate, $tillDate])->get();

        // for seller
         return view('admin.home.home',compact('customers','total_sell','total_orders','currentMonthData','pastMontData','pastMontsell','currentMonthsell'));

       } catch (\Exception $e) {
           return $e->getMessage();

       }

     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //

    }

    public function contact() {
        try {
            $contacts = Contact::paginate(10);
            return view('admin.contact.index', compact('contacts'));
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    public function view_contact($id) {
        try {
            $contact = Contact::findorfail($id);
            return view('admin.contact.view', compact('contact'));
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    public function users() {
        try {
            $users = User::paginate(10);
            return view('admin.users.users', compact('users'));
        }
        catch(\Exception $e) {
        }
    }

     public function delete_users(Request $request ,$id)
     {
       try {
         $users=User::findOrFail($id);
         $users->delete();
         Helper::notifySuccess('Customer Deleted Successfully');
         return back();
       } catch (\Exception $e) {
       Helper::notifyError($e->getMessage());
       return back();

      }
    }



    public function get_seller_product()
    {
        try {
            $s_products = Product::where('status', 0)->paginate(10);
            return view('admin.seller-products.manage_products', compact('s_products'));
        }
        catch(\Exception $e) {
            return $e->getMessage();
       }
    }

    public function updateStatus(Request $request, $id) {

        try {
            $status = Product::findOrFail($id);
            $status->status = $request->status;
            $status->save();
            Helper::notifySuccess(' Product Status Updated ');
            return back();
        }
        catch(\Exception $e) {
            Helper::notifyError($e->getMessage());
            return back();
        }
    }

    public function get_subsciber()
       {
          try {
              $newsletters = Newsletter::paginate(10);
              // dd($newsletters);
              return view('admin.newsletter.index', compact('newsletters'));
          }

          catch(\Exception $e) {
              return $e->getMessage();
          }
      }




}
