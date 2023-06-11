<?php

namespace Database\Factories;

use App\Models\Monitor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Monitor>
 */
class MonitorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Monitor::class;
    public function definition(): array
    {
        return [
            'site_name' => $this->faker->name,
            'site_url' => $this->faker->url,
            'status' => 0,
            'response' => $this->faker->text(),
            'response_code' => 500
        ];
    }
}
