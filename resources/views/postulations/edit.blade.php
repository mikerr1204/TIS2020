<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-weight-bold">Validar postulante</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body mx-3">
    <form action="{{ route('postulations.validar', $postulation->id) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ @method_field('PUT') }}
        <div class="form-row">
            <div class="col">
                <label for="roles">Validacion</label>
                <select class="browser-default custom-select" id="validacion" name="validacion">
                    <option value="en revision"> En revision </option>
                    <option value="cumple"> Cumple </option>
                    <option value="no cumple"> No cumple </option>
                </select>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Validar</button>
        </div>
    </form>
</div>