<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

/**
 * route "/register"
 * @method "POST"
 */
Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register'); // new route for register user using method POST

/**
 * route "/login"
 * @method "POST"
 */
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login'); // new route for login user using method POST

/**
 * route "/profile"
 * @method "GET"
 */
Route::get('/profile', App\Http\Controllers\Api\ProfileController::class)->name('profile'); // new route for profile user using method GET

/**
 * route "/user"
 * @method "GET"
 */
Route::middleware('auth:api')->get('/user', function (Request $request) { // add middleware auth:api, to protect route, only authenticated user can access this route
  return $request->user();
});

/**
 * route "/logout"
 * @method "POST"
 */
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout'); // new route for logout user using method POST