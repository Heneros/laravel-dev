<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(BlogCategoriesTableSeeder::class);
         factory(\App\Models\BlogPost::class, 100)->create();
    }
}
