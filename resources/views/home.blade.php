<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Stylesheet -->
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <div class="text-center">
        <h1 class="font-bold text-3xl text-red-700 md:text-green-700">this is my h1 text</h1>
        <text-green-700></text-green-700>
    </div>
    <div class="ml-4 text-center text-sm text-gray-700 mr-2 dark:text-gray-400 sm:text-right sm:ml-0">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>
</body>

</html>
