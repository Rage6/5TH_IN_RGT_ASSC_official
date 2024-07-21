<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conflict extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'start_year',
      'end_year',
      'unit_participated',
      'bobcat_casualties',
      'bobcat_recipients',
      'parent_id'
    ];

    public function all_conflict_users() {
      return $this->belongsToMany('App\Models\User')
        ->where('deceased',1)
        ->whereNotNull('expiration_date');
    }
}
