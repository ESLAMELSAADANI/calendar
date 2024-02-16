<?php

namespace App\Http\Controllers;

use App\Continent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ContinentEventController extends Controller {
    public function index(Request $request, string $lang, Continent $continent) {
		if ($request->wantsJson()) {
			App::setLocale($lang);

			return $continent->events->makeHidden("pivot")->load("type", "source.lang");
		}

		return abort(403);
	}
}
