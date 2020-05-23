@extends('layouts.app')

@section('content')
<h3>Lista de postulaciones</h3>
<div class="d-flex justify-content-center">
    @foreach ($postulations as $postulation)
        <article class="article p-4 m-4 z-depth-1">
            <h2 class="article__title">{{ $postulation->convocatoria->titulo }}</h2>
            <div class="article__date">{{ $postulation->convocatoria->fechaIni }} - {{ $postulation->convocatoria->fechaFin }}</div>
            <div class="article__content">{{ $postulation->convocatoria->description }}</div>
      </article>
    @endforeach
</div>
@endsection