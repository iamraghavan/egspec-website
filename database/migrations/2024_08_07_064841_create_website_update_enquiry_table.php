<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteUpdateEnquiryTable extends Migration
{
    public function up()
    {
        Schema::create('website_update_enquiry', function (Blueprint $table) {
            $table->string('ticket_id')->primary(); // Primary key as string
            $table->string('staff_id');
            $table->string('staff_name');
            $table->string('staff_email');
            $table->string('staff_phone');
            $table->string('department');
            $table->string('work_type');
            $table->text('data_update');
            $table->json('google_drive_urls')->nullable();
            $table->boolean('confirmation')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('website_update_enquiry');
    }
}
