<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('certifications', function (Blueprint $table) {
            $table->string('page_section')->after('name')->nullable(); // Change the data type and position as needed
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('certifications', function (Blueprint $table) {
            $table->dropColumn('page_section');
        });
    }
};
