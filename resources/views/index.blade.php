<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/scss/app.scss', 'resources/js/app.js')
    @include('components.head')
    @include('components.listData')
    <title>@yield('page-title')</title>
</head>
<body>
    @yield('navbar')
    <header>
        <h1 class="text-primary fs-1">
            {{ $titlePage }}
        </h1>
    </header>
    <main>
        @yield('file-data')
    </main>
    @yield('footer')
</body>
</html>