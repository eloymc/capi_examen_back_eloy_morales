<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\user_domicilio;
use Illuminate\Database\Eloquent\Factories\Factory;

class user_domicilioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = user_domicilio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_user' => User::inRandomOrder()->value('id'),
            'domicilio' => $this->faker->randomElement(['calle 1', 'calle 2', 'calle 3', 'calle 4', 'calle 5']),
            'numero_exterior' => $this->faker->randomElement(['1', '2', '3', '4', '5']),
            'colonia' => $this->faker->randomElement(['Azcapotzalco', 'Guerrero', 'San Andres', 'Eduardo Molina', 'Santa Cruz']),
            'cp' => $this->faker->randomElement(['02020', '02010', '05023', '01452', '12345']),
            'ciudad' => $this->faker->randomElement(['Ciudad México', 'Estado de México', 'Guanajuato', 'Queretaro', 'Guadalajara'])
        ];
    }
}
