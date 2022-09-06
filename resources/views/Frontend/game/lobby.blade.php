@extends('layouts.Main')


@section('css')

<link rel="stylesheet" href="{{ asset('css/lobby.css') }}">

@stop

@section('content')

<section class="lobby">
    <header class="lobby__title">
        <div class="title">
            <h1>Bienvenido a Siigo Battle Cali</h1>
            <hr>
        </div>
    </header>
    
    <div class="lobby__container">
        <div class="display__game">
            <div class="display__container">
                <div class="display__card">
                    <h1>Crea una sala</h1>
                    <p>Juega con tus amigos!</p>
                    <small>Min: 2 jugadores, Max: 7 jugadores</small>
                    
                    <div>
                        <a href="{{ route('lobby.create') }}" class="button">Crear sala</a>
                    </div>
                    <div>
                        <form action="{{ route('lobby.search') }}" method="get">
                            <input type="text" placeholder="Ingrese numero de sala" name="lobby">
                            <button type="submit" class="button">Buscar sala</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

@stop


@section('js')

@stop