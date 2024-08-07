<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subevent extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'start_time',
      'has_start_time',
      'end_time',
      'has_end_time',
      'iframe_map_src',
      'classes',
      'description',
      'location',
      'primary_image',
      'order_number',
      'is_payment',
      'event_id'
    ];
}
