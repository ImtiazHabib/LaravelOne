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
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->string('batch_name')->unique();
            $table->string('batch_slug');
            $table->string('batch_starting_date')->nullable();
            $table->string('batch_class_day')->nullable();
            $table->string('batch_class_timing')->nullable();
            $table->string('batch_fb_group')->nullable();
            $table->string('batch_sit_number')->default(25);
            $table->integer('batch_branch_id')->default(0);
            $table->integer('batch_course_id')->default(0);
            $table->integer('batch_mentor_id')->default(0);
            $table->integer('batch_type')->default(1)->comment('1=Online,2=Offline');
            $table->integer('batch_admission_status')->default(2)->comment('1=Active,2=Inactive');
            $table->integer('batch_status')->default(2)->comment('1=Active,2=Inactive');
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
        Schema::dropIfExists('batches');
    }
};
