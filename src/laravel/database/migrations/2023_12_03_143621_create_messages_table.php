<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('message_id')->comment('メッセージID');
            $table->integer('room_id')->comment('部屋ID');
            $table->integer('user_id')->comment('ユーザID');
            $table->text('message_content')->comment('メッセージの内容');
            $table->datetime('timestamp')->nullable()->comment('メッセージの送信日時');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
