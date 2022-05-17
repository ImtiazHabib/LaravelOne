<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected $fillable=[
      'batch_name',
      'batch_slug',
      'batch_starting_date',
      'batch_class_day',
      'batch_class_timing',
      'batch_fb_group',
      'batch_sit_number',
      'batch_branch_id',
      'batch_course_id',
      'batch_mentor_id',
      'batch_type',
      'batch_admission_status',
      'batch_status',
    ];

    public function course(){
      return $this->belongsTo(Course::class,'batch_course_id');
    }


    public function mentor(){
      return $this->belongsTo(Mentor::class,'batch_mentor_id');
    }

    public function branch(){
      return $this->belongsTo(Branch::class,'batch_branch_id');
    }

     
}
