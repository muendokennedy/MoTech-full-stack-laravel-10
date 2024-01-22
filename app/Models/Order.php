<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillabe = [
        'user_id',
        'firstName',
        'lastName',
        'email',
        'phone',
        'address1',
        'address2',
        'status',
        'message',
        'trackingNumber'
    ];
}
