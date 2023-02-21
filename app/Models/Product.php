<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['product_name','product_category','product_price','rating','view_count','product_images','product_description','sizes','colors'];
    protected $casts = [
        'sizes' => 'array',
        'colors'=>'array',

    ];


}
