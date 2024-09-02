<?php

namespace Database\Seeders;

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
            'name' => 'Super Admin',
            'email' => 'superadmin@mail.test',
        ]);

        User::factory()->create([
            'name' => 'Mimin',
            'email' => 'admin@mail.test',
        ]);

        User::factory()->create([
            'email' => 'user1@mail.test',
        ]);

        User::factory()->create([
            'email' => 'user2@mail.test',
            'email_verified_at' => null,
            'remember_token' => null,
        ]);

        User::factory()->create([
            'email'=> 'user3@mail.test',
            'is_active' => false,
        ]);

        $this->call([
            TeamSeeder::class,
            OptionSeeder::class,
            RtiCategorySeeder::class,
            EmengCategorySeeder::class,
        ]);
    }
}
