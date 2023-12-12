<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ai eszközök listája</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('index')}}">Kategóriák</a></li>
                <li><a href="{{route('create')}}">Újkategoria</a></li>
            </ul>
        </nav>
    </header> 
    <main>
        @yield('content')
</main>
    <footer>

    </footer>  
    
</body>
</html>