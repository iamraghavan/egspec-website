<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsSlidersTable extends Migration
{
    public function up()
    {
        Schema::create('ads_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('vertical_slider_url')->nullable();
            $table->string('vertical_slider_alt_name')->nullable();
            $table->string('horizontal_slider_url')->nullable();
            $table->string('horizontal_slider_alt_name')->nullable();
            $table->string('page_sections');
            $table->string('href_link');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ads_sliders');
    }
}