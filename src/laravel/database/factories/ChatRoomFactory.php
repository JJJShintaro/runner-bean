<?php

namespace Database\Factories;

// 20230909 追加
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ChatRoom>
 */
class ChatRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    private static int $sequence = 1;

    public function definition(): array
    {
        return [
            // 'chat_room_id' => $this->faker->name(),
            'chat_room_name' => "chatroom".self::$sequence++,
            // 'chat_room_name' => "chatroom1",
            'members' => $this->faker->name(),
            'last_essage_timestamp' => now(),
            // 'chat_room_name' => "test1",
            // 'members' => "aaaa",
            // 'last_essage_timestamp' => "2023-09-09 12:00:00",
        ];
    }
}
