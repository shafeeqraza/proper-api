<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->truncate();
        DB::table('tags')->insert([
            [
                'author_id' => 1,
                'name' => fake()->name(),
            ],
            [
                'author_id' => 1,
                'name' => fake()->name(),
            ],
            [
                'author_id' => 1,
                'name' => fake()->name(),
            ],
            [
                'author_id' => 1,
                'name' => fake()->name(),
            ],
        ]);
    }
}
