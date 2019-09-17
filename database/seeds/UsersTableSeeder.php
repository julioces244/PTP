<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user')->insert([
            'name' => 'Diego',
            'lastname' => 'Molina',
            'email' => 'diego.molina@gmail.com',
            'password' => Hash::make('diego'),
        ]);

        DB::table('user')->insert([
            'name' => 'Lisbeth',
            'lastname' => 'Santillán',
            'email' => 'lisbeth.santillan@gmail.com',
            'password' => Hash::make('lisbeth'),
        ]);

        DB::table('user')->insert([
            'name' => 'Administrador',
            'lastname' => '(Admin)',
            'email' => 'administrador@gmail.com',
            'password' => Hash::make('administrador'),
        ]);
    }
}
