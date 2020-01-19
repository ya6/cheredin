<?php

use Illuminate\Database\Seeder;

class RewardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rewards')->insert([
            'image' => 'rew1.jpg',
            'description_ru' => 'описание для 1 награды',
            'description_en' => 'description for 1 reward',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('rewards')->insert([
            'image' => 'rew2.jpg',
            'description_ru' => 'описание для 2 награды',
            'description_en' => 'description for 2 reward',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('rewards')->insert([
            'image' => 'rew3.jpg',
            'description_ru' => 'описание для 3 награды',
            'description_en' => 'description for 3 reward',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('rewards')->insert([
            'image' => 'rew4.jpg',
            'description_ru' => 'описание для 4 награды',
            'description_en' => 'description for 4 reward',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('rewards')->insert([
            'image' => 'rew5.jpg',
            'description_ru' => 'описание для 5 награды',
            'description_en' => 'description for 5 reward',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('rewards')->insert([
            'image' => 'rew6.jpg',
            'description_ru' => 'описание для 6 награды',
            'description_en' => 'description for 6 reward',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('rewards')->insert([
            'image' => 'rew7.jpg',
            'description_ru' => 'описание для 7 награды',
            'description_en' => 'description for 7 reward',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('rewards')->insert([
            'image' => 'rew8.jpg',
            'description_ru' => 'описание для 8 награды',
            'description_en' => 'description for 8 reward',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('rewards')->insert([
            'image' => 'rew9.jpg',
            'description_ru' => 'описание для 9 награды',
            'description_en' => 'description for 9 reward',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
