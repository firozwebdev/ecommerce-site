<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Models
use App\Models\Product;

class DailyDeals extends Model
{
    protected $fillable = ['product_id', 'priority', 'status'];

//status
    public function scopeActive($query)
    {
      $query->where('status',1);
    }
//product relation
    public function product()
    {
      return $this->belongsTo(Product::class,'product_id','id');
    }
}
