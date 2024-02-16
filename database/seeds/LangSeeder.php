<?php

use App\Lang;
use Illuminate\Database\Seeder;

class LangSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
		$json = file_get_contents(__DIR__ . "/lang.json");
		$langs = json_decode($json, $assoc = true);

		Lang::insert($langs);
    }
}
