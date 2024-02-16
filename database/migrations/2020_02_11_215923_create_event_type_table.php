<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("event_type", function (Blueprint $table) {
			$table->bigIncrements("id");
			$table->string("name");

			$table->unique("name", "unique_event");
		});
		
		Schema::table("event", function(Blueprint $table) {
			/**
			 * @todo remove ->default(0) when switching from SQLite to anything else.
			 */
			$table->unsignedBigInteger("eventTypeId")->default(0);
			$table->foreign("eventTypeId")->references("id")->on("event_type");
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table("event", function(Blueprint $table) {
			/**
			 * @todo uncomment the next line when switching from SQLite to anything else.
			 */
			// $table->dropForeign("event_eventtypeid_foreign");
			// $table->dropColumn("eventTypeId");
		});

        Schema::dropIfExists("event_type");
    }
}
