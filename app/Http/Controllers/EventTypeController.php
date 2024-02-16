<?php

namespace App\Http\Controllers;

use App\EventType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EventTypeController extends Controller {
    public function index(Request $request, string $lang) {
        if ($request->wantsJson()) {
			App::setLocale($lang);

			return EventType::all();
		}

		return abort(403);
	}
	
	public function show(Request $request, string $lang, EventType $eventType) {
		if ($request->wantsJson()) {
			App::setLocale($lang);

			return $eventType;
		}

		return abort(403);
	}
}
