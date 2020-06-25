<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-weight-bold">Crear nuevo Puntaje</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body mx-3">
    <form action="{{ route('puntajes.store'), $convocatoria->id }}" method="POST">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col">
                <div class="md-form">
                    <input type="text"  id="materialRegisterFormDescripcion" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="descripcion" value="{{ old('descripcion') }}" required>
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
        <div class="text-center">
            <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar</button>
        </div>
    </form>
</div>