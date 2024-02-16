<?php

namespace App\Http\Controllers;

use App\EventType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EventTypeEventController extends Controller {
    public function index(Request $request, string $lang, EventType $eventType) {
		if ($request->wantsJson()) {
			App::setLocale($lang);

			return $eventType->events->load("source.lang");
		}
		
		return abort(403);
	}
}
