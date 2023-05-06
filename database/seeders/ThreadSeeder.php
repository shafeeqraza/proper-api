<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('threads')->truncate();
        DB::table('threads')->insert([
            [
                'category_id' => 1,
                'author_id' => 1,
                'slug' => fake()->slug(15),
                'title' => fake()->text(10),
                'body' => fake()->text()
            ],
            [
                'category_id' => 1,
                'author_id' => 1,
                'slug' => fake()->slug(15),
                'title' => fake()->text(10),
                'body' => fake()->text()
            ],
            [
                'category_id' => 1,
                'author_id' => 1,
                'slug' => fake()->slug(15),
                'title' => fake()->text(10),
                'body' => fake()->text()
            ],
            [
                'category_id' => 1,
                'author_id' => 1,
                'slug' => fake()->slug(15),
                'title' => fake()->text(10),
                'body' => fake()->text()
            ],
            [
                'category_id' => 2,
                'author_id' => 2,
                'slug' => fake()->slug(15),
                'title' => fake()->text(10),
                'body' => fake()->text()
            ],
            [
                'category_id' => 2,
                'author_id' => 2,
                'slug' => fake()->slug(15),
                'title' => fake()->text(10),
                'body' => fake()->text()
            ],
            [
                'category_id' => 2,
                'author_id' => 2,
                'slug' => fake()->slug(15),
                'title' => fake()->text(10),
                'body' => fake()->text()
            ],
            [
                'category_id' => 2,
                'author_id' => 2,
                'slug' => fake()->slug(15),
                'title' => fake()->text(10),
                'body' => fake()->text()
            ],
        ]);
    }
}
