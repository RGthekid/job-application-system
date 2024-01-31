<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AplikantiController;
use App\Http\Controllers\KualifikimiController;
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
    return view('welcome');
});


// Display a listing of aplikanti
Route::get('/aplikanti', [AplikantiController::class, 'index'])->name('aplikanti.index');

// Show the form for creating a new aplikanti
Route::get('/aplikanti/create', [AplikantiController::class, 'create'])->name('aplikanti.create');

// Store a newly created aplikanti in the database
Route::post('/aplikanti', [AplikantiController::class, 'store'])->name('aplikanti.store');

// Display the specified aplikanti
Route::get('/aplikanti/{aplikanti}', [AplikantiController::class, 'show'])->name('aplikanti.show');

// Show the form for editing the specified aplikanti
Route::get('/aplikanti/{aplikanti}/edit', [AplikantiController::class, 'edit'])->name('aplikanti.edit');

// Update the specified aplikanti in the database
Route::put('/aplikanti/{aplikanti}', [AplikantiController::class, 'update'])->name('aplikanti.update');

// Remove the specified aplikanti from the database
Route::delete('/aplikanti/{aplikanti}', [AplikantiController::class, 'destroy'])->name('aplikanti.destroy');



// Display a listing of kualifikimi
Route::get('/kualifikimi', [KualifikimiController::class, 'index'])->name('kualifikimi.index');

// Show the form for creating a new kualifikimi
Route::get('/kualifikimi/create', [KualifikimiController::class, 'create'])->name('kualifikimi.create');

// Store a newly created kualifikimi in the database
Route::post('/kualifikimi', [KualifikimiController::class, 'store'])->name('kualifikimi.store');

// Display the specified kualifikimi
Route::get('/kualifikimi/{kualifikimi}', [KualifikimiController::class, 'show'])->name('kualifikimi.show');

// Show the form for editing the specified kualifikimi
Route::get('/kualifikimi/{kualifikimi}/edit', [KualifikimiController::class, 'edit'])->name('kualifikimi.edit');

// Update the specified kualifikimi in the database
Route::put('/kualifikimi/{kualifikimi}', [KualifikimiController::class, 'update'])->name('kualifikimi.update');

// Remove the specified kualifikimi from the database
Route::delete('/kualifikimi/{kualifikimi}', [KualifikimiController::class, 'destroy'])->name('kualifikimi.destroy');

