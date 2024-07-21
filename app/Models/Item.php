<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'stripe_plan',
        'price',
        'adjustable_price',
        'set_quantity',
        'description',
        'sizes',
        'colors',
        'patches',
        'purpose',
        'is_donation',
        'members_only',
        'out_of_stock',
        'how_long'
    ];
}
