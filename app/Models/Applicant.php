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
      'other_conflicts',
      'unit_details',
      'email',
      'comments',
      'type',
      'guest_num',
      'guest_names',
      'arrival_date',
      'all_boolean_options',
      'all_boolean_count'
    ];
}
