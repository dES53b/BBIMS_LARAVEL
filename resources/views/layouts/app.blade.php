<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href="/css/style.css">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>BBIMS</title>

    </head>
            <body>
                @include('inc.navbar')
                <div  style="margin-top: 15px"class='container'>
               @yield('content')
                </div>
            </body>
</html>
