<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventContinentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("event_continent", function (Blueprint $table) {
			/**
			 * @todo remove ->default(0) when switching from SQLite to anything else.
			 */
			$table->unsignedBigInteger("eventId")->default(0);
			$table->foreign("eventId")->references("id")->on("event");

			/**
			 * @todo remove ->default(0) when switching from SQLite to anything else.
			 */
			$table->unsignedBigInteger("continentId")->default(0);
			$table->foreign("continentId")->references("id")->on("continent");

			$table->primary(["eventId", "continentId"]);
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("event_continent");
    }
}
