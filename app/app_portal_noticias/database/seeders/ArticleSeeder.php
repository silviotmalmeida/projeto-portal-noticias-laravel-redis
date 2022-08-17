<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // gerando os arquivos de teste a partir da factory
        \App\Models\Article::factory(1000)->create();
    }
}
