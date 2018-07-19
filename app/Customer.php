<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

     protected $fillable = ['customer_name','customer_address','customer_phone'];
}
