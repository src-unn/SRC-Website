<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = <?= json_encode( [ 'csrfToken' => csrf_token() ] ) ?>;
    </script>

    <title>{{$meta['title'] or config('app.name')}}</title>
    <meta name="description" content="{{$meta['description'] or config('app.name')}}">
    <meta name="author" content="{{$meta['author'] or config('app.name')}}">

    <!-- Styles -->
    <link rel="icon" href="{{ url('icon.png') }}">
    @if(config('app.env')=='production')
        <link href="{{url('roboto.font.gstatic.css')}}" rel="stylesheet">
    @else
        <link href="{{url('roboto.font.local.css')}}" rel="stylesheet">
    @endif
    <link href="{{url('css/material.icons.css')}}" rel="stylesheet">
    <link href="{{url('css/material.min.css')}}" rel="stylesheet">
    <link href="{{url('css/srcng.styles.css')}}" rel="stylesheet">

    @yield('extra_heads')

</head>
<body>
    @yield('body_markup')

    <!-- Scripts -->
    <script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/material.min.js')}}"></script>
    @yield('extra_scripts')
</body>
</html>
