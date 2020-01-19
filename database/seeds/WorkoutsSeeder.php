<?php

use Illuminate\Database\Seeder;

class WorkoutsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workouts')->insert([
            'image' => 'icon_p1.png',

            'title_ru' => 'Жим лежа на скамье',
            'title_en' => 'Bench press',

            'description_ru' => 'описание для Жим лежа на скамье описание для Жим лежа на скамье ',
            'description_en' => 'description for Bench press description for Bench press',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('workouts')->insert([
            'image' => 'icon_p2.png',

            'title_ru' => 'Приседания со штангой на спине',
            'title_en' => 'Squat',

            'description_ru' => 'описание Приседания со штангой на спине Приседания со штангой на спине ',
            'description_en' => 'description for Squat Squat Squat',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('workouts')->insert([
            'image' => 'icon_p3.png',

            'title_ru' => 'Cтановая тяга',
            'title_en' => 'Bench press',

            'description_ru' => 'описание для Cтановая тяга Cтановая тяга ',
            'description_en' => 'description for Deadlift Deadlift Deadlift ',

            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
