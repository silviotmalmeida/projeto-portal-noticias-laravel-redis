<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // gerando os dados de teste utilizando o faker
        return [
            'title' => $this->faker->text(rand(10,40)),
            'article' => $this->faker->text(rand(200,400)),
        ];
    }
}
