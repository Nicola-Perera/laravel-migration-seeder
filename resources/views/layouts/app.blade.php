<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Travels</title>

        <!-- styles -->
        <link rel="stylesheet" href="../../sass/app.scss">

        <!-- script -->
        <script src="{{asset('js/app.js')}}" defer></script>
    </head>
    <body>
        <!-- Header -->
        @include('partials.header')

        <!-- Main -->
        <main id="site_main">@yield('content')</main>

        <!-- Footer -->
        @include('partials.footer')
    </body>
</html>