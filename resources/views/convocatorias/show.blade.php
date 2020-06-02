@extends('layouts.app')

@section('content')
<h2>Detalles de Convocatoria</h2>

<div class="d-flex justify-content-center">

    @can('documentos.show')
    <a href="{{ route('documentos.index', $convocatoria->id) }}">
        <button type="button" class="btn btn-primary" type="submit">
            Documentos
        </button>
    </a>
    @endcan

    @can('meritos.show')
        <a href="{{ route('meritos.index', $convocatoria->id) }}">
            <button type="button" class="btn btn-info" type="submit">
                Meritos
            </button>
        </a>
    @endcan

    @can('requisitos.show')
        <a href="{{ route('requisitos.index', $convocatoria->id) }}">
            <button type="button" class="btn btn-secondary" type="submit">
                Requisitos
            </button>
        </a>
    @endcan

</div>

<div class="container">
    <br>

    <h3 style="text-align: center">{{ $convocatoria->titulo }}</h3>
    <p><strong>Descripcion: </strong>{{ $convocatoria->description }}</p>

    <h3>Requisitos</h3>
    <p>Para poder participar en esta convocatoria, usted debe tener:</p>
    <ul>
        @foreach ($requisitos as $requisito)
            <li>{{ $requisito->detalles }}</li>
        @endforeach
    </ul>
    <br>

    <h3>Documentos</h3>
    <p>Para poder participar en esta convocatoria, usted debe presentar:</p>
    <ul>
        @foreach ($documentos as $documento)
            <li>{{ $documento->detalles }}</li>
        @endforeach
    </ul>
    <br>

    <h3>Meritos</h3>
    <p>Opcionalmente, usted puede presentar:</p>
    <ul>
        @foreach ($meritos as $merito)
            <li>{{ $merito->detalles }}</li>
        @endforeach
    </ul>
    <br>

</div>

@endsection