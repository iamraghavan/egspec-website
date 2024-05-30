<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacementStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placement_statistics', function (Blueprint $table) {
            $table->id();
            $table->string('department');
            $table->integer('year_2019_20')->nullable();
            $table->integer('year_2020_21')->nullable();
            $table->integer('year_2021_22')->nullable();
            $table->integer('year_2022_23')->nullable();
            $table->integer('year_2023_24')->nullable();
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
        Schema::dropIfExists('placement_statistics');
    }
}
