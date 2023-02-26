<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'tags' =>  'laravel, api, Vue, backend',
            'company' => $this->faker->company(),
            'location' => $this->faker->city(),
            'email' => $this->faker->companyEmail(),
            'website' => $this->faker->url(),
            'description' => $this->faker->paragraph()

            // 'title' => $this->faker->jobTitle(),
            // 'tags' => "ddfdf defdf  eerreer",
            // 'company' => $this->faker->company(),
            // 'location' => 'cpy location',
            // 'email' => 'cpy email',
            // 'website' => 'website url',
            // 'description' => ''
        ];
    }
}
