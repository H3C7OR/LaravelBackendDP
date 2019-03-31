<?php

use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
        // Utilizando SQL:
        //  DB::insert('INSERT INTO users (title) VALUES ("Desarrollador Back-End")');

        //Utilizando el contructor de Consultas:
        // DB::table('professions')->insert([
        //     'title' => 'Desarrollador Back-End',
        // ]);

        //Utilizando un modelo de Eloquent:
        Profession::create([
            'title' => 'Desarrollador Back-End',
        ]);
        Profession::create([
            'title' => 'Desarrollador Front-End',
        ]);
        Profession::create([
            'title' => 'Diseñador Web',
        ]);
        factory(Profession::class)->times(17)->create();
    }
}
