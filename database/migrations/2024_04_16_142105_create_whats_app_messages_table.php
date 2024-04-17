<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhatsAppMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('whats_app_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('whatsapp_number')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('whats_app_messages');
    }
}