<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SASS -->
    <link rel="stylesheet" href="css/app.css" />

    <!-- JS -->
    <script defer src="'js/app.js"></script>

    <title>Movies</title>
</head>
<body>
    <header>
        <div class="container">
            <ul class="d-flex">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('movies.index')}}">Movies</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="container pt-5">
            @yield('main-content')
        </div>
    </main>
</body>
</html>