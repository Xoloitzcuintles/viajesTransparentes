@extends('servidor/layout')

@section('data')
        <script src="{{ URL::asset('js/jquery.validate.js') }}"></script>
        <script src="{{ URL::asset('js/lib/servidor/travelinfoadd.js') }}"></script>
        <script src="{{ URL::asset('js/lib/viajes/viajes.js') }}"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->

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
                        <div class="tabbable" id="travelAddForm">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#infouser" data-toggle="tab">Información de Servidor Público</a></li>
                                <li><a href="#infoevento" data-toggle="tab">Información del Evento</a></li>
                                <li><a href="#infotravel" data-toggle="tab">Información del Viaje</a></li>
                                <li><a href="#infomoney" data-toggle="tab">Gastos Realizados</a></li>
                            </ul>
                            <!--
                                Tab Info Servidor

                            !-->                            
                            <div class="tab-content">
                                <div id="infouser" class="tab-pane active">
                                    <form id="infoUserForm" name="infoUserForm" method="post" action="#" >
                                    <!--<div class="input-group">
                                        <span class="input-group-addon">
                                        </span>                            
                                        <input type="text" class="form-control" name="foto" id="foto" placeholder="Fotografía a publicar" />
                                    </div>-->
                                    <input type="hidden" id="servidor_id" js-path="viaje.servidor_id" value="{{$servidor["servidor"]["contact"]["id"]}}" />
                                    <div class="input-group">
                                        <span class="input-group-addon">Nombre del servidor
                                        </span>                            
                                        <input type="text" class="form-control" name="nombre" id="nombre" 
                                        placeholder="Nombre" disabled="disabled"
                                        value="{{ $servidor["servidor"]["contact"]["apellidoPaterno"]." ".$servidor["servidor"]["contact"]["apellidoMaterno"]." ".$servidor["servidor"]["contact"]["nombre"] }}"
                                        js-path="viaje.servidor.contact.nombre"
                                        required
                                        />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Unidad Administrativa
                                        </span>                            
                                        <input type="text" class="form-control" name="unidadAdministrativa" id="unidadAdministrativa" 
                                        placeholder="Cargo" disabled="disabled"
                                        value="{{$servidor["servidor"]["unidadAdministrativa"]["nombre"]}}"
                                        js-path="viaje.servidor.unidadAdministrativa.nombre" 
                                        required
                                        />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Cargo
                                        </span>                            
                                        <input type="text" class="form-control" name="cargo" id="cargo" 
                                        placeholder="Cargo" disabled="disabled"
                                        value="{{$servidor["servidor"]["cargo"]["nombre"]}}" 
                                        js-path="viaje.servidor.cargo.nombre" required
                                        />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Puesto
                                        </span>                            
                                        <input type="text" class="form-control" name="puesto" id="puesto" 
                                        placeholder="Puesto" disabled="disabled"
                                        value="{{$servidor["servidor"]["puesto"]["nombre"]}}"
                                        js-path="viaje.servidor.puesto.nombre" required
                                        />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Clave Puesto
                                        </span>                            
                                        <input type="text" class="form-control" name="puesto" id="puesto" 
                                        placeholder="Puesto" disabled="disabled"
                                        value="{{$servidor["servidor"]["puesto"]["remuneracion"]["grupo_jerarquico"]}}" 
                                        js-path="viaje.servidor.puesto.remuneracion.grupo_jerarquico" required
                                        />
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">Tarifa Diaria
                                        </span>                            
                                        <input type="text" class="form-control" name="puesto" id="puesto" 
                                        placeholder="Puesto" disabled="disabled"
                                        value="${{$servidor["servidor"]["puesto"]["remuneracion"]["tarifa_diaria_mxn"]}}"
                                        js-path="viaje.servidor.puesto.remuneracion.tarifa_diaria_mxn" required
                                        />
                                    </div>

                                    <input type="submit" class="btn btn-default" id="infouserbtn"
                                    form="infoUserForm"
                                     value="Añadir información de evento" />
                                 </form>
                                </div>
                                <div id="infoevento" class="tab-pane fade">
                                    <form id="infoEventoForm" name="infoEventoForm" method="post" action="#" >
                                        <div class="input-group">
                                            <span class="input-group-addon">Nombre del Evento
                                            </span>                            
                                            <input type="text" class="form-control" name="nombreEvento" id="nombreEvento" 
                                            placeholder="Nombre del Evento" 
                                            value="{{@$viaje["eventos"]["0"]["name"]}}"
                                            js-path="viaje.eventos[0].name" required />
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">URL del Evento
                                            </span>                            
                                            <input type="text" class="form-control" name="urlEvento" id="urlEvento" 
                                            placeholder="URL del Evento" 
                                            value="{{@$viaje["eventos"]["0"]["name"]}}"
                                            js-path="viaje.eventos[0].url" required type="url" 
                                            />
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">Ciudad del Evento
                                            </span>                            
                                            <select type="text" class="form-control" name="ciudadEvento" id="ciudadEvento" 
                                            placeholder="Ciudad del Evento" 
                                            required
                                            js-path="viaje.eventos[0].ciudad_id" >
                                                <option value='0'>Seleccione</option>
                                                <?php foreach($ciudades as $ciudad){ ?>
                                                    <option value="{{$ciudad["id"]}}" >{{$ciudad["name"]}}</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    <input type="submit" class="btn btn-default" id="eventbtn" 
                                    form="infoEventoForm"
                                    value="Añadir información de viaje" />
                                    </form>
                                </div>     
                                <div id="infotravel" class="tab-pane fade">
                                    <form id="infoTravelForm" name="infoTravelForm" method="post" action="#" >
                                    <div class='input-group date' id='datetimepickbegin'>
                                        <span class="input-group-addon">Inicio de participación
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                        <input type='date' class="form-control" placeholder="Fecha inicio"
                                            js-path="viaje.fecha_inicio_part" required data-date-format="YYYY-MM-DD"
                                        />
                                    </div>
                                    <div class='input-group date' id='datetimepickend'>
                                        <span class="input-group-addon">Fin de participación
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                        <input type='date' class="form-control" placeholder="Fecha final"
                                            js-path="viaje.fecha_fin_part" required data-date-format="YYYY-MM-DD"
                                        />
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Acuerdo
                                        </span>
                                        <input type="text" class="form-control" name="acuerdo" id="acuerdo" placeholder="Número de acuerdo" 
                                            js-path="viaje.acuerdo" required
                                        />
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Oficio
                                        </span>
                                        <input type="text" class="form-control" name="oficio" id="oficio" placeholder="Número de oficio" 
                                            js-path="viaje.oficio" required
                                        />
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Consecutivo
                                        </span>
                                        <input type="text" class="form-control" name="consecutivo" id="consecutivo" placeholder="Número Consecutivo" 
                                            js-path="viaje.consecutivo" required
                                        />
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Tema
                                        </span>
                                        <select type="text" class="form-control" name="tema" id="tema" 
                                        placeholder="Tema" required
                                        js-path="viaje.tema_id" >
                                            <option value='0'>Seleccione</option>
                                            <?php foreach($temas as $tema){ ?>
                                                <option value="{{$tema["id"]}}" >{{$tema["name"]}}</option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Tipo de Comisión
                                        </span>
                                        <select type="text" class="form-control" name="tipoComision" id="tipoComision" 
                                        placeholder="Tipo de Comisión" required
                                        js-path="viaje.tipo_comision_id" >
                                            <option value='0'>Seleccione</option>
                                            <?php foreach($tipoComisiones as $tipoComision){ ?>
                                                <option value="{{$tipoComision["id"]}}" >{{$tipoComision["name"]}}</option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Mecanismo de Origen
                                        </span>
                                        <select type="text" class="form-control" name="mecanismoOrigen" id="mecanismoOrigen" 
                                        placeholder="Tipo de Comisión" required
                                        js-path="viaje.mecanismo_origen_id" >
                                            <option value='0'>Seleccione</option>
                                            <?php foreach($mecanismosOrigen as $mecanismoOrigen){ ?>
                                                <option value="{{$mecanismoOrigen["id"]}}" >{{$mecanismoOrigen["name"]}}</option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">Institución que Genera
                                        </span>
                                        <select type="text" class="form-control" name="instGenera" id="instGenera" 
                                        placeholder="Institución que Genera" required
                                        js-path="viaje.inst_genera_id" >
                                            <option value='0'>Seleccione</option>
                                            <?php foreach($instsGenera as $instGenera){ ?>
                                                <option value="{{$instGenera["id"]}}" >{{$instGenera["name"]}}</option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class='input-group'>
                                        <span class="input-group-addon">Ciudad
                                        </span>                            
                                        <select type="text" class="form-control" name="ciudad_origen" id="ciudad_origen" 
                                        placeholder="Ciudad del Evento" required
                                        js-path="viaje.eventos[0].ciudad_id" >
                                            <option value='0'>Seleccione</option>
                                            <?php foreach($ciudades as $ciudad){ ?>
                                                <option value="{{$ciudad["id"]}}" >{{$ciudad["name"]}}</option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Tipo de Viaje
                                        </span>
                                        <select class="form-control" id="tipoViaje" name="tipoViaje"
                                            js-path="viaje.eventos[0].tipo_viaje" required
                                        >
                                            <option selected="selected">Seleccionar...</option>
                                            <option value="Internacional">Internacional</option>
                                            <option value="Nacional">Nacional</option>
                                        </select>
                                    </div>

                                    <div class="accordion" id="accordion3">
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseInformacion">
                                                Información del viaje
                                                </a>
                                            </div>
                                            <div id="collapseInformacion" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <div class='input-group date'>
                                                        <span class="input-group-addon">Motivo
                                                        </span>
                                                        <textarea class="form-control" rows="3" name="motivo" id="motivo" placeholder="Motivo..."
                                                        js-path="viaje.motivo" required
                                                        ></textarea>
                                                    </div>
                                                    <div class='input-group date'>
                                                        <span class="input-group-addon">Antecedente
                                                        </span>
                                                        <textarea class="form-control" rows="3" name="antecedente" id="antecedente" placeholder="Antecedente..."
                                                        js-path="viaje.antecedente" required
                                                        ></textarea>
                                                    </div>
                                                    <div class='input-group date'>
                                                        <span class="input-group-addon">Actividad
                                                        </span>
                                                        <textarea class="form-control" rows="3" name="actividad" id="actividad" placeholder="Actividad..."
                                                        js-path="viaje.actividad" required
                                                        ></textarea>
                                                    </div>
                                                    <div class='input-group date'>
                                                        <span class="input-group-addon">Resultado
                                                        </span>
                                                        <textarea class="form-control" rows="3" name="resultado" id="resultado" placeholder="Resultado..."
                                                        js-path="viaje.resultado" required
                                                        ></textarea>
                                                    </div>
                                                    <div class='input-group date'>
                                                        <span class="input-group-addon">Contribucion al IFAI
                                                        </span>
                                                        <textarea class="form-control" rows="3" name="contribucionIfai" id="contribucionIfai" placeholder="Contribución del Evento al IFAI..."
                                                        js-path="viaje.contribucion_ifai" required
                                                        ></textarea>
                                                    </div>
                                                    <div class='input-group date'>
                                                        <span class="input-group-addon">Observaciones
                                                        </span>
                                                        <textarea class="form-control" rows="3" name="observaciones" id="observaciones" placeholder="Observaciones..."
                                                        js-path="viaje.observaciones" required
                                                        ></textarea>
                                                    </div>
                                                    <div class='input-group date'>
                                                        <span class="input-group-addon">URL Comunicado
                                                        </span>
                                                        <input type="text" class="form-control" name="urlComunicado" id="urlComunicado" placeholder="Url del comunicado" 
                                                            js-path="viaje.url_comunicado" required
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-default" id="infotravelbtn" 
                                    form="infoTravelForm"
                                    value="Añadir información de gastos" />
                                </form>
                                </div>
                                <div id="infomoney" class="tab-pane fade">
                                    <form id="infoPaymentForm" name="infoTravelForm" method="post" action="#" >
                                    <div class="accordion" id="accordion2">
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseViaticos">
                                                Viáticos
                                                </a>
                                            </div>
                                            <div id="collapseViaticos" class="accordion-body collapse in">
                                                <div class="accordion-inner">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Gasto
                                                        </span>                            
                                                        <input class="form-control" name="gasto" id="gasto" placeholder="Gasto" 
                                                            js-path="viaje.eventos[0].viatico.gasto" required type="number"
                                                        />
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Comprobado
                                                        </span>                            
                                                        <input class="form-control" name="comprobado" id="comprobado" placeholder="Comprobado" 
                                                            js-path="viaje.eventos[0].viatico.comprobado" required type="number"
                                                        />
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Sin Comprobar
                                                        </span>                            
                                                        <input class="form-control" name="sinComprobar" id="sinComprobar" placeholder="Sin Comprobar" 
                                                            js-path="viaje.eventos[0].viatico.sin_comprobar" required type="number"
                                                        />
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Devuelto
                                                        </span>                            
                                                        <input class="form-control" name="devuelto" id="devuelto" placeholder="Devuelto" 
                                                            js-path="viaje.eventos[0].viatico.devuelto" required type="number"
                                                        />
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Descripción
                                                        </span>                            
                                                        <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción" 
                                                            js-path="viaje.eventos[0].viatico.descripcion" required
                                                        />
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseHospedaje">
                                                Hospedaje
                                                </a>
                                            </div>
                                            <div id="collapseHospedaje" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <div class='input-group date' id='datetimepickhospedajebegin'>
                                                        <span class="input-group-addon">Fecha Inicio
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                        <input type='date' class="form-control" placeholder="Fecha inicio"
                                                             required data-date-format="YYYY-MM-DD"
                                                            js-path="viaje.eventos[0].viatico.hospedajes[0].fecha_inicio"
                                                        />
                                                    </div>
                                                    <div class='input-group date' id='datetimepickhospedajeend'>
                                                        <span class="input-group-addon">Fecha Fin
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                        <input class="form-control" placeholder="Fecha fin"
                                                         required type="date" data-date-format="YYYY-MM-DD"
                                                            js-path="viaje.eventos[0].viatico.hospedajes[0].fecha_fin"
                                                        />
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Institución que paga el hospedaje
                                                        </span>                            
                                                        <select type="text" class="form-control" name="instHospedaje" id="instHospedaje" 
                                                        placeholder="Institución que Genera" required
                                                        js-path="viaje.eventos[0].viatico.hospedajes[0].inst_hospedaje" >
                                                            <option value='0'>Seleccione</option>
                                                            <?php foreach($instsGenera as $instGenera){ ?>
                                                                <option value="{{$instGenera["name"]}}" >{{$instGenera["name"]}}</option>

                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Costo hotel
                                                        </span>                            
                                                        <input type="number" class="form-control" name="costoHotel" id="costoHotel" placeholder="Costo del hotel" 
                                                            required
                                                            js-path="viaje.eventos[0].viatico.hospedajes[0].costo"
                                                        />
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Hotel
                                                        </span>                            
                                                        <input type="text" class="form-control" name="hotel" id="hotel" placeholder="Hotel" 
                                                            required
                                                            js-path="viaje.eventos[0].viatico.hospedajes[0].hotel"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    <!--
                                        Pasajes
                                    !-->
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapsePasajes">
                                                Pasajes
                                                </a>
                                            </div>
                                            <div id="collapsePasajes" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <span><b>Viaje de ida</b></span>
                                                    <div class="input-group">
                                                        <input type="hidden" name="tipoIda" value="ida" js-path="viaje.eventos[0].pasajes[0].tipo" >
                                                        <span class="input-group-addon">Institución que cubre pasaje
                                                        </span>                            
                                                        <select type="text" class="form-control" name="instHospedaje" id="instHospedaje" 
                                                        placeholder="Institución que Cubre Pasaje" required
                                                        js-path="viaje.eventos[0].pasajes[0].cubre_pasaje" >
                                                            <option value='0'>Seleccione</option>
                                                            <?php foreach($instsGenera as $instGenera){ ?>
                                                                <option value="{{$instGenera["name"]}}" >{{$instGenera["name"]}}</option>

                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Número de viaje
                                                        </span>                            
                                                        <input type="text" class="form-control" name="numeroViajeIda" id="numeroViajeIda" placeholder="Institución que cubre pasaje" 
                                                            required
                                                            js-path="viaje.eventos[0].pasajes[0].numero_viaje"
                                                        />
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Tipo de pasaje
                                                        </span>                            
                                                        <select required class="form-control" name="tipoPasajeIda" id="tipoPasajeIda" placeholder="Institución que cubre pasaje" 
                                                            js-path="viaje.eventos[0].pasajes[0].tipo_pasaje">
                                                            <option value="0">Seleccione</option>
                                                            <option value="Aéreo">Aéreo</option>
                                                            <option value="Marítimo">Marítimo</option>
                                                            <option value="Terrestre">Terrestre</option>

                                                        </select>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Compañía
                                                            <span class="glyphicon glyphicon-lock"></span>
                                                        </span>                            
                                                        <select type="text" class="form-control" name="companiaPasajeIda" id="companiaPasajeIda" 
                                                        required
                                                        js-path="viaje.eventos[0].pasajes[0].compania_id" >
                                                            <option value='0'>Seleccione</option>
                                                            <?php foreach($companiasTransporte as $compania){ ?>
                                                                <option value="{{$compania["id"]}}" >{{$compania["name"]}}</option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class='input-group date' id='datetimepickviajeida'>
                                                        <span class="input-group-addon">Fecha
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                        <input type='date' class="form-control" placeholder="Fecha"
                                                            required data-date-format="YYYY-MM-DD"
                                                            js-path="viaje.eventos[0].pasajes[0].fecha"
                                                        />
                                                    </div>
                                                    <div class='input-group date'>
                                                        <span class="input-group-addon">Ciudad Origen
                                                        </span>                            
                                                        <select type="text" class="form-control" name="ciudad_origen_ida" id="ciudad_origen_ida" 
                                                        placeholder="Ciudad del Evento" required
                                                            js-path='viaje.eventos[0].pasajes[0].ciudad_origen_id'>
                                                            <option value='0'>Seleccione</option>
                                                            <?php foreach($ciudades as $ciudad){ ?>
                                                                <option value="{{$ciudad["id"]}}" >{{$ciudad["name"]}}</option>

                                                            <?php } ?>
                                                        </select>

                                                    </div>
                                                    <div class='input-group'>
                                                        <span class="input-group-addon">Ciudad Destino
                                                        </span>
                                                        <select type="text" class="form-control" name="ciudad_destino_ida" id="ciudad_destino_ida" 
                                                        placeholder="Ciudad Destino" required
                                                            js-path='viaje.eventos[0].pasajes[0].ciudad_destino_id'>
                                                            <option value='0'>Seleccione</option>
                                                            <?php foreach($ciudades as $ciudad){ ?>
                                                                <option value="{{$ciudad["id"]}}" >{{$ciudad["name"]}}</option>

                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <span><b>Viaje de regreso</b></span>
                                                    <div class="input-group">
                                                        <input type="hidden" name="tipoRegreso" value="regreso" js-path="viaje.eventos[0].pasajes[1].tipo" >
                                                        <span class="input-group-addon">Institución que cubre pasaje
                                                        </span>                            
                                                        <select type="text" class="form-control" name="instHospedaje" id="instHospedaje" 
                                                        placeholder="Institución que Cubre Pasaje" required
                                                        js-path="viaje.eventos[0].pasajes[1].cubre_pasaje" >
                                                            <option value='0'>Seleccione</option>
                                                            <?php foreach($instsGenera as $instGenera){ ?>
                                                                <option value="{{$instGenera["name"]}}" >{{$instGenera["name"]}}</option>

                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Número de viaje
                                                        </span>                            
                                                        <input type="text" class="form-control" name="numeroViajeRegreso" id="numeroViajeRegreso" placeholder="Número de viaje" 
                                                            js-path="viaje.eventos[0].pasajes[1].numero_viaje"
                                                        />
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Tipo de pasaje
                                                        </span>                            
                                                        <select required class="form-control" name="tipoPasajeIda" id="tipoPasajeIda" placeholder="Institución que cubre pasaje" 
                                                            js-path="viaje.eventos[0].pasajes[1].tipo_pasaje">
                                                            <option value="0">Seleccione</option>
                                                            <option value="Aéreo">Aéreo</option>
                                                            <option value="Marítimo">Marítimo</option>
                                                            <option value="Terrestre">Terrestre</option>

                                                        </select>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Compañía
                                                            <span class="glyphicon glyphicon-lock"></span>
                                                        </span>
                                                        <select type="text" class="form-control" name="companiaPasajeRegreso" id="companiaPasajeRegreso" 
                                                        required
                                                        js-path="viaje.eventos[0].pasajes[1].compania_id" >
                                                            <option value='0'>Seleccione</option>
                                                            <?php foreach($companiasTransporte as $compania){ ?>
                                                                <option value="{{$compania["id"]}}" >{{$compania["name"]}}</option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class='input-group date' id='datetimepickviajeregreso'>
                                                        <span class="input-group-addon">Fecha
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                        <input type='date' class="form-control" placeholder="Fecha"
                                                            required data-date-format="YYYY-MM-DD"
                                                            js-path="viaje.eventos[0].pasajes[1].fecha"
                                                        />
                                                    </div>
                                                    <div class='input-group'>
                                                        <span class="input-group-addon">Ciudad Origen
                                                        </span>
                                                        <select type="text" class="form-control" name="ciudad_origen_regreso" id="ciudad_origen_regreso" 
                                                        placeholder="Ciudad Origen" required
                                                            js-path='viaje.eventos[0].pasajes[1].ciudad_origen_id'>
                                                            <option value='0'>Seleccione</option>
                                                            <?php foreach($ciudades as $ciudad){ ?>
                                                                <option value="{{$ciudad["id"]}}" >{{$ciudad["name"]}}</option>

                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class='input-group'>
                                                        <span class="input-group-addon">Ciudad Destino
                                                        </span>
                                                        <select type="text" class="form-control" name="ciudad_destino_regreso" id="ciudad_destino_regreso" 
                                                        placeholder="Ciudad Destino" required
                                                            js-path='viaje.eventos[0].pasajes[1].ciudad_destino_id'>
                                                            <option value='0'>Seleccione</option>
                                                            <?php foreach($ciudades as $ciudad){ ?>
                                                                <option value="{{$ciudad["id"]}}" >{{$ciudad["name"]}}</option>

                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <input type="submit" class="btn btn-default" data-loading-text="Registrando Viaje..." id="finishregister" 
                                    form="infoPaymentForm"
                                    value="Registrar Viaje" />
                                </form>
                                </div>     
                            </div>
                        </div>
                    </div>       
                </div>
            </div>
        </section>
        <input type="hidden" id="base_url" value ="{{URL::to('/')}}" />



@stop