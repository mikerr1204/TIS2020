<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-weight-bold">Crear Materia</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body mx-3">
    <form action="{{ route('materias.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col">
                <div class="md-form">
                    <input type="text"  id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="name" value="{{ old('name') }}" required>
                    <label for="materialRegisterFormName">Nombre de Materia *</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form">
                    <input type="text"  id="materialRegisterFormCod" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="codigo" value="{{ old('codigo') }}" required>
                    <label for="materialRegisterFormCod">Codigo de Materia *</label>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar</button>
        </div>
    </form>
</div>