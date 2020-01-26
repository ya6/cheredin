<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         // factory(App\User::class, 1)->create();

         

         $this->call(HomeSliderSeeder::class);
         $this->call(HomePhotosSeeder::class);
         //$this->call(HomeRewardsSeeder::class);
         $this->call(WorkoutsSeeder::class);
         $this->call(AboutSeeder::class);
         $this->call(PartnersSeeder::class);
         
         $this->call(UserSeeder::class); 
         $this->call(BlogSeeder::class);
         $this->call(CategorySeeder::class);
         $this->call(RewardSeeder::class);
         $this->call(HomeAboutSeeder::class);
         $this->call(HomeVideoSeeder::class);
         $this->call(HomeEventSeeder::class);
         $this->call(CommentSeeder::class);
         $this->call(PhotosSeeder::class);
         
    }
}
