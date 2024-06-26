<?php

namespace Database\Seeders;

use App\Models\UserChatRooms;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserChatRoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //テーブル内のデータを一掃
        \App\Models\UserChatRooms::truncate();

        UserChatRooms::factory(3===—)->create();

    }
}
