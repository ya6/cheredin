<?php

use Illuminate\Database\Seeder;

class HomeEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_events')->insert([
            'image' => 'about_2.png',

            'title_ru' => 'Сейчас я готовлюсь к выступлению ...',
            'title_en' => 'Now I am getting ready  a performance ...',

            'description_ru' => 'Главная Описание События Описание обо мне Описание События ',
            'description_en' => 'HOME description  Event description about description  description ',

            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
