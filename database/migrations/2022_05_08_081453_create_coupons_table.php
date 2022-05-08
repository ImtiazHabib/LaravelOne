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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_code')->unique();
            $table->integer('coupon_discount_type')->comment('1=Fixed,2=Percentage');
            $table->integer('coupon_course_type')->comment(' 1=Online, 2=Offline ');
            $table->integer('coupon_fixed_value')->nullable();
            $table->integer('coupon_percentage_value')->nullable();
            $table->integer('coupon_status')->default(1)->comment('1=Active, 2=Inactive');
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
        Schema::dropIfExists('coupons');
    }
};
