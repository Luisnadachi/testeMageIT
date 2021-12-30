<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'MagIT')</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css">
</head>
@yield('navbar', View::make('components.navbar'))
<div class="container">
    @yield('content')
</div>
</body>
</html>
