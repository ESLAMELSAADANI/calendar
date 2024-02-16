<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FallbackController extends Controller {
    public function index(Request $request) {
		if ($request->wantsJson()) {
			return response()->json(null, 404);
		}

		return abort(404);
	}
}
