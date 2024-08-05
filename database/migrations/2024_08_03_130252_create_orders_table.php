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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //Added
            $table->float('amount');
            $table->float('discount');
            $table->string('coupon');
            $table->string('user_id');
            $table->enum('tybe',['custom', 'ready_made']);
            $table->float('paid_amount');
            $table->float('granf_total');
            $table->string('referral_id');
            $table->longText('internal_notes');
            $table->longText('customer_notes');
            $table->boolean('payment_status');
            $table->enum('payment_tybe', ['online_payment', 'bank_transfer']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
