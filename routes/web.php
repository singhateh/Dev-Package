<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Jambasangsang\Helper;
use Spatie\Permission\Models\Role;

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

Auth::routes();

Route::middleware('auth')->group(function(){


Route::prefix('admin')->group(function () {

    Route::prefix('human-resource')->group(function () {

        Route::resource('users', UserController::class);
        foreach (Helper::getRoles() as $role) {
            Route::get(Str::lower($role->name) ?? '', [UserController::class, 'index'])->name('users.' .Str::lower($role->name) ?? '');
        }
    });

    Route::view('/doctor', 'backend.admin.doctors.index');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});


Route::view('/medicines', 'backend.admin.medicines.index')->name('medicines.index');

Route::view('/rooms', 'backend.admin.rooms.index')->name('rooms.index');
