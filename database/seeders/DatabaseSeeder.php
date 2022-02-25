<?php

namespace Database\Seeders;

use App\Models\Especie;
use App\Models\Persona;
use App\Models\Raza;
use Spatie\Permission\Models\Role;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        $this->call(UserSeeder::class);
        Especie::factory(20)->create();
        Raza::factory(20)->create();
        Persona::factory(20)->create();
        $this->call(RolSeeder::class);
    }
}
