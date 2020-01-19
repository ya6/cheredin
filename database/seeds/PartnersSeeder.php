<?php

use Illuminate\Database\Seeder;

class PartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            'image' => 'p1.jpg',

            'title_ru' => 'Партнер 1',
            'title_en' => 'Partner 1',

            'description_ru' => 'Крутая компания 1',
            'description_en' => 'Cool company 1',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('partners')->insert([
            'image' => 'p2.jpg',

            'title_ru' => 'Партнер 2',
            'title_en' => 'Partner 2',

            'description_ru' => 'Крутая компания 2',
            'description_en' => 'Cool company 2',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

           //----------- 
        DB::table('take_parts')->insert([
            'image' => 'about_2.png',

            'title_ru' => 'Примите участие',
            'title_en' => 'Take part',

            'description_ru' => 'Вы можете принять участие в будущих совревнованиях, став партнером или оказав поддержку',
            'description_en' => 'You can take part in future events by becoming a partner or by supporting',

            'created_at' => now(),
            'updated_at' => now(),
        ]);


// -----------------

// DB::table('blogs')->insert([
//     'image' => 'about_2.png',

//     'title_ru' => 'Блог 1',
//     'title_en' => 'Blog 1',

//     'description_ru' => 'Описание обо мне Описание обо мне Описание обо мне ',
//     'description_en' => 'description about description about description about description about ',

//     'created_at' => now(),
//     'updated_at' => now(),
// ]);

// DB::table('blogs')->insert([
//     'image' => 'about_2.png',

//     'title_ru' => 'Блог 2',
//     'title_en' => 'Blog 2',

//     'description_ru' => 'Описание обо мне Описание обо мне Описание обо мне ',
//     'description_en' => 'description about description about description about description about ',

//     'created_at' => now(),
//     'updated_at' => now(),
// ]);

// DB::table('blogs')->insert([
//     'image' => 'about_2.png',

//     'title_ru' => 'Блог 3',
//     'title_en' => 'Blog 3',

//     'description_ru' => 'Описание обо мне Описание обо мне Описание обо мне ',
//     'description_en' => 'description about description about description about description about ',

//     'created_at' => now(),
//     'updated_at' => now(),
// ]);

// DB::table('blogs')->insert([
//     'image' => 'about_2.png',

//      'title_ru' => 'Блог 4',
//     'title_en' => 'Blog 4',

//     'description_ru' => 'Описание обо мне Описание обо мне Описание обо мне ',
//     'description_en' => 'description about description about description about description about ',

//     'created_at' => now(),
//     'updated_at' => now(),
// ]);

// DB::table('blogs')->insert([
//     'image' => 'about_2.png',

//     'title_ru' => 'Блог 5',
//     'title_en' => 'Blog 5',

//     'description_ru' => 'Описание обо мне Описание обо мне Описание обо мне ',
//     'description_en' => 'description about description about description about description about ',

//     'created_at' => now(),
//     'updated_at' => now(),
// ]);

// DB::table('blogs')->insert([
//     'image' => 'about_2.png',

//     'title_ru' => 'Блог 6',
//     'title_en' => 'Blog 6',

//     'description_ru' => 'Описание обо мне Описание обо мне Описание обо мне ',
//     'description_en' => 'description about description about description about description about ',

//     'created_at' => now(),
//     'updated_at' => now(),
// ]);

    }
}
