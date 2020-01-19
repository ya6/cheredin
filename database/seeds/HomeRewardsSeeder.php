<?php

use Illuminate\Database\Seeder;

class HomeRewardsSeeder extends Seeder
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
           
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('rewards')->insert([
            'image' => 'rew2.jpg',
           
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('rewards')->insert([
            'image' => 'rew3.jpg',
           
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
