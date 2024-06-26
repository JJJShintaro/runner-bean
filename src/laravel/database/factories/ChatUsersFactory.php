<?php

namespace Database\Factories;

use App\Models\ChatUsers;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\chat_users>
 */
class ChatUsersFactory extends Factory
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
            'username'          => "username".self::$sequence++,
            'password_hash'     =>  Hash::make("test1234"),
            'email'             => 1,
            'creator_id'        => 1,
            'updated_by'        => -1,
            'created_at'        => now(),
            'updated_at'        => null
            
        ];
    }
}
