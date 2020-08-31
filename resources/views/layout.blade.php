<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
</head>
<body>

    @include('header')
    <div style="display: flex; justify-content:center; align-content:center" >
        @yield('content')
    </div>
    <div>
        <h1>footer</h1>
        <hr>
    </div>
</body>
</html>