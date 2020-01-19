<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'image' => 'about_2.png',

            'title_ru' => 'Обо мне',
            'title_en' => 'About me',

            'description_ru' => 'Отдельная Описание  Для отдельной страницы обо мне Описание обо мне Описание обо мне ',
            'description_en' => '!ndividual description for individual page about description about description about description about ',

            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
