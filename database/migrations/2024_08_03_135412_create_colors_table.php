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
        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //Added
            $table->string('name');
            $table->string('id');
            $table->enum('tybe', ['single_only', 'double_or_single', 'three_colors_or_single', 'spray']);
            $table->string('category_id')->nullable();//can be null to apply for all
            $table->string('image_link');
            


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colors');
    }
};
