<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory()->create([
            'title' => 'はじめての投稿',
            'content' => 'ほほほ',
            'published_at' => Carbon::create(2026, 2, 7, 1, 17,)
        ]);
        Post::factory()->create([
            'title' => '２つ目の投稿',
            'content' => 'オヨヨ',
            'published_at' => Carbon::create(2026, 2, 7, 1, 17,)
        ]);
    }
}
