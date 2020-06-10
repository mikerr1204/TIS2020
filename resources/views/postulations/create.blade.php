<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-weight-bold">Postularme a Convocatoria</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body mx-3">
    <form action="{{ route('postulations.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col">
                <label for="roles">Convocatoria</label>
                <select class="custom-select" id="convocatoria_id" name="convocatoria_id">
                    <option value="{{$convocatoria->id}}"> {{$convocatoria->titulo}} </option>
                </select>
            </div>
        </div>
        {{-- <div class="form-row">
            <div class="col">
                <div class="md-form">
                    <input type="text"  id="materialRegisterFormCodigo" class="form-control" aria-describedby="materialRegisterCodigoNameHelpBlock" name="codigo" value="{{ old('codigo') }}" required>
                    <label for="materialRegisterFormCodigo">Codigo *</label>
                </div>
            </div>
        </div> --}}
        <div class="text-center">
            <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar</button>
        </div>
    </form>
</div>