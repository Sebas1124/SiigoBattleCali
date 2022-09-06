@extends('layouts.Main')


@section('css')

@stop

@section('content')



@stop


@section('js')

<script>
    $(document).ready(function(){
        setTimeout(refrescar, 10000);
    });
    function refrescar(){
        location.reload();
    }
    
    </script>

@stop