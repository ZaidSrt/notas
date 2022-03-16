<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Zaid') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="bg-black-70">
    <div id="app">
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 bg-black-80">
                        <div class="my-2">
                            <h1 class="text-center color-white">Zaid</h1>
                        </div>
                    </div>
                    <div class="col-md-12 my-4">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>