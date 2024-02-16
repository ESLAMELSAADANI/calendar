<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSourceTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create("source", function (Blueprint $table) {
			$table->bigIncrements("id");
			$table->string("url");
		});
		
		Schema::table("event", function(Blueprint $table) {
			/**
			 * @todo remove ->default(0) when switching from SQLite to anything else.
			 */
			$table->unsignedBigInteger("sourceId")->default(0);
			$table->foreign("sourceId")->references("id")->on("source");
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
		Schema::table("event", function(Blueprint $table) {
			/**
			 * @todo uncomment the next line when switching from SQLite to anything else.
			 */
			// $table->dropForeign("event_sourceid_foreign");
			// $table->dropColumn("sourceId");
		});
        Schema::dropIfExists("source");
    }
}
