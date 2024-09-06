<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $options = [
            [
                'key' => 'description',
                'value' => 'Any Topic Any Platform, rumah produksi konten kreatif meliputi Produksi film pendek, Studio Game, iklan produk, iklan jasa, media informasi dan kegiatan kreatif lainnya. Menaungi Roblox Topic Indonesia dan Emeng Indonesia.'
            ],
            [
                'key' => 'vision',
                'value' => 'Menjadi Rumah Produksi yang memberikan konten interaktif dan kreatif terdepan, untuk semua bidang, semua topik dan bahkan semua platform. Any Topic Any Platform.',
            ],
            [
                'key' => 'mission',
                'value' => 'Menciptakan tim produksi dengan kualitas terbaik dan pemahaman yang komprehensif, serta membangun setiap konten dengan kreatifitas dan inovatif, sehingga dapat menyajikan banyak media kreatif yang bersaing.'
            ],
            [
                'key' => 'email',
                'value' => ' TopicIndonesia@gmail.com'
            ],
            [
                'key' => 'phone1',
                'value' => '(+62)-852-7134-8676'
            ],
            [
                'key' => 'address',
                'value' => 'Jl. Raya Cipadu No. 1, Cipadu, Ciledug, Tangerang, Banten, Indonesia'
            ],
            [
                'key' => 'phone2',
                'value' => '(+62)-857-7908-6748'
            ],
            [
                'key' => 'instagram',
                'value' => 'topic.indonesia',
            ]
        ];

        foreach ($options as $option) {
            \App\Models\TiOption::create([
                'key' => $option['key'],
                'value' => $option['value']
            ]);
        }
    }
}
