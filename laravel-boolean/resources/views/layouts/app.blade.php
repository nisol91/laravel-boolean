<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('additional_css')
    {{-- si possono creare slot di css o js addizionali ma non e necessario usarlo. --}}
    <title>@yield('title')</title>
</head>
<body>
    @include('partials._header')
    @yield('content')
    @include('partials._footer')


    @yield('additional_js')
</body>
</html>
