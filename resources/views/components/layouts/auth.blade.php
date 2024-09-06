<!DOCTYPE html>
<html lang="en">

<head>
    <!-- FavIcon -->
    <link rel="shortcut icon" href="{{ asset('img/logo/logo-topic-light.webp') }}" type="image/x-icon">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/input.css') }}">
    <script src="jquery.js"></script>


    <!-- Vendor CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/2255bb0dfd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <title>Topic Indonesia</title>
    @vite('resources/css/app.css')
</head>

<body>
    @yield('content')


    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
