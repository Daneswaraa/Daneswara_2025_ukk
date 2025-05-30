<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\APIGuruController;
use App\Http\Controllers\APISiswaController;
use App\Http\Controllers\APIIndustriController;
use App\Http\Controllers\APIPklController;
// 1. Penggunaan APIGuruController.php

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// 2. Route yang mengarahkan ke APIGuruController.php

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Route::middleware('auth:sanctum')->group(function () {
//     Route::apiResource("guru", APIGuruController::class);
//     Route::apiResource("siswa", APISiswaController::class);
// });

Route::apiResource("guru", APIGuruController::class);
Route::apiResource("siswa", APISiswaController::class);
Route::apiResource('industri', APIIndustriController::class);
Route::apiResource('pkl', APIPklController::class);