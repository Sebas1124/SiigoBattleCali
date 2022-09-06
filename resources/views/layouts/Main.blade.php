<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    @yield('css')

    <title>Siigo Battle Cali</title>
</head>
<body>

    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="{{ route('home') }}" class="nav__logo">
                <img src="{{ asset('img/siigologo.png') }}" alt="" class="nav__logo-img">
                Siigo Battle Cali
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{ route('main')}}#home" class="nav__link active-link">Inicio</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{  route('main') }}#about" class="nav__link">Acerca de</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route('main') }}#play" class="nav__link">Jugar</a>
                    </li>
                    @if (Route::has('login'))
                    @auth
                    <li class="nav__item"><a href="{{ route('dashboard') }}" class="nav__link">Admin</a></li>
                    @else
                    <li class="nav__item"><a href="{{ route('login') }}" class="nav__link">Inicia Sesión</a></li>
                    
                    @if (Route::has('register'))
                    <li class="nav__item"><a href="{{ route('register') }}" class="ml-4 nav__link">Registrate</a></li>
                    @endif
                    @endauth
                    @endif
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x' ></i>
                </div>
            </div>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-grid-alt'></i>
            </div>
        </nav>
    </header>

    @yield('content')




     <!--==================== LOGOS ====================-->
     <section class="logo section">
        <div class="logo__container container grid">
            <img src="{{ asset('img/siigologo.png') }}" alt="" class="logo__img">
            <img src="{{ asset('img/Sena_Colombia_logo.svg.png') }}" alt="" class="logo__img">
            <img src="{{ asset('img/senasoft.png') }}" alt="" class="logo__img">
            <img src="{{ asset('img/LogoMDT.png') }}" alt="" class="logo__img">
        </div>
    </section>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__container container">
            <h1 class="footer__title">Siigo Battle Cali.</h1>

            <div class="footer__content grid">
                <div class="footer__data">
                    <p class="footer__description">
                        Subscribe
                    </p>

                    <div class="footer__newsletter">
                        <input type="email" placeholder="Your email address" class="footer__input" disabled>
                        <button class="footer__button">
                            <i class='bx bx-right-arrow-alt' ></i>
                        </button>
                    </div>
                </div>

                <div class="footer__data">
                    <h2 class="footer__subtitle">
                        Address
                    </h2>
                    <p class="footer__information">
                        Calle 12361982. <br>
                        Cali, Colombia 🟡🔵🔴
                    </p>
                </div>

                <div class="footer__data">
                    <h2 class="footer__subtitle">
                        Contact
                    </h2>
                    <p class="footer__information">
                        +57 3115440812 <br>
                        sebas.rosero.lopez@gmail.com
                    </p>
                </div>

                <div class="footer__data">
                    <h2 class="footer__subtitle">
                        Office
                    </h2>
                    <p class="footer__information">
                        Monday - Friday <br>
                        7AM - 5PM
                    </p>
                </div>
            </div>

            <div class="footer__group">
                <ul class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-facebook' ></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-instagram' ></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-twitter' ></i>
                    </a>
                </ul>

                <span class="footer__copy">
                    <a href="http://sebasportafolio.com" target="_blank">&#169; Sebastián Rosero Lopez y Jorge Elias Santos Todos los derechos reservados</a>
                </span>
            </div>
        </div>
    </footer>


    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt'></i>
    </a>

    <!--=============== MIXITUP FILTER ===============-->
    <script src="{{ asset('js/mixitup.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('js')

    
</body>
</html>