<?php

namespace Database\Seeders;

use App\Models\Fase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fases = ['Inicial','Octavos','Cuartos','Semifinal','3ro y 4to Puesto','Final'];

        for($f=0;$f<count($fases);$f++) {
            $fase = new Fase;
            $fase->name=$fases[$f];
            $fase->save();
        }
    }
}
