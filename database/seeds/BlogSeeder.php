<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([

            'user_id' => 1,
            'category_id' => 1,
           
          //  'image' => 'about_2.png',

            'title_ru' => 'Блог 1',
            'title_en' => 'Blog 1',

            'description_ru' => 'Описание обо мне Описание обо мне Описание обо мне ',
           
            'description_ru' => 'Описание обо мне Описание обо мне Описание обо мне ',
            'description_en' => 'description about description about description about 
            description about description about description about description about
             description about description about description about description about description about',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('blogs')->insert([
            'user_id' => 1,
            'category_id' => 2,
           
          //  'image' => 'about_2.png',

            'title_ru' => 'Блог 2',
            'title_en' => 'Blog 2',

            'description_ru' => 'Описание обо мне Описание обо мне Описание обо мне ',
          
            'description_ru' => 'Описание обо мне Описание обо мне Описание обо мне ',
            'description_en' => 'description about description about description about 
            description about description about description about description about
             description about description about description about description about description about',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('blogs')->insert([
            'user_id' => 1,
            'category_id' => 3,
           
            'image' => 'about_2.png',

            'title_ru' => 'Блог 3',
            'title_en' => 'Blog 3',

            'description_ru' => 'Описание обо мне Описание обо мне Описание обо мне ',
            
            'description_ru' => 'Описание обо мне Описание обо мне Описание обо мне ',
            'description_en' => 'description about description about description about 
            description about description about description about description about
             description about description about description about description about description about',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('blogs')->insert([
            'user_id' => 1,
            'category_id' => 1,
           
            'image' => 'about_2.png',

             'title_ru' => 'Блог 4',
            'title_en' => 'Blog 4',

            'description_ru' => 'Описание обо мне Описание обо мне Описание обо мне ',
        
            'description_ru' => 'Описание обо мне Описание обо мне Описание обо мне ',
            'description_en' => 'description about description about description about 
            description about description about description about description about
             description about description about description about description about description about',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('blogs')->insert([
            'user_id' => 1,
            'category_id' => 2,
           
            'image' => 'about_2.png',

            'title_ru' => 'Блог 5',
            'title_en' => 'Blog 5',

            'description_ru' => 'Описание обо мне Описание обо мне Описание обо мне ',
        
            'description_ru' => 'Описание обо мне Описание обо мне Описание обо мне ',
            'description_en' => 'description about description about description about 
            description about description about description about description about
             description about description about description about description about description about',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('blogs')->insert([
            'user_id' => 1,
            'category_id' => 1,
           

            'image' => 'about_2.png',

            'title_ru' => 'Блог 6 Длинное название Длинное название Длинное название Длинное название Длинное название',
            'title_en' => 'Blog 6 long name long name long name long name long name long name long name long name long name',

            'description_ru' => 'Описание обо мне Описание обо мне Описание обо мне ',
            'description_en' => 'description about description about description about 
            description about description about description about description about
             description about description about description about description about description about',

            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
