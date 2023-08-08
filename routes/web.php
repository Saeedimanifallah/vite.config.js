<?php

use Illuminate\Support\Facades\Route;

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
use App\Models\Article;

Route::get('/', function () {
//    factory(Article::class,10)->create();
//    createArticle::factory(10)->create();

    $articles=Article::orderBy('id','desc')->get();
    return view('index');
});
