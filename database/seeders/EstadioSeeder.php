<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estadio;

class EstadioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $estadio = new Estadio;
        $estadio->name='Barquismeto';
        $estadio->save();

        $estadio2 = new Estadio;
        $estadio2->name='Maracaibo';
        $estadio2->save();*/

        Estadio::factory(10)->create();

    }
}
