<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stkcallback extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'amount',
        'reference',
        'description',
        'MerchantRequestID',
        'CheckoutRequestID',
        'status',
        'MpesaReceiptNumber',
        'ResultDescription',
        'TransactionDate',
        'password'
    ];
}
