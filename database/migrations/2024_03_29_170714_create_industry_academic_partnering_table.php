<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustryAcademicPartneringTable extends Migration
{
    public function up()
    {
        Schema::create('industry_academic_partnering', function (Blueprint $table) {
            $table->id();
            $table->string('logo_image_url');
            $table->string('alt_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('industry_academic_partnering');
    }
}
