<?php

namespace Database\Factories;

use App\Models\Thread;
use Illuminate\Database\Eloquent\Factories\Factory;

class ThreadFactory extends Factory
{

    protected $model = Thread::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_name' => $this->faker->name(),
            'message_title' => $this->faker->title(),
            'message' => $this->faker->sentence(),
        ];
    }
}
