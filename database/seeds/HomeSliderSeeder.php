<?php

use Illuminate\Database\Seeder;

class HomeSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_sliders')->insert([
            'image' => 'slide_1.jpg',
           
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('home_sliders')->insert([
            'image' => 'slide_2.jpg',
           
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('home_sliders')->insert([
            'image' => 'slide_3.jpg',
           
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('home_sliders')->insert([
            'image' => 'slide_4.jpg',
           
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('home_sliders')->insert([
            'image' => 'slide_5.jpg',
           
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('home_sliders')->insert([
            'image' => 'slide_6.jpg',
           
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('home_sliders')->insert([
            'image' => 'slide_7.jpg',
           
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
