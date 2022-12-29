<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public $user;
    
    public function run()
    {

        $posts = [
            [
                'user_id' => '3',
                'title' => 'Horror',
                'content' => "Here's Johnny!",
            
            ],
            [
                'user_id' => '2',
                'title' => 'Business',
                'content' => "Dont sit down and wait for the opportunities to come. Get up and make them.",
                
            ],
            [
                'user_id' => '1',
                'title' => 'Religion',
                'content' => "Religion is what keeps the poor from murdering the rich.",
                
            ],
            
            [
                'user_id' => '3',
                'title' => 'Education',
                'content' => 'The more that you read, the more things you will know, the more that you learn, the more places youll go.',
                
            ],
            [
                'user_id' => '1',
                'title' => 'Politics',
                'content' => 'Those who have no understanding of the political world around them have no right to criticize or complain.',
                
            ],
            [
                'user_id' => '2',
                'title' => 'Comedy',
                'content' => 'Before you marry a person, you should first make them use a computer with slow Internet service to see who they really are.',
                
            ],
            [
                'user_id' => '3',
                'title' => 'Drama',
                'content' => 'A day wasted on others is not wasted on ones self.',
                
            ],
            [
                'user_id' => '1',
                'title' => 'Romance',
                'content' => 'Being deeply loved by someone gives you strength,
                 while loving someone deeply gives you courage.',
                
            ],
           
        ];

        foreach($posts as $post) {
            Post::create($post);
        }
    }
}
