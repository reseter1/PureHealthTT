<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;


    protected $table = 'order_details';


    protected $fillable = [
        'ordercode',
        'productcode',
        'number',
        'realprice',
        'created_at'
    ];
}
