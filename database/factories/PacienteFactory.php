<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->randomElement(['Jose', 'Maria ', 'Ademar', 'Diego',]),
            'apellidos' => $this->faker->randomElement(['Patiño', 'Alvarez ', 'Perez', 'Garsia',]),
            'edad' => $this->faker->numberBetween(1, 65),
            'sexo' => $this->faker->randomElement(['F', 'M',]),
            'ci' => $this->faker->numberBetween(100000, 200000),
            'tipo_sangre' => $this->faker->randomElement(['O-', 'O+', 'A+', 'A-']),
            'correo' => $this->faker->randomElement(['correo12@gmail.com', 'correo34@gmail.com',]),
            'telefono' => $this->faker->numberBetween(600000, 700000),
            'direccion' => $this->faker->randomElement(['por aqui', 'por alla',]),

        ];
    }
}
