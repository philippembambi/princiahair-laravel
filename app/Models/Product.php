<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'label',
        'slug',
        'available',
        'price',
        'desc',
        'density',
        'length',
        'texture',
        'usage_delay',
        'color',
        'elastic_band',
        'a_image',
        'b_image',
        'c_image'
    ];

}
