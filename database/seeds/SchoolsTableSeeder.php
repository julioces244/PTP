<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('schools')->insert([
          'nombre' => 'Bandera del Perú',
          'ubicacion' => 'Pisco',
      ]);

      DB::table('schools')->insert([
          'nombre' => 'José de San Martín',
          'ubicacion' => 'Pisco',
      ]);

      DB::table('schools')->insert([
          'nombre' => 'Raúl Porras Barrenechea',
          'ubicacion' => 'Pisco',
      ]);

      DB::table('schools')->insert([
          'nombre' => 'Renán Elías Olivera',
          'ubicacion' => 'San Andrés',
      ]);

      DB::table('schools')->insert([
          'nombre' => 'Carlos Noriega Jimenez',
          'ubicacion' => 'Paracas',
      ]);

      DB::table('schools')->insert([
          'nombre' => 'José C. Mariátegui',
          'ubicacion' => 'San Clemente',
      ]);

      DB::table('schools')->insert([
          'nombre' => 'Independencia',
          'ubicacion' => 'Independencia',
      ]);

      DB::table('schools')->insert([
          'nombre' => 'José Quiñones Gonzalez',
          'ubicacion' => 'Tupac Amarú',
      ]);

      DB::table('schools')->insert([
          'nombre' => 'Fé y Alegría 77',
          'ubicacion' => 'Tupac Amaru',
      ]);

      DB::table('schools')->insert([
          'nombre' => 'Beatita de Humay',
          'ubicacion' => 'Humay',
      ]);

      DB::table('schools')->insert([
          'nombre' => 'Juan Velazco Alvarado',
          'ubicacion' => 'Humay',
      ]);

      DB::table('schools')->insert([
          'nombre' => 'Porsia Senisse de Arriola',
          'ubicacion' => 'Huancano',
      ]);

      DB::table('schools')->insert([
          'nombre' => 'Miguel Grau Seminario',
          'ubicacion' => 'Pisco',
      ]);

      DB::table('schools')->insert([
          'nombre' => 'María Prado de Bellido',
          'ubicacion' => 'Pisco',
      ]);

      DB::table('schools')->insert([
          'nombre' => 'Lazaro Orrego Morales',
          'ubicacion' => 'Pisco',
      ]);

      DB::table('schools')->insert([
          'nombre' => 'Gerardo Mendoza Escate',
          'ubicacion' => 'Pisco',
      ]);

      DB::table('schools')->insert([
          'nombre' => 'Andres Avelino Caceres',
          'ubicacion' => 'Pisco',
      ]);

      DB::table('schools')->insert([
          'nombre' => '22489 Paracas',
          'ubicacion' => 'Pisco',
      ]);

      DB::table('schools')->insert([
          'nombre' => 'General',
      ]);
    }
}
