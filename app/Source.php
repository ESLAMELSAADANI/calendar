<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model {
	const FOREIGN_KEY = "sourceId";

	protected $table = "source";
	
	public function events() {
		return $this->hasMany(Source::class, static::FOREIGN_KEY);
	}

	public function lang() {
		return $this->belongsTo(Lang::class, Lang::FOREIGN_KEY);
	}
}
