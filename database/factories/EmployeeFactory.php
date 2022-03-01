<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;
use App\Models\Office;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       $last_id= Employee::select('employeeNumber')->orderByDesc('employeeNumber')->first()->employeeNumber;
        return [
           "employeeNumber" => $this->faker->unique()->numberBetween($last_id+1, 9999), //TODO buduci da se ne spremaju u bazi, pamti koji je zadnji kreiran
		"lastName" => $this->faker->lastName(),
		"firstName" => $this->faker->firstNameFemale(),
		"extension" => 'x'.$this->faker->numberBetween(1000, 9999),
		"email"     => $this->faker->email(),
		"officeCode" => Office::select("*")->inRandomOrder()->first()->officeCode, //"1",
		"reportsTo" => NULL,
		"jobTitle" => $this->faker->randomElement(["VP Sales"
                    ,"VP Marketing"
                    ,"Sales Manager (APAC)"
                    ,"Sale Manager (EMEA)"
                    ,"Sales Manager (NA)"
                    ,"Sales Rep"]),
        ];
    }
}
