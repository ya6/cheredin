<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' =>'alex',
            'email' => 'vector_cp@mail.ru',
          //  'email_verified_at' => now(),
            'password' => '$2y$10$81KqBEjCU6nnuj/W07THce36xSuQwpGhuN8KJ2ppyPjeHNmPDRFry', // password
           // 'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
