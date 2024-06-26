<?php

namespace Database\Seeders;

use App\Models\ChatRooms;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatRoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //テーブル内のデータを一掃
        \App\Models\ChatRooms::truncate();

        ChatRooms::factory(3)->create();

    }
}
