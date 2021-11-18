<?php

namespace Database\Seeders;

use App\Models\paciente;
use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        paciente::factory(10)->create();
    }
}
