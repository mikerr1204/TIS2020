@extends('layouts.app')

@section('content')
<h3>Detalles de Convocatoria</h3>
<div class="d-flex justify-content-center">
    @can('documentos.show')
    <form action="{{ route('documentos.index', $convocatoria->id) }}" method="GET">
        <button type="button" class="btn btn-primary" type="submit">Documentos</button>
    </form>
    @endcan
    <form action="{{ route('meritos.index', $convocatoria->id) }}" method="GET">
        <button type="button" class="btn btn-info" type="submit">Meritos</button>
    </form>
    <button type="button" class="btn btn-secondary" type="submit">Requisitos</button>
</div>
<div class="d-flex justify-content-center">
    <article class="article p-4 m-4 z-depth-1">
        <h2 class="article__title">{{ $convocatoria->titulo }}</h2>
        <div class="article__date">{{ $convocatoria->fechaIni }} - {{ $convocatoria->fechaFin }}</div>
        <div class="article__content">{{ $convocatoria->description }}</div>
    </article>
</div>
@endsection