<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{--<meta name="viewport"--}}
          {{--content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="css/master.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="js/dashboard.js"></script>
    @yield('includes')

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="top-bar"><p>COMPANY NAME</p></div>
    {{--<div class="container">--}}
        {{--@yield('content')--}}
    {{--</div>--}}
    @yield('content')
</body>
</html>