@extends('template')

@section('content')
        <input type="hidden" id="viaje_id" name="viaje_id" value="{{Input::get('viaje')}}"/>
        <section>
            <div class="container">
                <div class="row">
                    <ol class="breadcrumb">
                      <li><a href="{{URL::to('/')}}">Inicio</a></li>
                      <li><a href="{{URL::to('/viajesApi/consulta')}}">Viajes</a></li>
                      <li class="active">Consultar Viaje</li>
                    </ol>                
                    <div class="col-sm-3">
                        <h3>Instrucciones</h3>
                        <ul class="instructions">
                            <li>
                                <span class="count">1</span>Información Servidor Público
                                <p>Aquí encontrará la información referente al servidor público que realizó el viaje</p>
                            </li>
                            <li>
                                <span class="count">2</span>Información del Evento
                                <p>Información del evento en el que participó el servidor.</p>
                            </li>
                            <li>
                                <span class="count">3</span>Información de Viaje
                                <p>Sección que contiene la información del viaje como no. de autorización, de oficio, fechas, motivos, actividades, etc.</p>
                            </li>
                            <li>
                                <span class="count">4</span>Gastos Realizados
                                <p>Aquí verá información de los gastos realizados de viáticos, transporte y hospedaje.</p>
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

                                    <input type="submit" class="btn btn-default" id="infouserbtn" value="Consultar información de evento" />
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
                                    
                                    <input type="submit" class="btn btn-default" id="eventbtn" value="Consultar información de viaje" />
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
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Contribucion al IFAI
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <textarea class="form-control" rows="3" name="contribucionIfai" id="contribucionIfai" placeholder="Contribución del Evento al IFAI..."
                                        js-path="viaje.contribucion_ifai"
                                        ></textarea>
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Observaciones
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <textarea class="form-control" rows="3" name="observaciones" id="observaciones" placeholder="Observaciones..."
                                        js-path="viaje.observaciones"
                                        ></textarea>
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">URL Comunicado
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="text" class="form-control" name="urlComunicado" id="urlComunicado" placeholder="Url del comunicado" 
                                            js-path="viaje.url_comunicado"
                                        />
                                    </div>

                                    <hr>

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
                                    <input type="submit" class="btn btn-default" id="infotravelbtn" value="Consultar información de gastos" />
                                </div>
                                <div id="infomoney" class="tab-pane fade">
                                    <h4>Viáticos</h4>
                                    <div class="input-group">
                                        <span class="input-group-addon">Gasto
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="gasto" id="gasto" placeholder="Gasto" 
                                            js-path="viaje.eventos[0].viatico.gasto"
                                        />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Comprobado
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="comprobado" id="comprobado" placeholder="Comprobado" 
                                            js-path="viaje.eventos[0].viatico.comprobado"
                                        />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Sin Comprobar
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="sinComprobar" id="sinComprobar" placeholder="Sin Comprobar" 
                                            js-path="viaje.eventos[0].viatico.sin_comprobar"
                                        />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Devuelto
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="devuelto" id="devuelto" placeholder="Devuelto" 
                                            js-path="viaje.eventos[0].viatico.devuelto"
                                        />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Descripción
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción" 
                                            js-path="viaje.eventos[0].viatico.descripcion"
                                        />
                                    </div>

                                    <h4>Hospedaje</h4>
                                    <div class='input-group date' id='datetimepickhospedajebegin'>
                                        <span class="input-group-addon">Fecha Inicio
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type='text' class="form-control" placeholder="Fecha inicio"
                                            js-path="viaje.eventos[0].viatico.hospedajes[0].fecha_inicio"
                                        />
                                    </div>
                                    <div class='input-group date' id='datetimepickhospedajebegin'>
                                        <span class="input-group-addon">Fecha Fin
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type='text' class="form-control" placeholder="Fecha fin"
                                            js-path="viaje.eventos[0].viatico.hospedajes[0].fecha_fin"
                                        />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Institución que paga el hospedaje
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="instHospedaje" id="instHospedaje" placeholder="Institución que paga el hospedaje" 
                                            js-path="viaje.eventos[0].viatico.hospedajes[0].inst_hospedaje"
                                        />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Costo hotel
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="costoHotel" id="costoHotel" placeholder="Costo del hotel" 
                                            js-path="viaje.eventos[0].viatico.hospedajes[0].costo"
                                        />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Hotel
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="hotel" id="hotel" placeholder="Hotel" 
                                            js-path="viaje.eventos[0].viatico.hospedajes[0].hotel"
                                        />
                                    </div>
                                    

                                    <h4>Viajes</h4>
                                    <div class="input-group">
                                        <span class="input-group-addon">Institución que cubre pasaje
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="cubrePasaje" id="cubrePasaje" placeholder="Institución que cubre pasaje" 
                                            js-path="viaje.eventos[0].pasajes[0].cubre_pasaje"
                                        />
                                    </div>
                                    <span>Viaje de ida</span>
                                    <div class="input-group">
                                        <span class="input-group-addon">Número de viaje
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="numeroViajeIda" id="numeroViajeIda" placeholder="Institución que cubre pasaje" 
                                            js-path="viaje.eventos[0].pasajes[0].numero_viaje"
                                        />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Tipo de pasaje
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="tipoPasajeIda" id="tipoPasajeIda" placeholder="Institución que cubre pasaje" 
                                            js-path="viaje.eventos[0].pasajes[0].tipo_pasaje"
                                        />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Compañía
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="companiaPasajeIda" id="companiaPasajeIda" placeholder="Institución que cubre pasaje" 
                                            js-path="viaje.eventos[0].pasajes[0].compania.name"
                                        />
                                    </div>
                                    <div class='input-group date' id='datetimepickhospedajebegin'>
                                        <span class="input-group-addon">Fecha
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type='text' class="form-control" placeholder="Fecha"
                                            js-path="viaje.eventos[0].pasajes[0].fecha"
                                        />
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Ciudad Origen
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="text" class="form-control" name="ciudad_origen_ida" id="ciudad_origen_ida" placeholder="Ciudad de Origen" 
                                            js-path='$("#ciudadEvento option[value="+viaje.eventos[0].pasajes[0].ciudad_origen_id+"] ").html();'
                                            id-path='viaje.eventos[0].pasajes[0].ciudad_origen_id'
                                        />
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Ciudad Destino
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="text" class="form-control" name="ciudad_destino_ida" id="ciudad_destino_ida" placeholder="Ciudad de Destino" 
                                            js-path='$("#ciudadEvento option[value="+viaje.eventos[0].pasajes[0].ciudad_destino_id+"] ").html();'
                                            id-path='viaje.eventos[0].pasajes[0].ciudad_destino_id'
                                        />
                                    </div>
                                    <span>Viaje de regreso</span>
                                    <div class="input-group">
                                        <span class="input-group-addon">Número de viaje
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="numeroViajeRegreso" id="numeroViajeRegreso" placeholder="Número de viaje" 
                                            js-path="viaje.eventos[0].pasajes[1].numero_viaje"
                                        />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Tipo de pasaje
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="tipoPasajeRegreso" id="tipoPasajeRegreso" placeholder="Tipo de pasaje" 
                                            js-path="viaje.eventos[0].pasajes[1].tipo_pasaje"
                                        />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Compañía
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="companiaPasajeRegreso" id="companiaPasajeRegreso" placeholder="Compañía" 
                                            js-path="viaje.eventos[0].pasajes[1].compania.name"
                                        />
                                    </div>
                                    <div class='input-group date' id='datetimepickhospedajebegin'>
                                        <span class="input-group-addon">Fecha
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type='text' class="form-control" placeholder="Fecha"
                                            js-path="viaje.eventos[0].pasajes[1].fecha"
                                        />
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Ciudad Origen
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="text" class="form-control" name="ciudad_origen_regreso" id="ciudad_origen_regreso" placeholder="Ciudad de Origen" 
                                            js-path='$("#ciudadEvento option[value="+viaje.eventos[0].pasajes[1].ciudad_origen_id+"] ").html();'
                                            id-path='viaje.eventos[0].pasajes[1].ciudad_origen_id'
                                        />
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Ciudad Destino
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="text" class="form-control" name="ciudad_destino_regreso" id="ciudad_destino_regreso" placeholder="Ciudad de Destino" 
                                            js-path='$("#ciudadEvento option[value="+viaje.eventos[0].pasajes[1].ciudad_destino_id+"] ").html();'
                                            id-path='viaje.eventos[0].pasajes[1].ciudad_destino_id'
                                        />
                                    </div>
                                    
                                    <h3>Comentarios</h3>
                                    <div id="comments_div"><div class="fb-comments" data-href="http://gasolinazos.com" data-numposts="5" data-colorscheme="light"></div></div>

                                    <!--<input type="submit" class="btn btn-default" data-loading-text="Registrando Viaje..." id="finishregister" value="Registrar Viaje" />!-->
                                </div>     
                            </div>
                        </div>
                    </div>       
                </div>
            </div>
        </section>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ URL::asset('js/lib/viajes/viajes.js') }}"></script>
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
                        $.each( $("input, textarea, select"), function( key, value ) {
                          if($(this).attr("js-path") != undefined){
                            var js_path = $(this).attr("js-path");
                            if(js_path.charAt(0) != "$"){
                                var validParents = validateParents(js_path);
                                console.log(validParents);
                                if(validParents == true){
                                    eval('$(this).val('+js_path+');');
                                    $(this).attr("disabled","disabled");
                                }else{
                                    console.log("invalid parents"+js_path);
                                }
                            } else {
                                var id_path = $(this).attr("id-path");
                                var validParents = validateParents(id_path);
                            }
                          }

                        });
                    }
                });


            });

function validateParents(objString){
    var chunks = objString.split('.');
    var string = '';
    var num = 0;
    var val = false;
    $(chunks).each(function (key, index){
        string += index;
        console.log(num+" - "+string);
        if(eval(string) == undefined){
            val = false;
            return false;
        } else {
            val = true;
        }
        string += ".";
        num++;
    });
    return val;
}
        </script>


@stop