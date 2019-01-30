<?php

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
})->name('home');

// Dit is om de help pagina te laten zien
Route::get('/help', function(){
    return view('help');
})->name('help');

// Voeg hier je eigen routes toe

Route::get('laravel-links', ['uses' => 'LinksController@index'])->name('links');
Route::post('laravel-links', ['uses' => 'LinksController@store'])->name('post_link');

