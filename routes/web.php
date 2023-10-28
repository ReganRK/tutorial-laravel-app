<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

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

Route::view('/coba', 'coba');

Route::get('/', function () {
    return view('home', ['name' => 'Regan', 'role' => 'Admin', 'products' => ['Apel', 'Mie', 'Nasi', 'Ayam']]);
})->middleware('auth');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact', ['name' => 'Taylor', 'phone' => '08113131313']);
});
 
Route::get('/user/{id}', [UserController::class, 'index']);

Route::get('/coba/{id}', function ($id) {
    return view('contact', ['name' => 'Taylor', 'phone' => '08113131313', 'id' => $id]);
});

Route::get('/product/{id}', [ProductController::class, 'index']);

//* Route::get($uri, $callback);
//* Route::post($uri, $callback);
//* Route::put($uri, $callback);
//! Route::patch($uri, $callback);
//* Route::delete($uri, $callback);
//! Route::options($uri, $callback);

Route::redirect('/contact-us', '/contact');

// Route::view('/contact', 'contact');
// Route::view('/contact', 'contact', ['name' => 'Taylor', 'phone' => '08113131313']);

// Route::get('/product/{id}', function ($id) {
//     return view('product.detail', ['id' => $id]);
// });

//* Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {

//* });

Route::prefix('admin')->group(function () {
    Route::get('/contact/{id}', function ($id) {
        // Matches The "/admin/users" URL
        return view('contact', ['name' => 'Taylor', 'phone' => '08113131313', 'id' => $id]);
    });
});

//* php artisan route:list
//* check all routes here

//* cek middleware itu di kernel
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);