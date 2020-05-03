<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;
// use App\Models\VendorProfile;
class SellerProduct extends Model
{

   protected $fillable=["seller_id","product_id"];

  

  public function products()
    {
      return $this->belongsTo(Product::class, 'product_id', 'id');
    }



}
