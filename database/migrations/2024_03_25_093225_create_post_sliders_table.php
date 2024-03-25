<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('page_name');
            $table->string('desktop_image_url');
            $table->string('mobile_image_url');
            $table->string('href_link')->nullable();
            $table->string('alt_name')->nullable();
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
        Schema::dropIfExists('post_sliders');
    }
}
