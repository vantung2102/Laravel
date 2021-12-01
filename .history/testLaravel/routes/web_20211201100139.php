<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

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

// c1 controller
// Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

//c2 controller
// Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix("home")->middleware('checkHome')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/get/{id?}', [HomeController::class, 'getData'])->name('home.getData');
    Route::get('/update/{id}', [HomeController::class, 'update'])->name('home.update');
    Route::get('/upload/{id}', [HomeController::class, 'upload'])->name('home.upload');
    Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('home.delete');

    // Route::get('user/{id?}/{name?}', function ($id = null, $name = null) {
    //     $str = 'content: ' . $name . " " . " - id: " . $id;
    //     return $str;
    // })->where(
    //     [
    //         'id' => '[0-9]+',
    //         'name' => '[a-z-]+'
    //     ]
    // )->name("admin.user");
});
