<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config("app.name") }}</title>

        @vite([
            "resources/css/bootstrap.min.css",
            "resources/css/app.css",
            "resources/js/jquery-3.5.1.slim.min.js",
            "resources/js/bootstrap.bundle.min.js",
            "resources/js/app.js"
        ])
    </head>
    <body>
        @include('sweetalert::alert')

        <x-navbar />

        @yield("content")

    </body>
</html>
