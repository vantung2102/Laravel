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
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix("admin")->middleware('checkHome')->group(function () {

    // Route::get('/', function () {
    //     return view('welcome');
    // });

    // Route::get('/user/{content}/{id}', function ($content = null, $id = null) {
    //     $str = 'content: ' . $content . " " . " - id: " . $id;
    //     return $str;
    // })->where(
    //     [
    //         'content' => '[a-z]+',
    //         'id' => '[0-9]+'
    //     ]
    // );


    Route::get('user/{id?}/{name?}', function ($id = null, $name = null) {
        $str = 'content: ' . $name . " " . " - id: " . $id;
        return $str;
    })->where(
        [
            'id' => '[0-9]+',
            'name' => '[a-z-]+'
        ]
    )->name("admin.user");
});
