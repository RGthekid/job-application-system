<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Your App</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- You can add more styles or scripts here -->

</head>
<body>

    <div class="container mt-4">
        <h1>Your App</h1>

        <nav>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aplikanti.index') }}">Aplikanti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kualifikimi.index') }}">Kualifikimi</a>
                </li>
            </ul>
        </nav>

        <hr>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- You can add more scripts here -->

</body>
</html>
