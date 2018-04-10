<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - mini forum</title>
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_604876_y86ycal5fxtlz0k9.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')
</head>
<body>
@yield('content')
@yield('js')
</body>
</html>