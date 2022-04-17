<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PageRed>
 */
class PageRedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'page_id' => factory(Page::class),
            'social_net_id' => factory(SocialNetwork::class),
            'description' =>$this->faker->paragraph()
        ];
    }
}
