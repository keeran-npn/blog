<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = [
            [
                'user_id' => '1',
                'post_id' => '1',
                'content' => 'first comment on first post by first user',
            ],
            [
                'user_id' => '1',
                'post_id' => '2',
                'content' => 'second comment on second post by first user',
            ],
            [
                'user_id' => '2',
                'post_id' => '3',
                'content' => 'third comment on third post by second user',
            ],
            [
                'user_id' => '2',
                'post_id' => '3',
                'content' => 'fourth comment on third post by second user',
            ],            [
                'user_id' => '2',
                'post_id' => '3',
                'content' => 'fifth comment on third post by second user',
            ],
        ];
        foreach ($comments as $key => $value)
            Comment::create($value);
    }
}
