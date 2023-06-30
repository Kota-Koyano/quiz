<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>雑学クイズ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form action="/result" method="POST">
            @csrf
            @foreach ($quizzes as $quiz)
                <div>
                    <h1 class='question'>{{ $quiz->question }}</h1>
                    @foreach($quiz->options as $option)
                        <p>
                            <input type="radio" name="{{ $quiz->id }}"/>
                            {{ $option->content}}
                        </p>
                    @endforeach
                    <br>
                </div>
            @endforeach
            <input type="submit" value="採点"/>
        </form>
        <div class="footer">
            <br>
            <a href="/elementary">戻る</a>
        </div>
    </body>
</html>