<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
      'customer_email',
      'total_cost',
      'details',
      'comments',
      'cart_id',
      'user_id'
    ];
}
