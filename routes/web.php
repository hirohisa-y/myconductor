<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

use App\Http\Controllers\Admin\MusicianController;
Route::controller(MusicianController::class)->prefix('admin')->name('admin.')->middleware('auth')->
group(function() {
    Route::get('musician','index')->name('musician.index');
    Route::get('musician/{id}','show')->name('musician.show');
    Route::get('musician/create', 'add')->name('musician.add');
    Route::post('musician/create', 'create')->name('musician.create');
    Route::get('musician/{id}/edit','edit')->name('musician.edit');
    Route::post('musician/update', 'update')->name('musician.update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
