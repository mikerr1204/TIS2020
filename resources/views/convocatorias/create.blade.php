@extends('layouts.app')

@section('content')
<h3>Crear Convocatoria</h3>
<div class="d-flex justify-content-center">
    <form action="{{ route('convocatorias.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col">
                <div class="md-form mb-1">
                    <input type="text"  id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="titulo" value="{{ old('titulo') }}" required>
                    <label for="materialRegisterFormName">Titulo *</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form">
                    <textarea type="text" id="message" rows="2" class="form-control md-textarea" name="description" value="{{ old('description') }}" required></textarea>
                    <label for="message">Descripción *</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form mb-1">
                    <input type="date"  id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="fechaIni" value="{{ old('fechaIni') }}" required>
                    <label for="materialRegisterFormName">Fecha de inicio *</label>
                </div>
            </div>
            <div class="col">
                <div class="md-form mb-1">
                    <input type="date"  id="materialRegisterFormNDescripción" class="form-control" aria-describedby="materialRegisterFormNDescripciónHelpBlock" name="fechaFin" value="{{ old('fechaFin') }}" required>
                    <label for="materialRegisterFormNDescripción">Fecha final *</label>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar</button>
        </div>
    </form>
</div>
@endsection