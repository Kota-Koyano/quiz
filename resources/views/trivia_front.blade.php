<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>雑学クイズ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>雑学クイズ</h1>
        <div class='explanations'>
            <h2 class='explanation'>・問題は全部で10問あります！</h2>
            <h2 class='explanation'>・正しいと思う選択肢をクリックしてね！</h2>
        </div>
        <div class="footer">
            <a href="/quiz3">開始</a>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>