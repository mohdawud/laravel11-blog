<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        // Category::create(
        //     [
        //         'name' => 'Web Programming',
        //         'slug' => 'web-programming'
        //     ]
        // );

        // Post::create(
        //     [
        //         'title' => 'The Best Laravel Tutorial',
        //         'slug' => 'the-best-laravel-tutorial',
        //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quia.'
        //     ]
        // );

        $this->call([
            CategorySeeder::class,
            UserSeeder::class
        ]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}