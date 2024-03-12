<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('code');
            $table->string('booking_code');
            $table->string('fly_code');
            $table->string('customer_id');
            $table->string('service_price');
            $table->string('total');
            $table->string('trip');
            $table->string('booking_date');
            $table->string('pay_date');
            $table->string('from');
            $table->string('to');
            $table->string('fly_date');
            $table->string('pay_method');
            $table->string('note');
            $table->softDeletes();
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
