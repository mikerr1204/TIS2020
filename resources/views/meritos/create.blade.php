<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-weight-bold">Crear Merito</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body mx-3">
    <form action="{{ route('meritos.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-row pb-2">
            <div class="col">
                <label for="roles">Convocatoria</label>
                <select class="custom-select" id="convocatoria_id" name="convocatoria_id">
                    <option selected value="{{$convocatoria->id}}"> {{$convocatoria->titulo}} </option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <select class="browser-default custom-select" name="tipo">
                    <option selected value="Rendimiento Academico">Rendimiento Academico</option>
                    <option value="Experiencia General">Experiencia General</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form">
                    <input type="text"  id="materialRegisterFormclase" class="form-control" aria-describedby="materialRegisterFormclaseHelpBlock" name="clase" value="{{ old('clase') }}" required>
                    <label for="materialRegisterFormclase">Clase *</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form">
                    <textarea type="text" id="message" rows="2" class="form-control md-textarea" name="detalle" value="{{ old('detalle') }}" required></textarea>
                    <label for="message">Detalle *</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form">
                    <input type="number"  id="materialRegisterFormpuntos" class="form-control" aria-describedby="materialRegisterFormpuntosHelpBlock" name="puntos" value="{{ old('puntos') }}" required>
                    <label for="materialRegisterFormpuntos">Puntaje *</label>
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