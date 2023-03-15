<?php

use App\Models\Home;
use App\Models\Excursion;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $homes = Home::paginate(3);
    $excs = Excursion::all();
    return view('welcome',compact('homes','excs'));
})->name('welcome');
Route::get('/hotels', function () {
    $homes = Home::all();
  
    return view('hotels',compact('homes'));
})->name('hotels');
Route::get('/excursion', function () {
    $excs = Excursion::all();
    return view('excursions',compact('excs'));
})->name('excursion');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('rents', function () {
        return view('back.index', ['title' => 'Mes réservations']);
    })->name('rents');
    Route::get('payments', function () {
        return view('back.index', ['title' => 'Mes paiements']);
    })->name('payments');
});

Route::resource('excs','App\Http\Controllers\ExcursionController');
Route::resource('homes','App\Http\Controllers\HomeController');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
