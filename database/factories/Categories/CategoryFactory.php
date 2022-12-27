<?php

namespace Database\Factories\Categories;

use App\Models\Categories\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->fake()->name(5),
            'slug' => $this->fake()->text(10), 
        ];
    }
}
