<!doctype html>
<html>
    <head>
        <title>{{ $title ?? 'Dog Manager' }}</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>


    </head>
    <body class="bg-[#FAF6E9]">
        <div class="p-15">
            @yield('content')
        </div>

    </body>
</html>