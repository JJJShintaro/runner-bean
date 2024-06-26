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
        
        Schema::create('chat_users', function (Blueprint $table) {
            $table->increments('user_id')->comment('チャットルームID');
            $table->string('username', 32)->comment('チャットルームID');
            $table->string('password_hash', 128 )->comment('チャットルーム名');
            $table->string('email')->unique()->comment('チャットルーム名');
            $table->integer('creator_id')->comment('チャットルーム作成者ID');
            $table->integer('updated_by')->comment('更新者ID');
            $table->datetime('created_at')->nullable()->comment('作成日');
            $table->datetime('updated_at')->nullable()->comment('更新日');


        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_users');
    }
};
