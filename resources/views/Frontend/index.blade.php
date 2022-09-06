@extends('layouts/Main')

@section('content')


<!--==================== ESPECIALTY ====================-->
<div class="specialty section container" id="about">
    <div class="specialty__container">
        <div class="specialty__box">
            <h2 class="section__title">
                Disfruta de nuestro espacio de descanso laboral
            </h2>

            <div>
                <a href="#" class="button specialty__button">Ver más</a>
            </div>
        </div>

        <div class="specialty__category">
            <div class="specialty__group specialty__line">
                <img src="{{ asset('img/specialty1.png') }}" alt="" class="specialty__img">

                <h3 class="specialty__title">Relajate del trabajo</h3>
                <p class="specialty__description">
                    Nosotros nos encargamos de desarrollar un juego para que compartas con tus amigos y te distraigas un rato de tus labores
                </p>
            </div>

            <div class="specialty__group specialty__line">
                <img src="{{ asset('img/specialty2.png') }}" alt="" class="specialty__img">

                <h3 class="specialty__title">Recomendado por Psicologos</h3>
                <p class="specialty__description">
                    Según el área de recursos humanos, nuestros trabajadores deben tener pausas activas
                </p>
            </div>

            <div class="specialty__group">
                <img src="{{ asset('img/specialty3.png') }}" alt="" class="specialty__img">

                <h3 class="specialty__title">Disfrutalo desde donde quieras</h3>
                <p class="specialty__description">
                    Disfruta de este juego desde tu celular, tablet o computador
                </p>
            </div>
        </div>
    </div>
</div>


<!--==================== Games ====================-->
<section class="quality section" id="play">
    <div class="quality__container container">
        <h2 class="section__title">
            Disfruta de nuestro juego
        </h2>

        <div class="quality__content grid">
            <div class="quality__images">
                <img src="{{ asset("img/siigologo.png") }}" alt="" class="quality__img-big">
            </div>

            <div class="quality__data">
                <h1 class="quality__title">Juego de cartas</h1>
                <h2 class="quality__price">Juega con tus amigos</h2>
                <span class="quality__special">Ahora</span>
                <p class="quality__description">
                    {{-- {{ $most_sales->description }} --}}
                    hola
                </p>

                <div class="quality__buttons">
                    <form action="{{ route('main') }}" method="post">
                        @csrf
                        <button class="button">
                            Juega AHORA!
                        </button>
                    </form>

                    <a href="#" class="quality__button">
                        Ver más
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@stop

@section('js')

@stop