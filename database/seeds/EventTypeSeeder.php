<?php

use App\EventType;
use Illuminate\Database\Seeder;

class EventTypeSeeder extends Seeder {
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
		$json = file_get_contents(__DIR__ . "/event-type.json");
		$eventTypes = json_decode($json, $assoc = true);

        EventType::insert($eventTypes);
    }
}
