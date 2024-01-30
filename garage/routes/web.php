<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MechanicController AS M; //pervadinu kontroleri trumpiau
use App\Http\Controllers\TruckController AS T; //pervadinu kontroleri trumpiau
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


// Mechanics CRUD Group
//viska sugrupuojame. prefix sutrumpina kelio uzrasyma
Route::prefix('mechanics')->name('mechanics-')->group(function () {
    Route::get('/', [M::class, 'index'])->name('index'); //rodysim sarasa
    Route::get('/create', [M::class, 'create'])->name('create'); //creato forma
    Route::post('/', [M::class, 'store'])->name('store'); //uzsaugojimas
    Route::get('/{mechanic}', [M::class, 'show'])->name('show');//konkretus mechanikas
    Route::get('/{mechanic}/edit', [M::class, 'edit'])->name('edit');// jo redagavimo forma
    Route::put('/{mechanic}', [M::class, 'update'])->name('update'); //redaguosim
    Route::get('/{mechanic}/delete', [M::class, 'delete'])->name('delete');  //deleto confirmacija
    Route::delete('/{mechanic}', [M::class, 'destroy'])->name('destroy');
});


// Trucks Crud group


Route::prefix('trucks')->name('trucks-')->group(function () {
    Route::get('/', [T::class, 'index'])->name('index');
    Route::get('/create', [T::class, 'create'])->name('create');
    Route::post('/', [T::class, 'store'])->name('store');
    Route::get('/{truck}', [T::class, 'show'])->name('show');
    Route::get('/{truck}/edit', [T::class, 'edit'])->name('edit');
    Route::put('/{truck}', [T::class, 'update'])->name('update');
    Route::get('/{truck}/delete', [T::class, 'delete'])->name('delete');
    Route::delete('/{truck}', [T::class, 'destroy'])->name('destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
