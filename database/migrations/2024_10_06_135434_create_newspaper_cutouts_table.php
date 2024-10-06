<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewspaperCutoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newspaper_cutouts', function (Blueprint $table) {
            $table->id();
            $table->string('image_path'); // Stores the image URL or path
            $table->string('department'); // Department related to the image
            $table->unsignedBigInteger('uploaded_by'); // User who uploaded the image
            $table->timestamps();

            // Foreign key to reference the user who uploaded (assuming a users table exists)
            $table->foreign('uploaded_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newspaper_cutouts');
    }
}