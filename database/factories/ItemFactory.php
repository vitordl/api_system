<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item_name' => $this->faker->word(),
            'description' => $this->faker->text(),
            'author' => $this->faker->name,
            'year' => $this->faker->year(),

        ];
    }
}


//             $table->string('item_name');
//             $table->string('description');
//             $table->string('author');
//             $table->string('year');