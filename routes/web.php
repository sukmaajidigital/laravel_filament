<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/chat/user/{user}', [App\Http\Controllers\ChatController::class, 'chat'])->name('chat');
Route::get('/chat/room/{room}', [App\Http\Controllers\ChatController::class, 'room'])->name('chat.room');
Route::get('/chat/get/{room}', [App\Http\Controllers\ChatController::class, 'getChat'])->name('chat.get');
Route::post('/chat/send', [App\Http\Controllers\ChatController::class, 'sendChat'])->name('chat.send');