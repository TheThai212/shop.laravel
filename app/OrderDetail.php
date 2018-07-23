<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details_table';

     protected $fillable = ['order_id','product_detail_id','price','quantity'];
}
