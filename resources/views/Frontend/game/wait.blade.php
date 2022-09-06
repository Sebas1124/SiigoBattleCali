@extends('layouts.Main')

@section('css')

<link rel="stylesheet" href="{{ asset('css/wait.css') }}">
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
                    <table>
                        <thead>
                            <tr>Nombre</tr>
                        </thead>
                        <tbody>
                            @foreach ($details as $detail)
                                <th>Jugador {{ $count_player + 1 }}: {{ $detail->name }}</th>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</section>


@stop


@section('js')

@stop
