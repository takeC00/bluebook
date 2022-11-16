<html>
<head>
    <title>Hello/Index</title>
    <style>
        body {font-size: 16px; color:#999;}
        h1 {font-size: 100px; text-align: right; color:#f6f6f6;
            margin: -50px 0px -100px 0px;}
    </style>
</head>
<body>
    <h2>Blade/Index</h2>
    @if ($msg != '')
    <p>こんにちは{{$msg}}さん。</p>
    @else
    <p>何か書いてください</p>
    @endif
    <form method ='POST' action='/hello'>
        @csrf
        <input type='text' name='msg'>
        <input type='submit'>
    </form>
</body>
</html>
