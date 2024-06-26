<?php

namespace Database\Factories;

use App\Models\ChatRooms;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\chat_rooms>
 */
class ChatRoomsFactory extends Factory
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
            'chat_room_name'    => "chatroom".self::$sequence++,
            'creator_id'        => 1,
            'updated_by'        => 1,
            'created_at'        => now(),
            'updated_at'        => null

            ];
    }
}
