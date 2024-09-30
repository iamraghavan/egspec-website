<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWomenEmpowermentCellMembersTable extends Migration
{
    public function up()
    {
        Schema::create('women_empowerment_cell_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role');
            $table->string('department')->nullable();
            $table->string('program_name')->nullable();
            $table->date('date')->nullable();
            $table->string('beneficiaries')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('women_empowerment_cell_members');
    }
}
