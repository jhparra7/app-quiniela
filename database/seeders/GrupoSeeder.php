<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grupo;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grupos = ['A','B','C','D','E','F','G','H'];

        for($g=0;$g<count($grupos);$g++) {
            $grupo = new Grupo;
            $grupo->name=$grupos[$g];
            $grupo->save();
        }
    }
}
