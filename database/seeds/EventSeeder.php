<?php

use App\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
		$json = file_get_contents(__DIR__ . "/event.json");
		$events = json_decode($json, $assoc = true);

        Event::insert($events);
    }
}
