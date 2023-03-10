<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tahfidz>
 */
class TahfidzFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama'=>$this->faker->name(),
            'surat'=>$this->faker->word(),
            'status'=>$this->faker->word()
        ];
    }
}
