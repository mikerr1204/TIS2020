@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Editar Puntaje</h3>
    </div>
</div>
<div class="row justify-content-md-center m-0" style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    <div class="col col-lg-6 col-sm-12">
        @include('opcion.error')
        <form action="{{ route('puntajes.update', $puntaje->id) }}" method="POST" class="text-center">
            {{ csrf_field() }}
            {{ @method_field('PUT') }}
            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormDescripionHelpBlock" name="descripcion" value="{{$puntaje->descripcion}}" required autofocus>
                        <label for="materialRegisterFormName">Descripcion *</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormValor" class="form-control" name='valor' value="{{ old('valor') }}" required>{{$puntaje->valor}}
                        <label for="materialRegisterFormCi">Valor *</label>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
        </form>
    </div>
</div>
@endsection