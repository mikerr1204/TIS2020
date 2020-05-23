@extends('layouts.app')

@section('content')
<h3>Detalles de Usuario</h3>
<div class="d-flex justify-content-center">
    <table class="table table-bordered mt-3">
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
</div>
@endsection