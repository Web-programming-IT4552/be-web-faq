<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LikePostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $users = DB::table('users')->get();
        $posts = DB::table('posts')->get();
        foreach ($posts as $post) {
            foreach ($users as $user) {
                DB::table('like_post')->insert([
                    'user_id' => $user->id,
                    'post_id' => $post->id
                ]);
            }
        }
    }
}
