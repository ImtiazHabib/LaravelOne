<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = [
      'mentor_fullname',
      'mentor_designation',
      'mentor_slug',
      'mentor_phone',
      'mentor_address',
      'mentor_email',
      'mentor_fiverr_img',
      'mentor_fiverr_url',
      'mentor_upwork_img',
      'mentor_upwork_url',
      'mentor_profile_picture',
      'mentor_status',
    ];
}
