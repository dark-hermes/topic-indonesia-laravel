<?php

namespace Database\Seeders;

use App\Models\TiTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'name' => 'M. Zaky Ridwan',
                'position' => 'CEO',
                'image_url' => 'teams/Ridwan.jpg',
                'order' => 1,
            ],
            [
                'name' => 'Helena Shinta',
                'position' => 'Supervisor',
                'image_url' => 'teams/Helen.jpg',
                'order' => 2,
            ],
            [
                'name' => 'M. Zulfikri Awaludin',
                'position' => 'Editor',
                'image_url' => 'teams/Zul.jpg',
                'order' => 3,
            ],
            [
                'name' => 'Fajar Ismail',
                'position' => 'Konten Kreator',
                'image_url' => 'teams/Fajar.jpg',
                'order' => 4,
            ],
            [
                'name' => 'Dzaky Faiq Fawwaz',
                'position' => 'Designer',
                'image_url' => 'teams/Zaky.jpg',
                'order' => 5,
            ]
        ];

        foreach ($teams as $team) {
            TiTeam::create($team);
        }
    }
}
