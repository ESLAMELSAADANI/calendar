<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller {
    public function index(Request $request) {
		if ($request->wantsJson()) {
			return collect(Route::getRoutes())->filter(function($route) {
				return substr($route->uri(), 0, 6) === "{lang}";
			})->map(function($route) {
				return [
					"url" => $route->uri(),
					"method" => $route->methods()[0]
				];
			})->values();
		}

		return abort(403);
	}
}
