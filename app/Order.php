<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders_table';

     protected $fillable = ['product_id','total_price','customer_id'];
}
