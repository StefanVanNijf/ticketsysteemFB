<!DOCTYPE hmtl>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body>
    @include("layouts.header")
    </body>
</html>
