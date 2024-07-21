<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'url',
      'is_member_link',
      'is_casualty_link',
      'is_moh_link',
      'user_id'
    ];
}
