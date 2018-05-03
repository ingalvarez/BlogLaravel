<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 8)->create(); //Ejecuta el Factory y crea 10 Usuarios

        App\User::create([
        	'name'		=>	'Elkin',
        	'email'		=>	'ealvarez@developer.com',
        	'password'	=>	bcrypt('12345')
        ]);

        App\User::create([
        	'name'		=>	'Carlos',
        	'email'		=>	'carlos@askmethod.com',
        	'password'	=>	bcrypt('ASKMethod')
        ]);


    }
}
