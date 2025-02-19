<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <head>

    @vite('resources/sass/app.scss')
   
        <!-- Otros links -->
        <link href="{{ asset('css/styles_header.css') }}" rel="stylesheet">
       @yield('css')
    
      

</head>
<body>
@include('layouts._partials.header')

@yield('content')

@include('layouts._partials.footer')

    @vite('resources/js/app.js')
</body>
</html>