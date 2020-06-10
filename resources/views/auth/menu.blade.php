<div id="list-example" class="list-group">
    @can('roles.index')
        <a class="list-group-item list-group-item-action" href="{{ route('roles.index') }}">
            <span class="text-left">
                <i class="fas fa-address-card "></i> Roles
            </span>
        </a>
    @endcan
    @can('users.index')
        <a class="list-group-item list-group-item-action" href="{{ route('users.index') }}">
            <span class="text-left">
                <i class=" fas fa-user"></i> Usuarios
            </span>
        </a>
    @endcan
    @can('convocatorias.index')
        <a class="list-group-item list-group-item-action" href="{{ route('convocatorias.index') }}">
            <span class="text-left">
                <i class=" fas fa-clipboard"></i> Convocatoria
            </span>
        </a>
    @endcan
    @can('materias.index')
        <a class="list-group-item list-group-item-action" href="{{ route('materias.index') }}">
            <span class="text-left">
                <i class="fas fa-pen-alt"></i> Materia
            </span>
        </a>
    @endcan
    @can('requerimientos.index')
        <a class="list-group-item list-group-item-action" href="{{ route('requerimientos.index') }}">
            <span class="text-left">
                <i class="fas fa-list-ol"></i> Requerimientos
            </span>
        </a>
    @endcan
    @can('requisitos.index')
        <a class="list-group-item list-group-item-action" href="{{ route('requisitos.index') }}">
            <span class="text-left">
                <i class="fas fa-list-ul"></i> Requisitos
            </span>
        </a>
    @endcan
    @can('documentos.index')
        <a class="list-group-item list-group-item-action" href="{{ route('documentos.index') }}">
            <span class="text-left">
                <i class="fas fa-file"></i> Documentos a Presentar
            </span>
        </a>
    @endcan
    @can('fechas.index')
        <a class="list-group-item list-group-item-action" href="{{ route('fechas.index') }}">
            <span class="text-left">
                <i class="fas fa-calendar-alt"></i> Fechas de Eventos
            </span>
        </a>
    @endcan
    @can('meritos.index')
        <a class="list-group-item list-group-item-action" href="{{ route('meritos.index') }}">
            <span class="text-left">
                <i class="fas fa-paper-plane"></i> Meritos
            </span>
        </a>
    @endcan
    @can('postulantes.index')
        <a class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapsePost" aria-expanded="true" aria-controls="collapsePost">
            <span class="text-left">
                <i class=" fas fa-user"></i> Postulante
            </span>
        </a>
        <nav class="nav nav-pills flex-column collapse" id="collapsePost">
            <a class="list-group-item list-group-item-action" href="{{ route('postulations.index') }}">
                <span class="text-left pl-1">
                    <i class="fas fa-user-graduate"></i> Mis Postulaciones
                </span>
            </a>
        </nav>
    @endcan
</div>