<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return "Welcome To Login Laravel";
});

Route::get('/index', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'register']);