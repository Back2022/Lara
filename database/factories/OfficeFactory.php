<?php
//  php artisan tinker
//  $office = Office::factory()->count(3)->make();

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Office;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Office>
 */
class OfficeFactory extends Factory
{
    protected $model = Office::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city' => $this->faker->city(),
            'phone ' => $this->faker->unique()->phoneNumber(),
            'addressLine1'=> $this->faker->address(),
            'addressLine2'=> $this->faker->address(),
            'state'=>$this->faker->country(),
            'country'=>$this->faker->country(),
            'postalCode'=>$this->faker->postcode(),
            'territory'=>$this->faker->country(),
        ];
    }
}
