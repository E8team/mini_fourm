<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('css')
</head>
<body>
<h1>头部</h1>
@yield('content')
<h1>尾部</h1>
<script src="jquery"></script>
@yield('js')
</body>
</html>