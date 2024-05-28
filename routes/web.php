<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return "Welcome To Login Laravel";
});

Route::get('/index', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/noteapp', [NoteController::class, 'noteApp']);
Route::post('/createnote', [NoteController::class, 'createNote']);
Route::get('/displaynote', [NoteController::class, 'displayNote']);
Route::get('/viewnote/{id}', [NoteController::class, 'viewNote']);
Route::get('/editnote/{id}', [NoteController::class, 'editNote']);
Route::post('/updatenote/{id}', [NoteController::class, 'updateNote']);
Route::get('/deletenote/{id}', [NoteController::class, 'deleteNote']);