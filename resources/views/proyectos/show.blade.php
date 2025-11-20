@extends('layouts.master')

@section('content')


    <div class="row m-4">

        <div class="col-sm-4">

            <img src="/images/mp-logo.png" style="height: 20em"/>

        </div>
        <div class="col-sm-8">
            <h2>{{ $proyecto['nombre'] }}</h2>
            <br>
            <h1>ID del Docente: {{ $proyecto['docente_id']}}</h1>
            <br>
            <ul>
                <li>Fecha de inicio del proyecto: {{ $proyecto['metadatos']['fecha_inicio'] }}</li>
                <li>Fecha de fin del proyecto: {{ $proyecto['metadatos']['fecha_fin'] }}</li>
                <li>Calificación del proyecto: {{ $proyecto['metadatos']['calificacion'] }}</li>
            </ul>
        </div>
        <!-- En caso de estar suspenso (calificacion < 5) aparecerá el estado “Proyecto suspenso” y un botón azul para “Aprobar proyecto”. -->
        @if ($proyecto['metadatos']['calificacion'] < 5)
            <div style="text-align: center; align-content: center">
                <h2>Estado del proyecto: <span>Proyecto suspenso</span></h2>
                <button class="btn btn-success" style="background-color: cadetblue">Aprobar proyecto</button>
            </div>
            @else
            <div style="text-align: center; align-content: center">
                <h2>Estado del proyecto: <span>Proyecto aprobado</span></h2>
                <button class="btn btn-danger">Suspender proyecto</button>
            </div>
        @endif
    </div>

@endsection

