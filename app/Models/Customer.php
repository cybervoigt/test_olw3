<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'document',
        'address',
        'phone',
        'status'
    ];

    protected $casts = [
        'status' => CustomerStatus::class
    ];

}
