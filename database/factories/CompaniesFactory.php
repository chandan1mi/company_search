<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Companies>
 */
class CompaniesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'company_email'=>$this->faker->email(),
            'description'=>$this->faker->text(),
            'lei'=>$this->faker->numerify('###-#####-###'),
            'lei_status'=>$this->faker->numberBetween(0,1),
            'managing_lou'=>$this->faker->name(),
            'registration_number'=>$this->faker->numerify('###-##-###'),
            'address'=>$this->faker->address(),
            'number_of_employies'=>$this->faker->numberBetween(50,1000),
            'country'=>'germany',
        ];
    }
}
