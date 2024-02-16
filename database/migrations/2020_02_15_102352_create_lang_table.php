<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLangTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create("lang", function (Blueprint $table) {
			$table->bigIncrements("id");
			$table->string("name");
			$table->string("slug");

			$table->unique("name", "unique_lang_name");
			$table->unique("slug", "unique_lang_slug");
		});
		
		Schema::table("source", function(Blueprint $table) {
			/**
			 * @todo remove ->default(0) when switching from SQLite to anything else.
			 */
			$table->unsignedBigInteger("langId")->default(0);
			$table->foreign("langId")->references("id")->on("lang");
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
		Schema::table("source", function(Blueprint $table) {
			/**
			 * @todo uncomment the next line when switching from SQLite to anything else.
			 */
			// $table->dropForeign("source_langid_foreign");
			// $table->dropColumn("langId");
		});
        Schema::dropIfExists("lang");
    }
}
