<?php

namespace Database\Factories;

use App\Models\Laptop;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class LaptopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Laptop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'laptop_name'=>$this->faker->name,
            'laptop_description'=>$this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),            
            'brand_id'=>rand(1,13),
            'graphicscard_id'=>rand(1,2),
            'processor_id'=>rand(1,4),
            'ram_id'=>rand(1,4),
            'price'=>rand(700,3000),
            'created_at'=>$this->faker->dateTimeThisYear
        ];
    }
}
