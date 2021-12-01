<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::get('/user', function () {
    return view('user');
});

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

Route::match(['get', 'post'], "/user", function () {
    return "Match";
});
