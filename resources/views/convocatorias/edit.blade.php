@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Editar Convocatoria</h3>
    </div>
</div>
<div class="row justify-content-md-center m-0" style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    <div class="col col-lg-6 col-sm-12">
        @include('opcion.error')
        <form action="{{ route('convocatorias.update', $convocatoria->id) }}" method="POST" class="text-center">
            {{ csrf_field() }}
            {{ @method_field('PUT') }}
            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="titulo" value="{{$convocatoria->titulo}}" required autofocus>
                        <label for="materialRegisterFormName">Titulo *</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                        <textarea type="text" id="message" rows="2" class="form-control md-textarea" name="description" required>{{$convocatoria->description}}</textarea>
                        <label for="message">Descripción *</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                        <input type="date" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="fechaIni" value="{{$convocatoria->fechaIni}}" required autofocus>
                        <label for="materialRegisterFormName">Fecha de inicio *</label>
                    </div>
                </div>
                <div class="col">
                    <div class="md-form">
                        <input type="date" id="materialRegisterFormNDescripción" class="form-control" aria-describedby="materialRegisterFormNDescripciónHelpBlock" name="fechaFin" value="{{$convocatoria->fechaFin}}" required autofocus>
                        <label for="materialRegisterFormNDescripción">Fecha final *</label>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
        </form>
    </div>
</div>
@endsection