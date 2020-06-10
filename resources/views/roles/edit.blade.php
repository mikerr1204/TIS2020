@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Editar Rol</h3>
    </div>
</div>
<div class="row justify-content-md-center m-0" style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    <div class="col col-lg-6 col-sm-12">
        @include('opcion.error')
        <form action="{{ route('roles.update', $role->id) }}" method="POST" class="text-center">
            {{ csrf_field() }}
            {{ @method_field('PUT') }}
            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="name" value="{{$role->name}}" required autofocus>
                        <label for="materialRegisterFormName">Nombre *</label>
                    </div>
                </div>
                <div class="col">
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormNDescripción" class="form-control" aria-describedby="materialRegisterFormNDescripciónHelpBlock" name="description" value="{{$role->description}}" required autofocus>
                        <label for="materialRegisterFormNDescripción">Descripción *</label>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <label><strong>Asignar permisos</strong></label>
            </div>
            <div class="form-row">
                <div class="col d-flex justify-content-center">
                    <div class="custom-control custom-checkbox d-flex flex-row">
                        <input type="checkbox" class="custom-control-input" id="customCheck2" name='special' value="no-access">
                        <label class="custom-control-label" for="customCheck2">Ningún Acceso (Visitante)</label>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <label><strong>Asignar permisos especiales</strong></label>
            </div>
            <div class="justify-content-center">
                <div>
                    <label class="mdb-main-label">Escoger Pribilegios (Elección multiple Ctrl+Click)</label>
                    <select class="custom-select" id="permissions[]" name="permissions[]" multiple size="10">
                        @foreach ($permissions as $permission)
                            <option value="{{$permission->id}}">{{$permission->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
        </form>
    </div>
</div>
@endsection