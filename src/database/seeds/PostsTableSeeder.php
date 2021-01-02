<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 1)->create()->each(function ($user){
            $user->posts()->save(factory(app\Post::class)->make());
        });
    }
}
