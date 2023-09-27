<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timespan extends Model
{
    use HasFactory;

    protected $fillable = [
      'start_month',
      'start_year',
      'end_month',
      'end_year',
      'job',
      'unit',
      'user_id'
    ];
}
