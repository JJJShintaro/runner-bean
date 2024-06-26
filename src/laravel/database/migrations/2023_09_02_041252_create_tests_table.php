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
        Schema::create('chat_rooms', function (Blueprint $table) {
            $table->increments('chat_room_id')->comment('チャットルームID');
            $table->string('chat_room_name', 128 )->comment('チャットルーム名');
            $table->string('members', 64)->comment('メンバーリスト');
            $table->datetime('last_essage_timestamp')->comment('最終メッセージ日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_rooms');
    }
};
