<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('categories')->insert([

           
            'category_en' => 'General',
            'category_ru' => 'Основная',
            
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categories')->insert([

           
            'category_en' => 'Photos',
            'category_ru' => 'Фото',
            
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categories')->insert([

           
            'category_en' => 'Events',
            'category_ru' => 'События',
            
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
