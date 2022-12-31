<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {

        $user = User::all()->random();

        while(count($user->categories) == 0) {
            $user = User::all()->random();
        }

        return [
            'title' => fake()->text(20),
            'description' => fake()->text(100),
            'due_date' => fake()->dateTime(),
            'user_id' => $user,
            'category_id' => $user->categories->random()
        ];
    }
}
