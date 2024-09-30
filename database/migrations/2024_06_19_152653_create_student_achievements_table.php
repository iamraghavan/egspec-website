<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_achievements', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->string('institution_name');
            $table->date('event_date');
            $table->string('register_no');
            $table->string('student_name');
            $table->string('prize_won')->nullable();
            $table->string('year');
            $table->string('department');
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
        Schema::dropIfExists('student_achievements');
    }
}
