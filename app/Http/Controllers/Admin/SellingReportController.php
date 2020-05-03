<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class SellingReportController extends Controller
{



    public  function selling_report()
    {

       try {

       $s_report=Order::Where('status','Deliverd')
                                ->whereMonth('created_at', 'month')->get();
      return view('admin.selling-report.report',compact('s_report'));
       } catch (\Exception $e) {
         return $e->getMessage();

       }

     }



}
