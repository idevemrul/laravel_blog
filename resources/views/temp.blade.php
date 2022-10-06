<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','default title')</title>
</head>

<body>
    <h1>This is template</h1>

    <div>
        @section('container')
        <h2>This is template body container</h2>
        @show
    </div>


</body>

</html>