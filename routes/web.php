<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\DB;

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
    $posts = DB::table('products')->get();
    return view('layouts.main', [
        'posts' => $posts
    ]);
});

// Route::get('/', function () {
//     return view('layouts.main');
//     // return view('welcome');
// });

Route::get('login', function () {
    return view('login');
    // return view('welcome');
});
Route::resource('products', ProductController::class);