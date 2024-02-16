<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model {
	const FOREIGN_KEY = "continentId";

	protected $table = "continent";
	
	public function events() {
		return $this->belongsToMany(Event::class, EventContinent::TABLE, static::FOREIGN_KEY, Event::FOREIGN_KEY);
	}

	public function toArray(): array {
		$this->name = __($this->name);

		return parent::toArray();
	}
}
