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
    <h3>実績値</h3>
    <h2>A:{{$yearResultA}}/年</h2>
    <h2>A:{{$monthResultA}}/月</h2>
    <h2>B:{{$yearResultB}}/年</h2>
    <h2>B:{{$monthResultB}}/月</h2>
    <h2>C:{{$yearResultC}}/年</h2>
    <h2>C:{{$monthResultC}}/月</h2>
    <h3>引継ぎ値</h3>
    <h2>A:{{$takeOverA}}</h2>
    <h2>B:{{$takeOverB}}</h2>
    <h2>C:{{$takeOverC}}</h2>
    <h3>上限カウント</h3>
    <h2>A:{{$yearLimitCountA}}/年</h2>
    <h2>A:{{$monthLimitCountA}}/月</h2>
    <h2>B:{{$yearLimitCountB}}/年</h2>
    <h2>B:{{$monthLimitCountB}}/月</h2>
    <h2>C:{{$yearLimitCountC}}/年</h2>
    <h2>C:{{$monthLimitCountC}}/月</h2>

    <h2>A</h2>
    <h2>{{$monthResultA}}/月+{{$takeOverA}}={{$monthLimitCountA}}/月</h2><br>
    <h2>{{$yearResultA}}/年+{{$takeOverA}}={{$yearLimitCountA}}/年</h2>

    <h2>B</h2>
    <h2>{{$monthResultB}}/月+{{$takeOverB}}={{$monthLimitCountB}}/月</h2><br>
    <h2>{{$yearResultB}}/年+{{$takeOverB}}={{$yearLimitCountB}}/年</h2>

    <h2>C</h2>
    <h2>{{$monthResultC}}/月+{{$takeOverC}}={{$monthLimitCountC}}/月</h2><br>
    <h2>{{$yearResultC}}/年+{{$takeOverC}}={{$yearLimitCountC}}/年</h2>
</body>
</html>
