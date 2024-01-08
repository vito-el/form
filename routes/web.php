<?php

use Illuminate\Support\Facades\Route;
use  App\Models\Article;

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
    return view('welcome');
});

Route::get('/create',function(){
    return view('create');
});

Route::post('/create',function(){
    $article = new Article();
    $article->title = request('title');
    $article->body = request('body');
    $article->save();
});