<?php

namespace Database\Factories;

use App\Models\UserChatRooms;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user_chat_rooms>
 */
class UserChatRoomsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_id'           => 2,
            'user_id'           => 1
            
        ];
    }
}
