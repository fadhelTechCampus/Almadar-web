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
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //Added
            $table->string('order_id');
            $table->string('product_id');
            $table->enum('product_tybe', ['simple', 'custom']);
            $table->integer('number_of_colors');
            $table->json('color_codes');
            $table->boolean('speacial_color');
            $table->text('text_line_1');
            $table->text('text_line_2');
            $table->string('logo_link');
            $table->text('inner_text');
            $table->text('logo_link');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_product');
    }
};
