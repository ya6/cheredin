<?php

use Illuminate\Database\Seeder;

class HomePhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            'image' => 'photo1.jpg',
            'description_ru' => 'описание для 1 фото',
            'description_en' => 'description for 1 photo',

            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('photos')->insert([
            'image' => 'photo2.jpg',
            'description_ru' => 'описание для 2 фото',
            'description_en' => 'description for 2 photo',
           
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('photos')->insert([
            'image' => 'photo3.jpg',
            'description_ru' => 'описание для 3 фото',
            'description_en' => 'description for 3 photo',
           
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
