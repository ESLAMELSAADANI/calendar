<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EventContinentController extends Controller {
    public function index(Request $request, string $lang, Event $event) {
		if ($request->wantsJson()) {
			App::setLocale($lang);

			return $event->continents->makeHidden("pivot");
		}

		return abort(403);
	}
}
