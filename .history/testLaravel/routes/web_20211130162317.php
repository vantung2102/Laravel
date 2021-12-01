<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;

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



// Route::post("/user", function () {
//     return "Post";
// });

// Route::put("/user", function () {
//     return "Put";
// });

// Route::delete("/user", function () {
//     return "Delete";
// });

// Route::patch("/user", function () {
//     return "Patch";
// });

// Route::match(['get', 'post'], "/user", function () {
//     return "Match";
// });

// Route::redirect("/user", "http://google.com");

Route::prefix("admin")->group(function () {

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


    Route::get('user/{id}/{name}', function ($id, $name) {
        $str = 'content: ' . $name . " " . " - id: " . $id;
        return $str;
    })->where(['id' => '[0-9]+', 'name' => '[a-z-]+']);
});
