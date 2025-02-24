<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            
            'name' => 'Leonardo Ortiz Alves',
            'email' => 'leonardoortizalves@gmail.com',
            'email_verified_at' => now(),
            'password' => '121810', 
            'remember_token' => Str::random(10),
          
           
            
        ]);

        User::create([
            
            'name' => 'T.I ETEC VOTORANTIM',
            'email' => 't.i@gmail.com',
            'email_verified_at' => now(),
            'password' => '123456789', 
            'remember_token' => Str::random(10),
           
           
            
        ]);
    }

    
}
