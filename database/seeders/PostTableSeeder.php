<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'user_id' => '1',
                'title' => '1',
                'content' => 'first post by first user',
            ],
            [
                'user_id' => '1',
                'title' => '2',
                'content' => 'second post  by first user',
            ],
            [
                'user_id' => '2',
                'title' => '3',
                'content' => 'third post by second user',
            ],
            [
                'user_id' => '2',
                'title' => '3',
                'content' => 'fourth post by second user',
            ],            [
                'user_id' => '2',
                'title' => '3',
                'content' => 'fifth post by second user',
            ],
        ];
        foreach ($posts as $key => $value)
            Post::create($value);
    }
}
