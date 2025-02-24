<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CreateUserSeeder;


class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
        // Uso do metodo para gerar usuarios e carga horaria 
       $this->call([
            CreateUserSeeder::class,
       ]);


        
    }
}