<?php
use App\User;
use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     // $professions = DB::select('SELECT id FROM professions WHERE title = ? LIMIT 0,1', ['Desarrollador Back-End']);
       
     //Utilizando el contructor de consultas:
     //Ejemplo1
        //$profession = DB::table('professions')->select('id')->first();
        //dd($profession->id);
    
     //Utilizando el contructor de consultas:
     //Ejemplo2
        // $professionId = DB::table('professions')
        //     ->where('title', 'Desarrollador Back-End')
        //     ->value('id');    
        // dd($professionId);

     //Utilizando Eloquent:
     $professionId = Profession::where('title', 'Desarrollador Back-End')->value('id');    
     //dd($professionId);

        
        //Utilizando el contructor de consultas:
        // DB::table('users')->insert([
        //     'name' => 'Hector Pinhango',
        //     'email' => 'hectorp@innovationpi.com',
        //     'password' => bcrypt('123456'),
        //     'profession_id' => $profession->id,
        // ]);
        
        //Utilizando Eloquent:
        User::create([
            'name' => 'Hector Pinhango',
            'email' => 'hectorp@innovationpi.com',
            'password' => bcrypt('123456'),
            'profession_id' => $professionId
        ]);
    }
}
