@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Lista de postulaciones</h3>
    </div>
</div>
<div style="position: relative; height: 460px; margin-top: .5rem; overflow: auto;">
    @foreach ($postulations as $postulation)
        <article class="article p-2 m-2 z-depth-1">
            <h2 class="article__title">{{ $postulation->convocatoria->titulo }}</h2>
            <div class="article__date">{{ $postulation->convocatoria->fechaIni }} - {{ $postulation->convocatoria->fechaFin }}</div>
            <div class="article__content">{{ $postulation->convocatoria->description }}</div>
            <div class="d-flex">
                @can('postulations.show')
                    <form action="{{ route('postulations.show', $postulation->id) }}" method="GET">
                        <button class="btn btn-info px-3 btn-sm" type="submit">Archivos de Convocatoria</button>
                    </form>
                @endcan
            </div>
      </article>
    @endforeach
</div>
@endsection