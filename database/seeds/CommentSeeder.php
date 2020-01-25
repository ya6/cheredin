<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('comments')->insert([
            
            'blog_id' => '6',
           

            'name' => 'Vasya',
            'email' => 'vasya@mail.ru',

            'comment' => 'Ну.. Это Круто!',
            
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('comments')->insert([
            
            'blog_id' => '6',
           

            'name' => 'Petya',
            'email' => 'petia@mail.ru',

            'comment' => 'Дааа!!!',
            
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('comments')->insert([
            
            'blog_id' => '6',
           
            'image' => 'about.jpg',

            'name' => 'Petya',
            'email' => 'petia@mail.ru',

            'comment' => 'Много текста много текста много текста много текста много текста
            много текста много текста много текста много текста много текста много текста много текста
            много текстамного текста много текста много текста много текста много текста много текста ',
            
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
