<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>

    <header>
        <div>
            <header>
                <h1>Blog Personal</h1>
            </header>
            <nav>
                <ul>
                    <li><a href="">Inicio</a></li>
                    <li><a href="">Crear Cuenta</a></li>
                    <li><a href="">Ingresar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        @yield('content')
    </main>

    <footer>

    </footer>
</body>
</html>