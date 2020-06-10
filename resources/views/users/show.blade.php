@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Detalles de Usuario</h3>
    </div>
</div>
<div style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    <table class="table table-sm table-hover table-bordered">
        <tbody>
            <tr class="">
                <th><strong>Nombre</strong></th>
                <th>{{$user->name}}</th>
            </tr>
            <tr class="">
                <th><strong>Apellido</strong></th>
                <th>{{$user->apellido}}</th>
            </tr>
            <tr class="">
                <th><strong>Email</strong></th>
                <th>{{$user->email}}</th>
            </tr>
            <tr class="">
                <th><strong>Codigo Sis</strong></th>
                <th>{{$user->sis}}</th>
            </tr>
            <tr class="">
                <th><strong>CI</strong></th>
                <th>{{$user->ci}}</th>
            </tr>
            <tr class="">
                <th><strong>Rol</strong></th>
                <th>
                    @foreach ($user->roles as $rol)
                        <li>{{$rol->name}}</li>
                    @endforeach
                </th>
            </tr>
        </tbody>
    </table>
</div>
@endsection