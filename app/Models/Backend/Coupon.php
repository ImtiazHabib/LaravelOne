<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable=[
        'coupon_code',
    	'coupon_discount_type',
    	'coupon_course_type',
    	'coupon_fixed_value',
    	'coupon_percentage_value',
    	'coupon_status',
    ];
}
