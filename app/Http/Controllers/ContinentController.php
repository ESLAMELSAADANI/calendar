<?php

namespace App\Http\Controllers;

use App\Continent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ContinentController extends Controller {
    public function index(Request $request, string $lang) {
		if ($request->wantsJson()) {
			App::setLocale($lang);
			
			return Continent::all();
		}

		return abort(403);
	}
}
