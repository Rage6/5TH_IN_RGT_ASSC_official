<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
      'first_name',
      'last_name',
      'spouse_name',
      'address_line_1',
      'address_line_2',
      'city',
      'state',
      'zip_code',
      'country',
      'phone_number',
      'conflicts',
      'unit_details',
      'email',
      'comments',
    ];
}
