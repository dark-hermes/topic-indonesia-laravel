<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmengCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Informasi',
                'description' => 'Kumpulan informasi Kucing Terbaru',
            ],
            [
                'name' => 'Kesehatan',
                'description' => 'Kumpulan informasi kesehatan kucing',
            ],
            [
                'name' => 'Perawatan',
                'description' => 'Kumpulan informasi perawatan kucing',
            ]
        ];

        foreach ($categories as $category) {
            \App\Models\EmengCategory::create([
                'name' => $category['name'],
                'description' => $category['description']
            ]);
        }
    }
}
