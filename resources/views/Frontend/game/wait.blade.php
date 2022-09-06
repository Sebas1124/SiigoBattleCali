@extends('layouts.Main')

@section('css')

<link rel="stylesheet" href="{{ asset('css/wait.css') }}">

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
                            <tr>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="players">
                                @foreach ($details as $detail)
                                <td>Jugador {{ $count_player ++ }}: {{ $detail->name }}</td>
                                @endforeach
                            </tr>
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
