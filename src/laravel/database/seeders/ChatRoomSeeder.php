<?php

namespace Database\Seeders;

use App\Models\ChatRoom;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    // public function run():
    {
        //
        ChatRoom::factory(5)->create();
        // ChatRoom::create([
        //     'chat_room_name' => 'リンゴ',
        //     'members' => '赤',
        //     'last_essage_timestamp' => '2023-09-09 12:00:00',
        // ]);

    }
}
