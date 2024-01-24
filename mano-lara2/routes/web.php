<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ForestController;

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

                                          //klases vardas ir metodas, kuri kvieciame
Route::get('/bebras/miskinis/{color}/{size}', [ForestController::class, 'labas']);

//zebras
Route::get('/zebras', function () {
    return 'Labas Zebras!';
});


Route::get('/count', [ForestController::class, 'showCount'])->name('count');//sita atvaziduoja GET
Route::post('/count', [ForestController::class, 'count'])->name('do-count'); //duodam routui varda sita jau skaiciuoja POST
//419 csrf pazeidziamuma kuomet aptinka; iterpia hidden inputa su name ir value specifiniais

Route::get('/squares', [ForestController::class, 'showSquares'])->name('squares');
Route::post('/squares', [ForestController::class, 'squares'])->name('do-squares');
Route::put('/squares', [ForestController::class, 'addSquares'])->name('add-squares');
Route::get('/clear-squares', [ForestController::class, 'clearSquares'])->name('clear-squares');
