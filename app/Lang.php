<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lang extends Model {
	const FOREIGN_KEY = "langId";

	protected $table = "lang";
	
	public function sources() {
		return $this->hasMany(Source::class, static::FOREIGN_KEY);
	}

	public function toArray(): array {
		$this->name = __($this->name);

		return parent::toArray();
	}
}
