<?php

namespace Database\Factories;

use App\Models\Messages;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\messages>
 */
class MessagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            // 'message_id'    =>,
            'room_id'           => 2,
            'user_id'           => 1,
            'message_content'   => "TEST",
            'timestamp'         => now()

            ];
    }
}
