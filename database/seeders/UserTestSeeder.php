<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->hasPosts(3)->create();

        User::factory(10)->has(
            Post::factory(random_int(5,10))
                ->has(Comment::factory(random_int(2,3)))
        )->create();
    }
}
