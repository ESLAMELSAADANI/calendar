<?php

use Illuminate\Http\Request;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix("{lang}")->group(function () {
	Route::apiResource("event-type", EventTypeController::class)->only(["index", "show"]);
	Route::apiResource("event-type.event", EventTypeEventController::class)->only(["index"]);
	Route::apiResource("event", EventController::class)->only(["index", "show"]);
	Route::apiResource("event.continent", EventContinentController::class)->only(["index"]);
	Route::apiResource("continent", ContinentController::class)->only(["index"]);
	Route::apiResource("continent.event", ContinentEventController::class)->only(["index"]);
	Route::post("date", [EventController::class, 'date']);
	// Route::apiResource("ddd", EventController::class@ss);
});

Route::get("/", "HomeController@index");

Route::fallback("FallbackController@index");
