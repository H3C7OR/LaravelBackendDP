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
        /*User::create([
            'name' => 'Hector Pinhango',
            'email' => 'hectorp@innovationpi.com',
            'password' => bcrypt('123456'),
            'profession_id' => $professionId,
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'Nikola Tesla',
            'email' => 'tesla@mail.com',
            'password' => bcrypt('123456'),
            'profession_id' => $professionId
        ]);
        User::create([
            'name' => 'Tomas Edison',
            'email' => 'edison@mail.com',
            'password' => bcrypt('123456'),
            'profession_id' => null
        ]); */
        factory(User::class)->create([
            'name' => 'Hector Pinhango',
            'email' => 'hp@gmail.com',
            'password' => bcrypt('123456'),
            'profession_id' => $professionId,
            'is_admin' => true
        ]);
        factory(User::class)->create([
            'name' => 'Nikola Tesla',
            'profession_id' => $professionId
        ]);
        factory(User::class)->times(48)->create();
    }
}
