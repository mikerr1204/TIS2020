<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8">
    <title>Convocatorias | Registrar</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/lte/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/lte/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/lte/dist/css/AdminLTE.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="/lte/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="/lte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="/lte/plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="/lte/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="/lte/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/lte/bower_components/select2/dist/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/lte/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/lte/dist/css/skins/_all-skins.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="/lte/dist/css/skins/skin-blue.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

    <style>
        .texto-rojo {
            color: red;
        }

        .invalid-feedback {
            color: red;
            font-size: 12px;
            font-weight: normal;
        }

        .hidden {
            visibility: hidden;
        }

        .visible {
            visibility: visible;
        }

        .espacio-abajo {
            padding-bottom: 13px
        }

        .info {
            color: #525252;
            font-size: 12px;
            font-weight: normal;
        }

        .titulo-panel {
            padding: 10px 0px 7px 0px;
            margin: 0px 16px -3px 16px;
            border-bottom: solid 2px #5555556b;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }

        .input-shadow-rojo {
            box-shadow: 0 0 5px 2px red;
        }
    </style>
</head>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
            <h3 class="">Registrar convocatoria</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="panel panel-default">
                <p class="titulo-panel">
                    Datos de la convocatoria
                </p>
                <div class="panel-body">
                    <form method="POST" action="{{route('convocatoria.registrar.submit')}}" id="form-reg-mat">
                        {{ csrf_field() }}

                        <div class="" id="idConvocatoria_div">
                            <label class="control-label" for="idConvocatoria">Codigo convocatoria: <span class="texto-rojo">*</span></label>
                            <input type="text" class="form-control" name="idConvocatoria" id="idConvocatoria" placeholder="Ingrese solo números" autocomplete="ÑÖcompletes" onkeypress="return validaNumericos(event, 'idConvocatoria', 7);" value="{{old('idConvocatoria')}}" required>
                            <p class="invalid-feedback {{$errors->first('idConvocatoria')? '' : 'hidden'}}" id="idConvocatoria_error">{{$errors->first('idConvocatoria')}}</p>
                            <p class="info text-right" id="idConvocatoria_p">(Solo números, max 7 dig.)</p>
                        </div>

                        <div class="" id="nombreConvocatoria_div">
                            <label class="control-label" for="nombreConvocatoria">Nombre Convocatoria: <span class="texto-rojo">*</span> </label>
                            <input type="text" class="form-control" id="nombreConvocatoria" name="nombreConvocatoria" placeholder="Nombre Convocatoria" autocomplete="ücomplet" onkeypress="return validarLetras(event,'nombreConvocatoria', 50);" value="{{old('nombreConvocatoria')}}" required>
                            <p class="invalid-feedback {{$errors->first('nombreConvocatoria')? '' : 'hidden'}}" id="nombre_error">{{$errors->first('nombreConvocatoria')}}</p>
                            <p class="info text-right" id="nombre_p">(Max 50 caracteres.)</p>
                        </div>

                        <div class="" id="fechaInicio_div">
                            <label class="control-label" for="fechaInicio">Fecha de inicio: <span class="texto-rojo">*</span> </label>
                            <input type="date" class="form-control" value="2018-07-22" id="fechaInicio" name="fechaInicio" required>
                        </div>

                        <div class="" id="fechaFin_div">
                            <label class="control-label" for="fechaFin">Fecha de cierre: <span class="texto-rojo">*</span> </label>
                            <input type="date" class="form-control" value="2018-07-22" id="fechaFin" name="fechaFin" required>
                        </div>

                        <!-- Buttons -->
                        <div class="row espacio-abajo">
                            <div class="col-xs-6">
                                <a href="../admin" type="submit" class="btn btn-danger btn-block btn-flat">
                                    Cancelar
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <button type="button" class="btn btn-primary btn-block" onclick="hacerSubmit();">Registrar</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <small class="texto-rojo">Los campos con (*) son obligatorios</small>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

<script>
    /*en chrome la tecla retroceso <-- es reconocido por el navegador y no entra a esta funcion
      en cambio en mozilla cuando se pulsa la tecla retroceso, entar a esta funcion
    */
    function validaNumericos(event, id, tamMax) {
        tecla = (document.all) ? event.keyCode : event.which;
        if (tecla == 8 || tecla == 13 || tecla == 0) { //Teclas 8: de retroceso para borrar, 13:enter, 0:tab?
            $('#' + id + '_div').removeClass('has-error');
            $('#' + id + '_error').addClass('hidden'); //no se mostrara el mensaje de error
            $('#' + id + '_p').removeClass('hidden'); //se muestra info
            return true;
        }

        text_input = $('#' + id).val();
        tam_str = text_input.length;
        if (tam_str + 1 <= tamMax) {
            patron = /[0-9]/;
            tecla_final = String.fromCharCode(tecla);
            if (patron.test(tecla_final)) { //si es numero
                $('#' + id + '_div').removeClass('has-error');
                $('#' + id + '_error').addClass('hidden'); //no se mostrara el mensaje de error
                $('#' + id + '_p').removeClass('hidden'); //se muestra info
                return true;
            } else {
                $('#' + id + '_div').addClass('has-error'); //pintamos el input de rojo
                $('#' + id + '_error').text('Ingrese solo números'); //mostrara el texto
                $('#' + id + '_error').removeClass('hidden'); //se mostrara el mensaje de error
                $('#' + id + '_p').addClass('hidden'); //se oculta info
                return false;
            }
        } else {
            $('#' + id + '_div').addClass('has-error'); //pintamos el input de rojo
            $('#' + id + '_error').text(tamMax + ' dígitos máximo.');
            $('#' + id + '_error').removeClass('hidden');
            $('#' + id + '_p').addClass('hidden'); //se oculta info
            return false;
        }
    }

    function validarLetras(event, id, tamMax) {
        tecla = (document.all) ? event.keyCode : event.which;
        if (tecla == 8 || tecla == 13 || tecla == 0) { //Teclas 8: de retroceso para borrar, 13:enter, 0:tab?
            $('#' + id + '_div').removeClass('has-error');
            $('#' + id + '_error').addClass('hidden'); //no se mostrara el mensaje de error
            $('#' + id + '_p').removeClass('hidden'); //se muestra info
            return true;
        }

        text_input = $('#' + id).val();
        // console.log(text_input);
        tam_str = text_input.length;
        if (tam_str + 1 <= tamMax) {
            patron = /[A-Z ÁÉÍÓÚ]/;
            tecla_final = String.fromCharCode(tecla);
            if (patron.test(tecla_final)) { //si es numero
                $('#' + id + '_div').removeClass('has-error');
                $('#' + id + '_error').addClass('hidden'); //no se mostrara el mensaje de error
                $('#' + id + '_p').removeClass('hidden'); //se muestra info
                return true;
            } else {
                $('#' + id + '_div').addClass('has-error'); //pintamos el input de rojo
                $('#' + id + '_error').text('Ingrese solo letras en MAYUSCULAS.'); //mostrara el texto
                $('#' + id + '_error').removeClass('hidden'); //se mostrara el mensaje de error
                $('#' + id + '_p').addClass('hidden'); //se oculta info
                return false;
            }
        } else {
            $('#' + id + '_div').addClass('has-error'); //pintamos el input de rojo
            $('#' + id + '_error').text(tamMax + ' caracteres máximo.');
            $('#' + id + '_error').removeClass('hidden');
            $('#' + id + '_p').addClass('hidden'); //se oculta info
            return false;
        }
    }

    function hacerSubmit() {
        idConvocatoria = $('#idConvocatoria').val().trim();
        nom = $('#nombreConvocatoria').val().trim();
        if (idConvocatoria == '') {
            $('#idConvocatoria_div').addClass('has-error'); //pintamos el input de rojo
            $('#idConvocatoria_error').text('Campo obligatorio');
            $('#idConvocatoria_error').removeClass('hidden');
            $('#idConvocatoria_p').addClass('hidden'); //se oculta info
        }

        if (nom == '') {
            $('#nombreConvocatoria_div').addClass('has-error'); //pintamos el input de rojo
            $('#nombreConvocatoria_error').text('Campo obligatorio');
            $('#nombreConvocatoria_error').removeClass('hidden');
            $('#nombreConvocatoria_p').addClass('hidden'); //se oculta info
        }
        if (Number(idConvocatoria) == 0) { //volver a numero php*
            $('#idConvocatoria_div').addClass('has-error'); //pintamos el input de rojo
            $('#idConvocatoria_error').text('el cero no esta permitido');
            $('#idConvocatoria_error').removeClass('hidden');
            $('#idConvocatoria_p').addClass('hidden'); //se oculta info
        } else {
            if (idConvocatoria != '' && nom != '') {
                $.ajax({
                    url: '/convocatoria/idConvocatoria',
                    method: 'get',
                    data: {
                        idConvocatoria: idConvocatoria
                    },
                    success: function(response) {
                        if (response.existe) {
                            $('#idConvocatoria_div').addClass('has-error'); //pintamos el input de rojo
                            $('#idConvocatoria_error').text('Ya existe, ingrese otro código de convocatoria');
                            $('#idConvocatoria_error').removeClass('hidden');
                            $('#idConvocatoria_p').addClass('hidden'); //se oculta info
                        } else {
                            $.ajax({
                                url: '/convocatoria/nombreConvocatoria',
                                method: 'get',
                                data: {
                                    nombre: nom
                                },
                                success: function(response) {
                                    if (response.existe) {
                                        $('#nombreConvocatoria_div').addClass('has-error'); //pintamos el input de rojo
                                        $('#nombreConvocatoria_error').text('Ya existe, ingrese otro nombre para la convocatoria');
                                        $('#nombreConvocatoria_error').removeClass('hidden');
                                        $('#nombreConvocatoria_p').addClass('hidden'); //se oculta info
                                    } else {
                                        /* Aqui se hara las validaciones para controlar que no se creen grupos el mismo dia */
                                        document.getElementById("form-reg-mat").submit();
                                    }
                                }
                            });
                        }
                    }
                });
            }
        }
    }
</script>

</html>