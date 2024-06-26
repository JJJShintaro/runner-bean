<?php

namespace Database\Seeders;

use App\Models\ChatUsers;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //テーブル内のデータを一掃
        \App\Models\ChatUsers::truncate();

        ChatUsers::factory(1)->create();
    }
}
