@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Editar Item</h3>
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
                    <label for="valor">Valor del puntaje *</label>
                    <select id="valor" name="valor">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
        </form>
    </div>
</div>
@endsection