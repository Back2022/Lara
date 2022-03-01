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
        // dohvati zadnju vrijednost employeeNumber iz baze
       $last_id= Employee::select('employeeNumber')->orderByDesc('employeeNumber')->first()->employeeNumber;
       $sef=Employee::select('reportsTo')->inRandomOrder()->first()->reportsTo;
       //$sef=Employee::select('reportsTo')->first()->reportsTo;  //proba radi li factory ako u tablicu nije unesen niti jedan employee
        return [
       //    "employeeNumber" => $this->faker->unique()->numberBetween($last_id+1, 9999), // Buduci da je polje PK, AI baza ce se samo pobrinuti za dodjelu novog kljuca
		"lastName" => $this->faker->lastName(),
		"firstName" => $this->faker->firstNameFemale(),
		"extension" => 'x'.$this->faker->numberBetween(1000, 9999),
		"email"     => $this->faker->email(),
		"officeCode" => Office::select("*")->inRandomOrder()->first()->officeCode, //"1",
		"reportsTo" => $sef,
		"jobTitle" => $this->faker->randomElement(["VP Sales"
                    ,"VP Marketing"
                    ,"Sales Manager (APAC)"
                    ,"Sale Manager (EMEA)"
                    ,"Sales Manager (NA)"
                    ,"Sales Rep"]),
        ];
    }
}
