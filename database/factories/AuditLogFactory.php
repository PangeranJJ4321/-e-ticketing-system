<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AuditLog;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuditLog>
 */
class AuditLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = AuditLog::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'action' => $this->faker->word,
            'action_details' => $this->faker->paragraph,
            'created_at' => $this->faker->dateTime,
        ];
    }
}
