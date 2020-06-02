@extends('layouts.app')

@section('content')
<h3>Detalles del Requisito</h3>
<div class="d-flex justify-content-center">
    <article class="article p-4 m-4 z-depth-1">
        <h2 class="article__title">Descripcion del Requisito</h2>
        <div class="article__content">{{ $requisitos->detalles }}</div>
    </article>
</div>
@endsection