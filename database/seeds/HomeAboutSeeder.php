<?php

use Illuminate\Database\Seeder;

class HomeAboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_abouts')->insert([
            'image' => 'about_2.png',

            'title_ru' => 'Я люблю спорт',
            'title_en' => 'I like sport',

            'description_ru' => 'Главная Описание  обо мне Описание обо мне Описание обо мне ',
            'description_en' => 'HOME description  page about description about description about description about ',

            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
