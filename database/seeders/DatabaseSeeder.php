<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'nasrallah',
            'email' => 'nasrallah@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'ahmed',
            'email' => 'ahmed@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'ali',
            'email' => 'ali@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        Category::create([
            'name' => 'news',
        ]);
        Category::create([
            'name' => 'sports',
        ]);
        Category::create([
            'name' => 'foods',
        ]);

        Post::create([
            'user_id' => '1',
            'category_id' => '1',
            'title' => 'First post',
            'body' => 'asfadokspglmspglmsfpomsfpomsfpomspfomfspobmsfpob;',
            'image' => 'image.jpg',
        ]);
        Post::create([
            'user_id' => '2',
            'category_id' => '3',
            'title' => 'Second post',
            'body' => 'asfadokspglmspglmsfpomsfpomsfpomspfomfspobmsfpob;',
            'image' => 'image.jpg',
        ]);
        Post::create([
            'user_id' => '3',
            'category_id' => '2',
            'title' => 'Third post',
            'body' => 'asfadokspglmspglmsfpomsfpomsfpomspfomfspobmsfpob;',
            'image' => 'image.jpg',
        ]);
        Post::create([
            'user_id' => '2',
            'category_id' => '1',
            'title' => 'Fourth post',
            'body' => 'asfadokspglmspglmsfpomsfpomsfpomspfomfspobmsfpob;',
            'image' => 'image.jpg',
        ]);
    }
}
