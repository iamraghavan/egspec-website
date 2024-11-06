<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoriesJsToIndustryAcademicPartneringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('industry_academic_partnering', function (Blueprint $table) {
            $table->string('categories_js')->after('alt_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('industry_academic_partnering', function (Blueprint $table) {
            $table->dropColumn('categories_js');
        });
    }
}
