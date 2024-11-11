<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Booking;
use App\Models\User;
use App\Models\Event;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Booking::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'event_id' => Event::factory(),
            'booking_date' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'total_tickets' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->randomElement(['confirmed', 'canceled', 'pending']),
            'total_price' => $this->faker->randomFloat(2, 100, 500), // Harga dengan desimal
        ];
    }
}
