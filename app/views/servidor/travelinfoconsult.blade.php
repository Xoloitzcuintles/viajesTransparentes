@extends('servidor/layout')

@section('data')
        <input type="hidden" id="viaje_id" name="viaje_id" value="{{Input::get('viaje')}}"/>
        <section>
            <div class="container">
                <div class="row">
                    <ol class="breadcrumb">
                      <li><a href="#">Inicio</a></li>
                      <li><a href="#">Viajes</a></li>
                      <li class="active">Añadir información</li>
                    </ol>                
                    <div class="col-sm-3">
                        <h3>Instrucciones</h3>
                        <ul class="instructions">
                            <li>
                                <span class="count">1</span>Información Servidor Público
                                <p>Debe revisar y confirmar que la información desplegada, relacionada con su servidor público sea correcta, una vez comprobado haga click en 'Añadir información de viaje'</p>
                            </li>
                            <li>
                                <span class="count">2</span>Información del Evento
                                <p>Información del evento en el que participa.</p>
                            </li>
                            <li>
                                <span class="count">3</span>Información de Viaje
                                <p>En esta sección deberá contener la información de los pasajes realizados.</p>
                            </li>
                            <li>
                                <span class="count">4</span>Gastos Realizados
                                <p>Aquí capturará los gastos de viáticos y hospedaje.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="tabbable">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#infouser" data-toggle="tab">Información de Servidor Público</a></li>
                                <li><a href="#infoevento" data-toggle="tab">Información del Evento</a></li>
                                <li><a href="#infotravel" data-toggle="tab">Información del Viaje</a></li>
                                <li><a href="#infomoney" data-toggle="tab">Gastos Realizados</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="infouser" class="tab-pane active">
                                    <!--<div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="foto" id="foto" placeholder="Fotografía a publicar" />
                                    </div>-->
                                    <div class="input-group">
                                        <span class="input-group-addon">Nombre del servidor
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="nombre" id="nombre" 
                                        placeholder="Nombre" disabled="disabled"
                                        value="{{ $servidor["servidor"]["contact"]["apellidoPaterno"]." ".$servidor["servidor"]["contact"]["apellidoMaterno"]." ".$servidor["servidor"]["contact"]["nombre"] }}"
                                        js-path="viaje.servidor.contact.nombre"
                                        />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Unidad Administrativa
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="unidadAdministrativa" id="unidadAdministrativa" 
                                        placeholder="Cargo" disabled="disabled"
                                        value="{{$servidor["servidor"]["unidadAdministrativa"]["nombre"]}}"
                                        js-path="viaje.servidor.unidadAdministrativa.nombre" />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Cargo
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="cargo" id="cargo" 
                                        placeholder="Cargo" disabled="disabled"
                                        value="{{$servidor["servidor"]["cargo"]["nombre"]}}" 
                                        js-path="viaje.servidor.cargo.nombre"/>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Puesto
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="puesto" id="puesto" 
                                        placeholder="Puesto" disabled="disabled"
                                        value="{{$servidor["servidor"]["puesto"]["nombre"]}}"
                                        js-path="viaje.servidor.puesto.nombre" />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Clave Puesto
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="puesto" id="puesto" 
                                        placeholder="Puesto" disabled="disabled"
                                        value="{{$servidor["servidor"]["puesto"]["remuneracion"]["grupo_jerarquico"]}}" 
                                        js-path="viaje.servidor.puesto.remuneracion.grupo_jerarquico"/>
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">Tarifa Diaria
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="puesto" id="puesto" 
                                        placeholder="Puesto" disabled="disabled"
                                        value="${{$servidor["servidor"]["puesto"]["remuneracion"]["tarifa_diaria_mxn"]}}"
                                        js-path="viaje.servidor.puesto.remuneracion.tarifa_diaria_mxn" />
                                    </div>

                                    <input type="submit" class="btn btn-default" id="infouserbtn" value="Añadir información de evento" />
                                </div>
                                <div id="infoevento" class="tab-pane fade">
                                    <div class="input-group">
                                        <span class="input-group-addon">Nombre del Evento
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="nombreEvento" id="nombreEvento" 
                                        placeholder="Nombre del Evento" 
                                        value="{{@$viaje["eventos"]["0"]["name"]}}"
                                        js-path="viaje.eventos[0].name" />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">URL del Evento
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="urlEvento" id="urlEvento" 
                                        placeholder="URL del Evento" 
                                        value="{{@$viaje["eventos"]["0"]["name"]}}"
                                        js-path="viaje.eventos[0].url" />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Ciudad del Evento
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <select type="text" class="form-control" name="ciudadEvento" id="ciudadEvento" 
                                        placeholder="Ciudad del Evento" 
                                        js-path="viaje.eventos[0].ciudad_id" >
                                            <option value='0'>Seleccione</option>
                                            <?php foreach($ciudades as $ciudad){ ?>
                                                <option value="{{$ciudad["id"]}}" >{{$ciudad["name"]}}</option>

                                            <?php } ?>
                                        </select>
                                    
                                    </div>
                                    
                                    <input type="submit" class="btn btn-default" id="eventbtn" value="Añadir información de viaje" />
                                </div>     
                                <div id="infotravel" class="tab-pane fade">
                                    <div class='input-group date' id='datetimepickbegin'>
                                        <span class="input-group-addon">Inicio de participación
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type='text' class="form-control" placeholder="Fecha inicio"
                                            js-path="viaje.fecha_inicio_part"
                                        />
                                    </div>
                                    <div class='input-group date' id='datetimepickend'>
                                        <span class="input-group-addon">Fin de participación
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type='text' class="form-control" placeholder="Fecha final"
                                            js-path="viaje.fecha_fin_part"
                                        />
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Acuerdo
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="text" class="form-control" name="acuerdo" id="acuerdo" placeholder="Número de acuerdo" 
                                            js-path="viaje.acuerdo"
                                        />
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Oficio
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="text" class="form-control" name="oficio" id="oficio" placeholder="Número de oficio" 
                                            js-path="viaje.oficio"
                                        />
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Consecutivo
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="text" class="form-control" name="consecutivo" id="consecutivo" placeholder="Número Consecutivo" 
                                            js-path="viaje.consecutivo"
                                        />
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Tema
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="text" class="form-control" name="tema" id="tema" placeholder="Tema" 
                                            js-path="viaje.tema.name"
                                        />
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Tipo de Comisión
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="text" class="form-control" name="tipoComision" id="tipoComision" placeholder="Tipo de Comisión" 
                                            js-path="viaje.tipoComision.name"
                                        />
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Mecanismo de Origen
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="text" class="form-control" name="mecanismoOrigen" id="mecanismoOrigen" placeholder="Mecanismo de Origen" 
                                            js-path="viaje.mecanismoOrigen.name"
                                        />
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Institución que Genera
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="text" class="form-control" name="instGenera" id="instGenera" placeholder="Institución que genera" 
                                            js-path="viaje.instGenera.name"
                                        />
                                    </div>
                                    <hr>
                                    
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Motivo
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <textarea class="form-control" rows="3" name="motivo" id="motivo" placeholder="Motivo..."
                                        js-path="viaje.motivo"
                                        ></textarea>
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Antecedente
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <textarea class="form-control" rows="3" name="antecedente" id="antecedente" placeholder="Antecedente..."
                                        js-path="viaje.antecedente"
                                        ></textarea>
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Actividad
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <textarea class="form-control" rows="3" name="actividad" id="actividad" placeholder="Actividad..."
                                        js-path="viaje.actividad"
                                        ></textarea>
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Resultado
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <textarea class="form-control" rows="3" name="resultado" id="resultado" placeholder="Resultado..."
                                        js-path="viaje.resultado"
                                        ></textarea>
                                    </div>

                                    <hr>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Ciudad
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="text" class="form-control" name="ciudad_origen" id="ciudad_origen" placeholder="Ciudad de Evento" 
                                            js-path='$("#ciudadEvento option[value="+viaje.eventos[0].ciudad_id+"] ").html();'
                                        />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Tipo de Viaje
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <select class="form-control" id="tipoViaje" name="tipoViaje"
                                            js-path="viaje.eventos[0].tipo_viaje"
                                        >
                                            <option selected="selected">Seleccionar...</option>
                                            <option value="Internacional">Internacional</option>
                                            <option value="Nacional">Nacional</option>
                                        </select>
                                    </div>
                                    <input type="submit" class="btn btn-default" id="infotravelbtn" value="Añadir información de gastos" />
                                </div>
                                <div id="infomoney" class="tab-pane fade">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Gastos de Viáticos" />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Gastos de Hotel" />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Gastos de Viaje" />
                                    </div>                                    
                                    <input type="submit" class="btn btn-default" data-loading-text="Registrando Viaje..." id="finishregister" value="Registrar Viaje" />
                                </div>     
                            </div>
                        </div>
                    </div>       
                </div>
            </div>
        </section>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="URL::to('/')/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {            
                $('#eventbtn,#infouserbtn,#infotravelbtn').click(function(){
                    $('.nav-tabs > .active').next('li').find('a').trigger('click');
                })
            });
            $(document).ready(function() {
                $('#finishregister').click(function () {
                    var btn = $(this)
                    btn.button('loading')
                    setTimeout(function() {
                        $.ajax("test.php").always(function () {
                            btn.button('reset')
                        });
                    }, 3000);
                });

                var base_url = $("#base_url").val();
                $.ajax({
                    url:  base_url+'/viajesApi/postJson',
                    type: 'post',
                    dataType: 'json',
                    async: false,
                    data: {
                        viaje_id : $("#viaje_id").val()
                    },
                    success: function(data) {
                        viaje = data[0];
                    }
                });
            });

            /*
                $.each( $("input"), function( key, value ) {
                  if($(this).attr("js-path") != undefined){
                  //  console.log($(this).attr("js-path"));
                    var js_path = $(this).attr("js-path");
                    console.log(js_path);
                    console.log(eval(js_path));
                    //if input
                    $(this).val(eval(js_path));
                    // else if select
                  }

                });


            */
        </script>


@stop