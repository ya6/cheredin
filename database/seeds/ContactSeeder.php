<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('contacts')->insert([
            
           
            'email' => 'aviti_m@mail.ru',

            'phone' => '+375 29 500 00 00',

            'address_en' => 'Mozyr, Belarus',
            'address_ru' => 'г. Мозырь, Республика Беларусь',
            
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
