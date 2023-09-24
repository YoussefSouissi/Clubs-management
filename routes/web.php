<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Models\activity;
use Illuminate\Support\Facades\Route;

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
    return view('HomePage');
});

Route::get('/ClubsPage', function () {
    return view('ClubsPage');
})->name('ClubsPage');

Route::get('/EventsPage', function () {
    return view('EventsPage');
})->name('EventsPage');


Route::get('/indexEtudiant', [AdminController::class,'index']);
