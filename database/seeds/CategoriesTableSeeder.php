<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'nombre' => 'Pisco Aprendizaje',
            'abreviatura' => 'PA',
        ]);

        DB::table('categories')->insert([
            'nombre' => 'Pisco Digital',
            'abreviatura' => 'PD',
        ]);

        DB::table('categories')->insert([
            'nombre' => 'Pisco Tecnología',
            'abreviatura' => 'PT',
        ]);

    }
}
