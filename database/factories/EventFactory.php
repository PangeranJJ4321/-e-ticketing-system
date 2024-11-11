<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {

        return [
            'user_id' => \App\Models\User::factory(),
            'nama_acara' => $this->faker->sentence, 
            'deskripsi' => $this->faker->paragraph,
            'tanggal_waktu' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
            'lokasi' => $this->faker->address,
            'harga_tiket' => $this->faker->numberBetween(100, 500),
            'kouta_tiket' => $this->faker->numberBetween(50, 100),
            'gambar_acara' => null,
        ];
    }
}