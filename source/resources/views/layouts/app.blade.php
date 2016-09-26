<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{$meta['description'] or config('app.name')}}">
    <meta name="author" content="{{$meta['author'] or config('app.name')}}">

    <title>{{$meta['title'] or 'Awesome Title ...'}} | ZeeSaa Books</title>

    <!-- Styles -->
    <link rel="icon" href="{{ url('/favicon.ico') }}">
    <link href="{{url('/css/material-icons.css')}}" rel="stylesheet">
    <link href="{{url('/css/materialize.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?= json_encode( [ 'csrfToken' => csrf_token() ] ) ?>;
    </script>
</head>
<body>

    @yield('header')

    @yield('content')

    @yield('footer')

    <!-- Scripts -->
    <script type="text/javascript" src="{{url('/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/materialize.min.js')}}"></script>
</body>
</html>
