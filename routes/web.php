<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

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
});

Route::get('/', function() {
    return view('front');
});

Route::get('/quizzes', [QuizController::class, 'index']); 

Route::get('/elementary', function() {
    return view('elementary_front');
});

Route::get('/intermediate', function() {
    return view('intermediate_front');
});

Route::get('/trivia', function() {
    return view('trivia_front');
});

Route::get('/quiz1', [QuizController::class, 'quiz1']);

Route::get('/quiz2', [QuizController::class, 'quiz2']);

Route::get('/quiz3', [QuizController::class, 'quiz3']);