<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->id('equipment_id');
            $table->unsignedBigInteger('category_id');
            $table->string('equipment_name', 255);
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('category_id')
                ->references('category_id')
                ->on('laboratory_categories')
                ->onDelete('cascade'); // Cascade delete if category is deleted
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipments');
    }
}