<?php

use App\EventContinent;
use Illuminate\Database\Seeder;

class EventContinentSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
		$json = file_get_contents(__DIR__ . "/event-continent.json");
		$eventContinents = json_decode($json, $assoc = true);

        EventContinent::insert($eventContinents);
    }
}
