<?php

namespace Database\Factories;

use App\Models\Replie;
use App\Models\Thread;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReplieFactory extends Factory
{
    protected $model = Replie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'thread_id' => Thread::factory(),
            'user_name' => $this->faker->name(),
            'message' => $this->faker->sentence(),
        ];
    }
}
