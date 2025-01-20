<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchase>
 */
class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $decade = $this->faker->dateTimeThisDecade;
        $created_at = $decade->modify('+2 ysers');

        return [
            'customer_id' => rand(1, Customer::count()), //1〜customerの数の範囲でランダムに指定
            'status' => $this->faker->boolean,
            'created_at' => $created_at
        ];
    }
}
