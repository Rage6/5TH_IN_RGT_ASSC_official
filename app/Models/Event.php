<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'slug',
      'first_day',
      'last_day',
      'location',
      'primary_image',
      'form_options'
    ];

    public function all_event_subevents() {
      // return $this->hasMany('App\Models\Subevent');
      return $this->hasMany(Subevent::class);
    }
}
