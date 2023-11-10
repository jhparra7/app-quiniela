<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Horario;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $horarios = ['04:00 MX, 5:00 US, 07:00 AR, 11:00 ES',
                     '07:00 MX, 8:00 US, 10:00 AR, 14:00 ES',
                     '09:00 MX, 10:00 US, 12:00 AR, 16:00 ES',
                     '10:00 MX, 11:00 US, 13:00 AR, 17:00 ES',
                     '13:00 MX, 14:00 US, 16:00 AR, 20:00 ES'];

        for($h=0;$h<count($horarios);$h++) {
            $horario = new Horario;
            $horario->horario=$horarios[$h];
            $horario->save();
        }
    }
}
