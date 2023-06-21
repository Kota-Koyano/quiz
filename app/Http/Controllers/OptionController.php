<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;

class OptionController extends Controller
{
    public function index(Quiz $quiz)
    {
        return view('elementary_quiz')->with(['quizzes' => $quiz->get()]);
    }
}
