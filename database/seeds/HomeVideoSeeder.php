<?php

use Illuminate\Database\Seeder;

class HomeVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_videos')->insert([
            'video' => 'v1.mp4',
            'description_ru' => 'описание для домашнего видео',
            'description_en' => 'description for home video',
           
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
