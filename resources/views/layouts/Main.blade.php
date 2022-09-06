<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Siigo Battle Cali</title>
</head>
<body>

    <section class="navbar">
        <nav class="container">
            <div class="nav__content">

                <div class="nav__logo">
                    <a href="{{ route('main') }}"><img src="{{ asset('img/siigologo.png') }}" alt=""></a>
                </div>

                <div class="nav__links">
                    <ul class="items">
                        <li class="nav__item">inicio</li>
                        <li class="nav__item">Acerca de</li>
                        <li class="nav__item">Login</li>
                        <li class="nav__item">Registro</li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    
</body>
</html>