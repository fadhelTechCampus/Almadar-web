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
        Schema::create('supplier_profile', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //Added
            $table->string('whatsapp_link');
            $table->string('x_link');
            $table->string('tag_line');
            $table->string('logo_png_image');
            $table->string('google_maps_id');
            $table->string('about_us');
            $table->string('instagram_link');
            $table->string('youtube_link');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_profile');
    }
};
