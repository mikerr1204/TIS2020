@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center primary-color">
    <h5>
        @foreach (Auth::user()->roles as $role)
            Bienvenido {{$role->name}}
        @endforeach
    </h5>
</div>
<div class="p-5">
    <div>
        <h4>
            Bienvenido {{ Auth::user()->name }}
        </h4>
    </div>
    <div class="">
        <p>
            Bienvenido a la plataforma de control de laboratorio.
        </p>
        @foreach (Auth::user()->roles as $role)
            <p>
                Bienvenido  {{$role->name}} 
                <ul>
                    @if ($role->special == 'all-access')
                        Usted Tiene Control de Toda la Plataforma
                    @else
                        @if ($role->special == 'no-access')
                            Usted Tiene Control Limitado la Plataforma
                        @else
                            @if ($role->special == NULL)
                                @foreach ($role->permissions as $permission)
                                    <li>{{$permission->name}}: {{$permission->description}}</li>
                                @endforeach
                            @endif
                        @endif
                    @endif
                </ul>    
            </p>
        @endforeach
    </div>
</div>
@endsection
