<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-weight-bold">Subir archivo de Merito</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body mx-3">
    <form action="{{ route('certificados.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col">
                <label for="roles">Merito</label>
                <select class="browser-default custom-select" id="merito_id" name="merito_id">
                    @foreach ($convocatoria->meritos as $merito)
                        <option value="{{$merito->id}}"> {{$merito->detalle}} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form">
                    <input type="text"  id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="name" value="{{ old('name') }}" required>
                    <label for="materialRegisterFormName">Nombre de Archivo *</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="valor">Puntaje</label>
                <select class="browser-default custom-select" id="puntaje_id" name="puntaje_id">
                    @foreach ($convocatoria->puntajes as $puntaje)
                        <option value="{{$puntaje->valor}}"> {{$puntaje->descripcion}} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                      <input class="custom-file-input" type="file" name="file" id="inputGroupFile01" accept=".pdf" aria-describedby="inputGroupFileAddon01" >
                      <label class="custom-file-label" for="inputGroupFile01">Escoger Archivo</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar</button>
        </div>
    </form>
</div>