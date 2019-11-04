<?php

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
         $this->call(CategoriesTableSeeder::class);
         $this->call(SchoolsTableSeeder::class);
         $this->call(TypearchivesTableSeeder::class);
         $this->call(TypeimagesTableSeeder::class);
         $this->call(UsersTableSeeder::class);
    }
}
