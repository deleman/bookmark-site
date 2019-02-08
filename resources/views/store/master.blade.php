<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost/blog5.7/public/css/app.css">
    @stack('css')
    <title></title>
</head>
<body>

    <section class="container-fluid">

        @yield('content')

    </section>

    <script src="http://localhost/blog5.7/public/js/app.js"></script>
    @stack('css')
</body>
</html>
