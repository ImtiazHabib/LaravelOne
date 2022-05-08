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
        Schema::create('mentors', function (Blueprint $table) {
            $table->id();
            $table->string('mentor_fullname');
            $table->string('mentor_designation')->nullable();
            $table->string('mentor_slug')->nullable();
            $table->string('mentor_phone')->nullable();
            $table->string('mentor_address')->nullable();
            $table->string('mentor_email')->nullable();
            $table->text('mentor_fiverr_img')->nullable();
            $table->string('mentor_fiverr_url')->nullable();
            $table->text('mentor_upwork_img')->nullable();
            $table->string('mentor_upwork_url')->nullable();
            $table->text('mentor_profile_picture')->nullable();
            $table->string('mentor_status')->default(1)->comment('1=active & 2= inactive');
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
        Schema::dropIfExists('mentors');
    }
};
