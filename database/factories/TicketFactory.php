<?php
namespace Database\Factories;

use App\Models\Ticket;
use App\Models\Booking;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    protected $model = Ticket::class;

    public function definition(): array
    {
        return [
            'booking_id' => Booking::factory(),  
            'event_id' => Event::factory(),  
            'ticket_code' => $this->faker->unique()->bothify('??###'),  
            'status' => $this->faker->randomElement(['active', 'canceled']),  
        ];
    }
}
