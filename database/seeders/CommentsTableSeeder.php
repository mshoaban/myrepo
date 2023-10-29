<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $samplePosts = [
            ['id' => 1, 'title' => 'First Post', 'user_id' => 1],
            ['id' => 2, 'title' => 'Second Post', 'user_id' => 2],
            ['id' => 3, 'title' => 'Third Post', 'user_id' => 1],
            ['id' => 4, 'title' => 'Fourth Post', 'user_id' => 2],
            ['id' => 5, 'title' => 'Fifth Post', 'user_id' => 1],
        ];

        $comments = [];

        // Loop through the sample posts and add 3 comments from each user to each post
        foreach ($samplePosts as $post) {
            for ($i = 1; $i <= 3; $i++) {
                $comments[] = [
                    'comment' => 'Comment ' . $i . ' on ' . $post['title'],
                    'user_id' => $post['user_id'],
                    'post_id' => $post['id'],
                ];
            }
        }

        // Insert the comments into the 'comments' table
        DB::table('comments')->insert($comments);
    }
}
