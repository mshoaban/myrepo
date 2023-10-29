<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $samplePosts = [
            [
                'title' => 'First Post',
                'content' => 'This is the content of the first post.',
                'user_id' => 1, // Replace with the user ID of the post's author
            ],
            [
                'title' => 'Second Post',
                'content' => 'This is the content of the second post.',
                'user_id' => 2, // Replace with the user ID of the post's author
            ],
            [
                'title' => 'Third Post',
                'content' => 'This is the content of the third post.',
                'user_id' => 1, // Replace with the user ID of the post's author
            ],
            [
                'title' => 'Fourth Post',
                'content' => 'This is the content of the fourth post.',
                'user_id' => 2, // Replace with the user ID of the post's author
            ],
            [
                'title' => 'Fifth Post',
                'content' => 'This is the content of the fifth post.',
                'user_id' => 2, // Replace with the user ID of the post's author
            ],
        ];

        // Insert the sample posts into the 'posts' table
        DB::table('posts')->insert($samplePosts);
    }
}
