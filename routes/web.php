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
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::prefix('users')->group(function () {

    Route::get('/', 'UserController@list')->name('users');
    Route::get('/save', fn() => view('user.save'));
    Route::post('/save', 'UserController@store')->name('user.create');
    Route::put('/{user}/save', 'UserController@update');
    Route::get('/{user}', fn(App\Models\User $user) => view('user.save', compact('user')));
    Route::delete('/{user}', 'UserController@delete');

});

Route::get('/dashboard', fn() => view('dashboard.index'));