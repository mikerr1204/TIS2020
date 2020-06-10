@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Editar Evento</h3>
    </div>
</div>
<div class="row justify-content-md-center m-0" style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    <div class="col col-lg-6 col-sm-12">
        @include('opcion.error')
        @include('opcion.validacion')
        @include('opcion.confirmacion')
        <form action="{{ route('meritos.update', $merito->id) }}" method="POST" class="text-center">
            {{ csrf_field() }}
            {{ @method_field('PUT') }}
            <div class="form-row">
                <div class="col">
                    <label for="roles">Convocatoria</label>
                    <select class="custom-select" id="convocatoria_id" name="convocatoria_id">
                        <option value="{{$merito->convocatoria->id}}"> {{$merito->convocatoria->titulo}} </option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <select class="browser-default custom-select" name="tipo">
                        <option selected value="Rendimiento Academico">Rendimiento Academico</option>
                        <option value="Experiencia General">Experiencia General</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                        <input type="text"  id="materialRegisterFormclase" class="form-control" aria-describedby="materialRegisterFormclaseHelpBlock" name="clase" value="{{ $merito->clase }}" required>
                        <label for="materialRegisterFormclase">Clase *</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                        <textarea type="text" id="message" rows="2" class="form-control md-textarea" name="detalle" required> {{ $merito->detalle }}</textarea>
                        <label for="message">Detalle *</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                        <input type="number"  id="materialRegisterFormpuntos" class="form-control" aria-describedby="materialRegisterFormpuntosHelpBlock" name="puntos" value="{{ $merito->puntos }}" required>
                        <label for="materialRegisterFormpuntos">Puntaje *</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <select class="browser-default custom-select" name="importancia">
                        <option selected value="No Obligatorio">No Obligatorio</option>
                        <option value="Obligatorio">Obligatorio</option>
                    </select>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
            </div>
        </form>
    </div>
</div>
@endsection