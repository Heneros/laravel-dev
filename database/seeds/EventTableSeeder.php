<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Event;
class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->truncate();

        Event::create([
            'name' => "IoT and the Raspberry Pi",
            'city' => "Columbus",
            'venue' => "Columbus Library",
           'description' => "Weather monitoring with the Pi"
        ]);
         Event::create([
             'name' => "IoT and the Raspberry Pi",
             'city' => "Columbus",
             'venue' => "Columbus Library",
            'description' => "Weather monitoring with the Pi"
        ]);
    }
}
