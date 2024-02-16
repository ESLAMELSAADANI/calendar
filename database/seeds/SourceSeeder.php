<?php

use App\Source;
use Illuminate\Database\Seeder;

class SourceSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
		$json = file_get_contents(__DIR__ . "/source.json");
		$sources = json_decode($json, $assoc = true);

		Source::insert($sources);
    }
}
