<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductGallary extends Model
{
     protected $table = 'gallary_products';

     protected $fillable = ['link','product_id'];
}
