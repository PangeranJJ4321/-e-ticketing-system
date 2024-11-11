<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use App\Models\Booking;
use App\Models\Payment;
use App\Models\Review;
use App\Models\Favorite;
use App\Models\Category;
use App\Models\EventCategory;
use App\Models\AuditLog;
use App\Models\Ticket;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::factory(10)->create();
        Event::factory(10)->create();
        Booking::factory(10)->create();
        Ticket::factory(10)->create();
        Payment::factory(10)->create();
        Review::factory(10)->create();
        Favorite::factory(10)->create();
        Category::factory(5)->create();
        EventCategory::factory(10)->create();
        AuditLog::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
