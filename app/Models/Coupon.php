<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{

    protected $fillable =["name","code","type","value","shiping","start_date","end_date",
    "product","category","coupons_limit","customer_limit","status"];

 //sub category relation
    public function sub_category()
    {
       return $this->belongsTo('App\Models\SubCategory','category','id');
      }
//product relation
    public function products()
    {
        return $this->belongsTo('App\Models\Product','product','id');
      }

}
