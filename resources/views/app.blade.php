<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title','App title') </title>
</head>

<body>
    <div>
        @section('header')
        <h2>This is APP header Section</h2>
        @show
    </div>

    <div>
        @section('body')
        <h4>This is App Body</h4>

        @show

    </div>

    <div>
        <h6>This is App footer</h6>
    </div>

</body>

</html>