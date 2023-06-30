<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Option;

class QuizController extends Controller
{
    public function quiz1(Quiz $quiz)
    {
        //dd($quiz->where('genre', 1)->first()->options()->get());
        return view('elementary_quiz')->with(['quizzes' => $quiz->where('genre', 1)->get()]);
    }
    
    public function quiz2(Quiz $quiz)
    {
        return view('intermediate_quiz')->with(['quizzes' => $quiz->where('genre', 2)->inRandomOrder()->limit(10)->get()]);
    }
    
    public function quiz3(Quiz $quiz)
    {
        return view('trivia_quiz')->with(['quizzes' => $quiz->where('genre', 3)->get()]);
    }
}
