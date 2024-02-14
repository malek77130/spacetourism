<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PlanetAPIController;
use App\Http\Controllers\API\CrewAPIController;
use App\Http\Controllers\API\TechnologieAPIController;
use App\Http\Controllers\API\UserAuthController;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

    Route::group(['prefix' => '/planet'],function () {
        Route::get('/', [PlanetAPIController::class, 'index'])->name('index');
        Route::get('/{id}', [PlanetAPIController::class, 'show']);
        Route::post('/', [PlanetAPIController::class, 'store'])->middleware('auth.api');
        Route::put('/{id}', [PlanetAPIController::class, 'update'])->middleware('auth.api');
        Route::delete('/{id}', [PlanetAPIController::class, 'destroy'])->middleware('auth.api');
    });

    Route::group(['prefix' => '/crew'],function () {
        Route::get('/', [CrewAPIController::class, 'index'])->name('index');
        Route::get('/{id}', [CrewAPIController::class, 'show']);
        Route::post('/', [CrewAPIController::class, 'store'])->middleware('auth.api');
        Route::put('/{id}', [CrewAPIController::class, 'update'])->middleware('auth.api');
        Route::delete('/{id}', [CrewAPIController::class, 'destroy'])->middleware('auth.api');
    });
    Route::group(['prefix' => '/technologie'],function () {
        Route::get('/', [TechnologieAPIController::class, 'index'])->name('index');
        Route::get('/{id}', [TechnologieAPIController::class, 'show']);
        Route::post('/', [TechnologieAPIController::class, 'store'])->middleware('auth.api');
        Route::put('/{id}', [TechnologieAPIController::class, 'update'])->middleware('auth.api');
        Route::delete('/{id}', [TechnologieAPIController::class, 'destroy'])->middleware('auth.api');
    });


Route::post('register',[UserAuthController::class,'register']);
Route::post('login',[UserAuthController::class,'login']);
Route::post('logout',[UserAuthController::class,'logout'])
  ->middleware('auth:sanctum');


