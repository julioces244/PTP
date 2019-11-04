<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TypearchivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('typearchives')->insert([
            'nombre' => 'Informe Semanal',
            'abreviatura' => 'IS',
        ]);

        DB::table('typearchives')->insert([
            'nombre' => 'Informe Bimensual',
            'abreviatura' => 'IB',
        ]);

        DB::table('typearchives')->insert([
            'nombre' => 'Otros documentos',
            'abreviatura' => 'OD',
        ]);


    }
}
