<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>初級編</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @foreach ($quizzes as $quiz)
            <div>
                <h1 class='question'>{{ $quiz->question }}</h1>
            </div>
            <div class='options'>
                <p class='option'>①</p>
                <p class='option'>②</p>
                <p class='option'>③</p>
                <p class='option'>④</p>
            </div>
        @endforeach
        </div>
    </body>
</html>