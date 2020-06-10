@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Editar Usuario</h3>
    </div>
</div>
<div class="row justify-content-md-center m-0" style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    <div class="col col-lg-6 col-sm-12">
        @include('opcion.error')
        <form action="{{ route('users.update', $user->id) }}" method="POST" class="text-center">
            {{ csrf_field() }}
            {{ @method_field('PUT') }}
            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                    <input type="text" id="materialRegisterFormName" class="form-control" name='name' value="{{$user->name}}" required>
                    <label for="materialRegisterFormName">Nombre</label>
                    </div>
                </div>
                <div class="col">
                    <div class="md-form">
                    <input type="text" id="materialRegisterFormApellido" class="form-control" name='apellido' value="{{$user->apellido}}" required>
                    <label for="materialRegisterFormApellido">Apellido</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                    <input type="text"  id="materialRegisterFormSis" class="form-control" name='sis' value="{{$user->sis}}" required>
                    <label for="materialRegisterFormSis">Codigo SIS</label>
                    </div>
                </div>
                <div class="col">
                    <div class="md-form">
                    <input type="text" id="materialRegisterFormCi" class="form-control" name='ci' value="{{$user->ci}}" required>
                    <label for="materialRegisterFormCi">CI</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                        <input type="email" id="materialRegisterFormEmail" class="form-control" aria-describedby="materialRegisterFormEmailHelpBlock" name='email' value="{{$user->email}}" required autofocus>
                        <label for="materialRegisterFormEmail">Email</label>
                    </div>
                </div>
                <div class="col">
                    <div class="md-form">
                        <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" name='password' value="{{$user->password}}" required>
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
</div>
@endsection