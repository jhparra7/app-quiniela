<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estadio;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        /*
         */
        
        $this->call(FaseSeeder::class);
        $this->call(HorarioSeeder::class);
        $this->call(EquipoSeeder::class);
        $this->call(GrupoSeeder::class);
        Estadio::factory(8)->create();
        
    }
}
