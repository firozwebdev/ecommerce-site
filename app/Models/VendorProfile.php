<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SellerProduct;

class VendorProfile extends Model
{
  protected $fillable = [

      'avatar', 'seller_id','name', 'email','phone_number','address','shop_iamge','total_sell'
  ];


}
