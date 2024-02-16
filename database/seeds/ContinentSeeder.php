<?php

use App\Continent;
use Illuminate\Database\Seeder;

class ContinentSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
		$json = file_get_contents(__DIR__ . "/continent.json");
		$continents = json_decode($json, $assoc = true);
		 
        Continent::insert($continents);
    }
}
