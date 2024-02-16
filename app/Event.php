<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Event extends Model
{
	const FOREIGN_KEY = "eventId";

	protected $table = "event";
	protected $casts = [
		"worldwide" => "boolean",
		"requiresBinoculars" => "boolean",
	];

	public function type()
	{
		return $this->belongsTo(EventType::class, EventType::FOREIGN_KEY);
	}

	public function continents()
	{
		return $this->belongsToMany(Continent::class, EventContinent::TABLE, static::FOREIGN_KEY, Continent::FOREIGN_KEY);
	}

	public function source()
	{
		return $this->belongsTo(Source::class, Source::FOREIGN_KEY);
	}

	public function toArray(): array
	{
		$this->name = __($this->name);

		return parent::toArray();
	}
}
