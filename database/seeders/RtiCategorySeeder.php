<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RtiCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Informasi',
                'description' => 'Kumpulan informasi Roblox Terbaru',
            ],
            [
                'name' => 'Creepypasta',
                'description' => 'Kumpulan cerita horor Roblox',
            ],
            [
                'name' => 'Alur Cerita',
                'description' => 'Kumpulan alur cerita Roblox',
            ]
        ];

        foreach ($categories as $category) {
            \App\Models\RtiCategory::create([
                'name' => $category['name'],
                'description' => $category['description']
            ]);
        }
    }
}
