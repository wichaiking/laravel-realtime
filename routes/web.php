<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/users', 'users.showAll')->name('users.all');

Route::view('/games', 'games.show')->name('games.show');

Route::get('/chat', 'ChatController@showChat')->name('chat.show');
Route::post('/chat/message', 'ChatController@messageReceived')->name('chat.message');
Route::post('/chat/greet/{user}', 'ChatController@greetReceived')->name('chat.greet');
