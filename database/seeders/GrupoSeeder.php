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
        $grupo = new Grupo;
        $grupo->name='A';
        $grupo->save();

        $grupo2 = new Grupo;
        $grupo2->name='B';
        $grupo2->save();

        $grupo3 = new Grupo;
        $grupo3->name='C';
        $grupo3->save();
    }
}
