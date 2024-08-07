<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteTicketDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('website_ticket_details', function (Blueprint $table) {
            $table->string('ticket_id')->primary(); // Primary key as string
            $table->string('ticket_status');
            $table->text('ticket_work_description')->nullable();
            $table->text('appeal_data')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('ticket_id')
                ->references('ticket_id') // Foreign key matches the primary key of `website_update_enquiry`
                ->on('website_update_enquiry')
                ->onDelete('cascade'); // Optional: specifies action on delete
        });
    }

    public function down()
    {
        Schema::table('website_ticket_details', function (Blueprint $table) {
            $table->dropForeign(['ticket_id']);
        });

        Schema::dropIfExists('website_ticket_details');
    }
}
