<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-weight-bold">Crear Documento a Presentar</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body mx-3">
    <form action="{{ route('documentos.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col">
                <label for="roles">Convocatoria</label>
                <select class="custom-select" id="convocatoria_id" name="convocatoria_id">
                    <option value="{{$convocatoria->id}}"> {{$convocatoria->titulo}} </option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form">
                    <textarea type="text" id="message" rows="2" class="form-control md-textarea" name="descripcion" value="{{ old('descripcion') }}" required></textarea>
                    <label for="message">Descripcion *</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <select class="browser-default custom-select" name="importancia">
                    <option selected value="No Obligatorio">No Obligatorio</option>
                    <option value="Obligatorio">Obligatorio</option>
                </select>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar</button>
        </div>
    </form>
</div>