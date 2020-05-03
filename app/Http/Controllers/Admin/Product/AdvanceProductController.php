<?php

namespace App\Http\Controllers\Admin\Product;

use Helper;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Models
use App\Models\DailyDeals;

class AdvanceProductController extends Controller
{

  public function __construct ()
  {
    $this->middleware('auth:admin');
  }

  public function manageDailyDeals()
  {
    $dailyDeals = DailyDeals::with('product')->get();
    return view('admin.products.advance_products.manage_daily_deals', compact('dailyDeals'));
  }


  public function addDailyDeals(Request $request)
  {
    try {
      $request->validate([
        'product_id' => 'required|numeric|unique:daily_deals,id',
        'priority' => 'nullable|numeric|min:1|max:1000',
        'status' => 'required|numeric'
      ]);
      DailyDeals::create($request->all());
      Helper::notifySuccess('Product Added successfully');
      return redirect(route('admin.products.advance-products.daily-deals'));
    } catch (\Exception $e) {
      Helper::notifyError($e->getMessage());
      return back();
    }
  }


  public function deleteDailyDeals($deal_id)
  {
    try {
      DailyDeals::destroy($deal_id);

      Helper::notifySuccess('Deal Deleted successfully');
      return redirect(route('admin.products.advance-products.daily-deals'));
    } catch (\Exception $e) {
      Helper::notifyError($e->getMessage());
      return back();
    }
  }

  public function changeDailyDeals($deal_id)
  {
    try {
      $dailyDeal = DailyDeals::findOrFail($deal_id);
      $dailyDeal->status = !$dailyDeal->status;
      $dailyDeal->save();

      Helper::notifySuccess('Deal Updated successfully');
      return redirect(route('admin.products.advance-products.daily-deals'));
    } catch (\Exception $e) {
      Helper::notifyError($e->getMessage());
      return back();
    }
  }

  public function updateDailyDeals(Request $request, $deal_id)
  {
    try {
      $request->validate([
        'priority_upd' => 'required'
      ]);
      $dailyDeal = DailyDeals::findOrFail($deal_id);
      $dailyDeal->priority = $request->priority_upd;
      $dailyDeal->save();

      Helper::notifySuccess('Deal Updated successfully');
      return redirect(route('admin.products.advance-products.daily-deals'));
    } catch (\Exception $e) {
      Helper::notifyError($e->getMessage());
      return back();
    }
  }


}
