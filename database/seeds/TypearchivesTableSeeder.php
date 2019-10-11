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
            'modulo' => 'Documento',
        ]);

        DB::table('typearchives')->insert([
            'nombre' => 'Informe Bimensual',
            'abreviatura' => 'IB',
            'modulo' => 'Documento',
        ]);

        DB::table('typearchives')->insert([
            'nombre' => 'Otros documentos',
            'abreviatura' => 'OD',
            'modulo' => 'Documento',
        ]);

        DB::table('typearchives')->insert([
            'nombre' => 'Prueba de Validación',
            'abreviatura' => 'PV',
            'modulo' => 'Imagen',
        ]);

        DB::table('typearchives')->insert([
            'nombre' => 'Prueba de Entrada',
            'abreviatura' => 'PE',
            'modulo' => 'Imagen',
        ]);

        DB::table('typearchives')->insert([
            'nombre' => 'Talleres de padres',
            'abreviatura' => 'TP',
            'modulo' => 'Imagen',
        ]);

        DB::table('typearchives')->insert([
            'nombre' => 'Instalación',
            'abreviatura' => 'II',
            'modulo' => 'Imagen',
        ]);

    }
}
