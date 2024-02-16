<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create("event", function (Blueprint $table) {
			$table->bigIncrements("id");
			$table->string("name");
			$table->datetime("from");
			$table->datetime("to");
			$table->boolean("worldwide");
			$table->boolean("requiresBinoculars");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists("event");
    }
}
