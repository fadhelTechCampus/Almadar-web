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
        Schema::create('temp_payment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();//Added already
            //Added
            $table->string('user_id')->unique();
            $table->integer('phone');
            $table->string('email');
            $table->string('paymment_id')->unique();
            $table->string('paymment_reference');
            $table->string('paymment_type');
            $table->string('paymment_url');
            $table->string('paymment_token');
            $table->string('user_ip')->unique();
            $table->string('session_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temp_payment');
    }
};
