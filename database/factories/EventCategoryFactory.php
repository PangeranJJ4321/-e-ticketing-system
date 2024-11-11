<?php

namespace Database\Factories;
use App\Models\EventCategory;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventCategory>
 */

class EventCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = EventCategory::class;
    public function definition(): array
    {
        return [
            'event_id' => Event::factory(),
            'category_id' => Category::factory(),
        ];
    }
}
