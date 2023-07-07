<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script> --}}

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <h1>@yield("title")</h1>
    <nav>
        <a href="{{ route("home.index") }}">Strona główna</a>
        <a href="{{ route("todoapp.index") }}">To do App</a>
        <a href="{{ route("blog.index") }}">Blog</a>
    </nav>

    <main>
        @yield("content")        
    </main>

 
</body>
</html>