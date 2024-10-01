<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketConversationsTable extends Migration
{
    public function up()
    {
        Schema::create('ticket_conversations', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_id');
            $table->enum('sender_type', ['ticket_creator', 'web_master']);
            $table->text('message');
            $table->text('cc_recipients')->nullable();
            $table->time('last_updated');
            $table->timestamps();

            $table->foreign('ticket_id')->references('ticket_id')->on('website_ticket_details')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ticket_conversations');
    }
}
