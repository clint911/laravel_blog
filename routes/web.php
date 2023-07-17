<?php

use App\Http\Controllers\DogController;
use Illuminate\Support\Facades\Route;
use App\Models\Dog;
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

Route::post('/dogs', [DogController::class, 'create'])->name('dog.create');

Route::get('/', function () {
    $dogs = Dog::all();
    return view('dogs', ['dogs' => $dogs]);
})->name('index');

Route::delete(
    '/dog/{id}',
    [DogController::class, 'delete']
)->name('dog.delete');
