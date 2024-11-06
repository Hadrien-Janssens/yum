<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Article::factory()->create([
            'name' => 'CLUB maison',
            'price' => 4.50,
            'category_id' => 2,
        ]);
        Article::factory()->create([
            'name' => 'coca-cola',
            'price' => 2,
            'category_id' => 1,
        ]);
    }
}