<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Цифровой лицей' }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="col-3">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ 'Цифровой лицей' }}
                    </a>
                </div>
                <div class="col-3 text">
                    <a class="navbar-brand" href="{{ url('/students') }}">
                        {{ 'Ученикам' }}
                    </a>
                </div>
                <div class="col-3 text">
                    <a class="navbar-brand" href="{{ url('/personal') }}">
                        {{ 'Сотрудникам' }}
                    </a>
                </div>

                <div class="col-3 text">
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>


            </div>
        </nav>

    </div>
</body>
</html>
