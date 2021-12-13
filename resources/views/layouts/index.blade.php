<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- FONTAWESOME -->
    {{-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> --}}
</head>

<body id="body">
    @yield('content')

    <!-- SCRIPT JS -->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/modal.js')}}"></script>
    <script src="//widget.songkick.com/9698459/widget.js"></script>
</body>
</html>