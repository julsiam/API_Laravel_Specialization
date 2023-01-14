<?php

use App\Http\Controllers\ResidentController;
use App\Http\Controllers\SpecialModelController;
use App\Models\Residentr;
use App\Models\SpecialModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//For the SpecialController Methods

Route::apiResource('special', SpecialModelController::class);


// Route::get('special', [SpecialModelController::class, 'index']);
// Route::post('special', [SpecialModelController::class, 'store']);
// Route::get('special/{id}', [SpecialModelController::class, 'show']);
// Route::delete('special/{id}', [SpecialModelController::class, 'destroy']);
// Route::put('special/{id}', [SpecialModelController::class, 'update']);


//For the EmployeeController Methods

Route::post('add_resident',[ResidentController::class, 'addResident']);
Route::get('all_resident',[ResidentController::class, 'allResident']);
Route::get('get_resident/{id}',[ResidentController::class, 'getResident']);
Route::put('update_resident/{id}', [ResidentController::class, 'updateResident']);
Route::delete('delete_resident/{id}', [ResidentController::class, 'deleteResident']);


