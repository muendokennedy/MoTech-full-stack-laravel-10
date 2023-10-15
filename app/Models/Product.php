<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'productName',
        'initialPrice',
        'discountPrice',
        'firstImage',
        'secondImage',
        'thirdImage',
        'fourthImage',
        'specifications',
        'brandName',
        'avgRating',
        'productWarranty',
        'productDescription'
    ];
}
