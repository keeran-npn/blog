<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'name' => 'web-development',
            ],
            [
                'name' => 'laravel',
            ],
            [
                'name' => 'php',
            ],
            [
                'name' => 'mysql',
            ],
            [
                'name' => 'bootstrap',
            ],
        ];
        foreach ($tags as $key => $value)
            Tag::create($value);
    }
}
