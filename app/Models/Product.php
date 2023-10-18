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

    protected function scopeFilter($query, array $filters)
    {
        if($filters['phone'] ?? false){
            if($filters['phone'] !== 'all'){
                $query->where('brandName', 'like', '%' . request('phone') . '%');
            }
        }
        if($filters['laptop'] ?? false){
            if($filters['laptop'] !== 'all'){
                $query->where('brandName', 'like', '%' . request('laptop') . '%');
            }
        }
        if($filters['smartwatch'] ?? false){
            if($filters['smartwatch'] !== 'all'){
                $query->where('brandName', 'like', '%' . request('smartwatch') . '%');
            }
        }
        if($filters['television'] ?? false){
            if($filters['television'] !== 'all'){
                $query->where('brandName', 'like', '%' . request('television') . '%');
            }
        }
        if($filters['search'] ?? false){
            $query->where('brandName', 'like', '%'. request('search') . '%')
            ->orWhere('category', 'like', '%' . request('search') . '%')
            ->orWhere('productName', 'like', '%' . request('search') . '%');
        }
    }
}
