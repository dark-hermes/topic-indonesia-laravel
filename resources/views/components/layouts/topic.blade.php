<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <script src="https://kit.fontawesome.com/2255bb0dfd.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{ asset('css/input.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>
    <body>
        @livewire('topic-indonesia.navbar')

        {{ $slot }}

        @livewire('topic-indonesia.footer')
    </body>
</html>
