<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase',
        'currency',
        'payment_code',
        'payment_status',
        'payer_id',
        'payer_email',
    ];

}
