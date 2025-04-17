<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_file',
        'title',
        'photographer',
        'caption',
        'category',
        'day_of_photo',
        'month_of_photo',
        'year_of_photo',
        'members_only',
        'user_id',
        'album_id'
    ];

}
