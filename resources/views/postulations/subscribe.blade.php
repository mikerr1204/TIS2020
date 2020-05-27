@extends('layouts.app')

@section('content')
<h3>Inscribirse a una convocatoria</h3>
<div class="d-flex justify-content-center">
    <form action="{{ route('postulantes.convocatoria.subscribe') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col">
                <div class="md-form mb-1">
                    <input type="text" id="nombreCompleto" class="form-control" aria-describedby="nombre" name="nombreCompleto" value="{{ old('nombre') }}" required>
                    <label for="nombreCompleto">Nombre completo *</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form">
                    <textarea type="text" id="carrera" class="form-control" name="carrera" value="{{ old('carrera') }}" required></textarea>
                    <label for="carrera">Carrera *</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form mb-1">
                    <input type="file" class="form-control" id="documentos" name="documentos" required>
                    <label for="documentos">Documentos *</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form mb-1">
                    <input type="file" class="form-control" id="meritos" name="meritos" required>
                    <label for="meritos">Meritos *</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form mb-1">
                    <input type="file" class="form-control" id="requisitos" name="requisitos" required>
                    <label for="requisitos">Requisitos *</label>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar formulario</button>
        </div>
    </form>
</div>
@endsection