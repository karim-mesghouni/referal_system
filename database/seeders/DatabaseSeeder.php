<?php

namespace Database\Seeders;

use App\Enums\Actions;
use App\Models\Action;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Action::factory()->create([
            'action' => Actions::Referral->value,
            'points_awarded' => 10,
        ]);

        Action::factory()->create([
            'action' => Actions::Registration->value,
            'points_awarded' => 10,
        ]);
    }
}
