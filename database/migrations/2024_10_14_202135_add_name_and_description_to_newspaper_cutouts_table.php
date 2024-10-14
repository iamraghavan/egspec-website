<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameAndDescriptionToNewspaperCutoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('newspaper_cutouts', function (Blueprint $table) {
            $table->string('newspaper_name')->nullable()->after('id'); // Adjust 'after' as needed
            $table->text('description')->nullable()->after('newspaper_name');
            $table->date('date_of_publish')->nullable()->after('description');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('newspaper_cutouts', function (Blueprint $table) {
            $table->dropColumn(['newspaper_name', 'description']);
        });
    }
}
