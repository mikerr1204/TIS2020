@extends('layouts.app')

@section('content')
<h3>Editar Usuario</h3>
<div class="d-flex justify-content-center">
    <form action="{{ route('users.update', $user->id) }}" method="POST" class="text-center">
        {{ csrf_field() }}
        {{ @method_field('PUT') }}
        <div class="form-row">
            <div class="col">
                <div class="md-form mt-3 mb-3">
                <input type="text" id="materialRegisterFormName" class="form-control" name='name' value="{{$user->name}}" required>
                <label for="materialRegisterFormName">Nombre</label>
                </div>
            </div>
            <div class="col">
                <div class="md-form mt-3 mb-3">
                <input type="text" id="materialRegisterFormApellido" class="form-control" name='apellido' value="{{$user->apellido}}" required>
                <label for="materialRegisterFormApellido">Apellido</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form mt-3 mb-3">
                <input type="text"  id="materialRegisterFormSis" class="form-control" name='sis' value="{{$user->sis}}" required>
                <label for="materialRegisterFormSis">Codigo SIS</label>
                </div>
            </div>
            <div class="col">
                <div class="md-form mt-3 mb-3">
                <input type="text" id="materialRegisterFormCi" class="form-control" name='ci' value="{{$user->ci}}" required>
                <label for="materialRegisterFormCi">Apellido</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form mb-1">
                    <input type="email" id="materialRegisterFormEmail" class="form-control" aria-describedby="materialRegisterFormEmailHelpBlock" name='email' value="{{$user->email}}" required autofocus>
                    <label for="materialRegisterFormEmail">Email</label>
                </div>
            </div>
            <div class="col">
                <div class="md-form mb-1">
                    <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" name='password' value="{{$user->ci}}" required>
                    <label for="materialRegisterFormPassword">Password</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="roles">Rol</label>
                <select class="custom-select" id="roles" name="roles">
                    @foreach ($roles as $role)
                        <option value="{{$role->id}}"> {{$role->name}} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
    </form>
</div>
@endsection