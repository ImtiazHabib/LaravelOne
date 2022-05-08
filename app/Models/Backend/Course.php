<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable=[
        'course_english_title',
    	'course_bangla_title',
    	'course_slug',
    	'course_intro_video_url',
    	'course_price',
    	'course_bangla_price',
    	'course_graduate_number',
    	'course_total_lectures',
    	'course_class_hours',
    	'course_duration',
    	'course_motivational_content',
    	'course_opportunity',
    	'course_curriculum_description',
    	'course_cupon_status',
    	'course_status',
    	'course_image',	
    ];
}
