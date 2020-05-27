@extends('layouts.app')

@section('content')
<h3>Lista de convocatorias inscritas</h3>
<div class="d-flex justify-content-center">
    @foreach ($formularios as $formulario)
        <article class="article p-4 m-4 z-depth-1">
            <h2 class="article__title">{{ $formulario->nombre }}</h2>
            <div class="article__date">{{ $formulario->carrera }}</div>
      </article>
    @endforeach
</div>
@endsection