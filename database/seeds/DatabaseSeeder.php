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
        $this->call([
			EventTypeSeeder::class,
			ContinentSeeder::class,
			LangSeeder::class,
			SourceSeeder::class,
			EventSeeder::class,
			EventContinentSeeder::class,
		]);
    }
}
