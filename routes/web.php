<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AffichageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\TechnologieController;
use App\Http\Controllers\CrewController;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('en/home');
});

Route::group(['prefix' => '/{locale}', 'middleware' => 'language'],function () {
    Route::get('/home',[AffichageController::class,'index'])->name('home');
    Route::get('/planets/moon',[AffichageController::class,'moon'])->name('moon');
    Route::get('/planets/mars',[AffichageController::class,'mars'])->name('mars');
    Route::get('/planets/europa',[AffichageController::class,'europa'])->name('europa');
    Route::get('/planets/titan',[AffichageController::class,'titan'])->name('titan');
    Route::get('/planets/{planetName}',[AffichageController::class,'planet'])->name('planet');
    Route::get('/equipages',[AffichageController::class,'equipages'])->name('equipages');
    Route::get('/technologie',[AffichageController::class,'technologie'])->name('technologie');
    Route::get('/technologie/page2',[AffichageController::class,'technologiePage2'])->name('technologiePage2');
    Route::get('/technologie/page3',[AffichageController::class,'technologiePage3'])->name('technologiePage3');
    Route::get('/technologie/{technologieName}',[AffichageController::class,'technologieAutre'])->name('technologieAutre');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/tokens/create', function (Request $request) {
        $token = $request->user()->createToken($request->token_name);
     
        return ['token' => $token->plainTextToken];
    });
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('planets', PlanetController::class)->middleware('auth');
Route::resource('crews', CrewController::class)->middleware('auth');
Route::resource('technologies', TechnologieController::class)->middleware('auth');


require __DIR__.'/auth.php';
