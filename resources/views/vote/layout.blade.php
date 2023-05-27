<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/fontawesome/css/all.css') }}">
    @yield('css')
    <title>Myvoice</title>
</head>
<body>
    @yield('nav-bar')

    @yield('side-bar')

    @yield('content')
</body>
</html>