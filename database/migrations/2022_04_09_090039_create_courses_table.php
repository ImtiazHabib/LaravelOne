<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *  
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_english_title')->unique();
            $table->string('course_bangla_title');
            $table->string('course_slug');
            $table->string('course_intro_video_url');
            $table->integer('course_price');
            $table->string('course_bangla_price');
            $table->integer('course_graduate_number');
            $table->integer('course_total_lectures');
            $table->integer('course_class_hours');
            $table->integer('course_duration');
            $table->text('course_motivational_content');
            $table->text('course_opportunity');
            $table->text('course_curriculum_description');
            $table->string('course_cupon_status')->default(1)->comment('1 for not accept,2= accept');
            $table->string('course_status')->default(1)->comment('1=Active,2=Not Active');
            $table->string('course_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
