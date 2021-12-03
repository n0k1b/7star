<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\product_dietary;
use App\Models\product_type;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = product::class;
    public function definition()
    {
        $this->faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($this->faker));
        return [
            //
            'vendor_id' => 3,
            'category_id' => $this->faker->randomElement(category::all()->pluck('id')->toArray()),
            'type_id' => $this->faker->randomElement(product_type::all()->pluck('id')->toArray()), // password
            'dietary_id'=>$this->faker->randomElement(product_dietary::all()->pluck('id')->toArray()),
            'thumbnail_image'=>$this->faker->randomElement(['public/product_image/1.jpg','public/product_image/2.jpg','public/product_image/3.jpg','public/product_image/4.jpg','public/product_image/5.jpg','public/product_image/6.jpg']),
            'price'=>$this->faker->numberBetween(20,100),
            'name'=>$this->faker->foodName()
        ];
    }
}
