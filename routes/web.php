<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::GET('/', [App\Http\Controllers\FrontController::class, 'index'])->name('main');

Route::GET('/party-lobby', [App\Http\Controllers\GameController::class, 'lobby'])->name('lobby');
Route::GET('/party-lobby/create', [App\Http\Controllers\GameController::class, 'create'])->name('lobby.create');
Route::GET('/party-lobby/match_start/{hex}', [App\http\Controllers\GameController::class, 'start'])->name('game.start');
Route::GET('/party-lobby/search', [App\http\Controllers\GameController::class, 'search'])->name('lobby.search');

Auth::routes();

Route::GET('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
