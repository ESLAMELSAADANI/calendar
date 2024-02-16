<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
	const FOREIGN_KEY = "eventTypeId";

	protected $table = "event_type";

	public function events()
	{
		return $this->hasMany(Event::class, static::FOREIGN_KEY);
	}

	public function toArray(): array
	{
		$this->name = __($this->name);

		return parent::toArray();
	}
}
