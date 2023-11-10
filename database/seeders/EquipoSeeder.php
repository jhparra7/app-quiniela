<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equipo;
use Faker\Factory as Faker;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($g=1;$g<=8;$g++){
            for($e=1;$e<=4;$e++){
                $equipo = new Equipo;
                $first_name = $faker->firstName;
                $last_name = $faker->lastName;
                $palabra = ucfirst($faker->word()); 
                $equipo->name = $first_name . ' ' . $last_name . ' ' . ' ' . $palabra;
                $equipo->id_grupo=$g;
                $equipo->save();
            }
        }
    }
}
