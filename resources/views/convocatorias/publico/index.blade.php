@extends('layouts.app')

@section('content')
    <h3>Listar Convocatoria</h3>
<div class="justify-content-center">
    @foreach ($convocatorias as $convocatoria)
        <article class="article p-4 m-4 z-depth-1">
            <h2 class="article__title">{{ $convocatoria->titulo }}</h2>
            <div class="article__date">{{ $convocatoria->fechaIni }} - {{ $convocatoria->fechaFin }}</div>
            <div class="article__content">{{ $convocatoria->description }}</div>
            
            @can('postulations.create')
                <td class="text-center" width="10px">
                    <form action="{{ route('postulations.apply', $convocatoria->id) }}" method="GET">
                        <button class="btn btn-danger px-3 btn-sm" type="button" onclick="if(confirm('Deseas continuar?')){ this.form.submit();}">Postularme</button>
                    </form>
                </td>
            @endcan
      </article>
    @endforeach
</div>
@endsection