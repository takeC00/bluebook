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
    <p><?php echo $msg; ?></p>
    <p><?php echo $id; ?></p>
    <p><?php echo date("Y年n月j日"); ?></p>
    <p><?php echo $hogeService ?></p>
    <p>Bladeファイルが優先される</p>
</body>
</html>
