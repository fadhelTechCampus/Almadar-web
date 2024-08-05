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
    {        Schema::create('product', function (Blueprint $table) {
            $table->id()->unique();;
            $table->timestamps();
            $table->string('name');
            $table->double('price');
            $table->double('sale_price');
            
            $table->string('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->string('main_image');
            $table->unsignedInteger('category_ID')->unique();
            $table->boolean('is_featured');
            $table->string('product_id')->unique();
            $table->string('link');
            $table->enum('color',['Single', 'Double', 'Three_Colors','Spray', 'Custom',]);
        });    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
