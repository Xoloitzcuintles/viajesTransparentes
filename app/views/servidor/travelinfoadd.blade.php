@extends('servidor/layout')

@section('data')

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
                                <span class="count">1</span>Inforamción Servidor Público
                                <p>Debe revisar y confirmar que la información desplegada, relacionada con su servidor público sea correcta, una vez comprobado haga click en 'Añadir información de viaje'</p>
                            </li>
                            <li>
                                <span class="count">2</span>Información de Viaje
                                <p>En esta sección deberá </p>
                            </li>
                            <li>
                                <span class="count">3</span>Gastos Realizados
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsam</p>
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
                                        value="{{ $servidor["servidor"]["contact"]["apellidoPaterno"]." ".$servidor["servidor"]["contact"]["apellidoMaterno"]." ".$servidor["servidor"]["contact"]["nombre"] }}"/>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Unidad Administrativa
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="unidadAdministrativa" id="unidadAdministrativa" 
                                        placeholder="Cargo" disabled="disabled"
                                        value="{{$servidor["servidor"]["unidadAdministrativa"]["nombre"]}}" />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Cargo
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="cargo" id="cargo" 
                                        placeholder="Cargo" disabled="disabled"
                                        value="{{$servidor["servidor"]["cargo"]["nombre"]}}" />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Puesto
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="puesto" id="puesto" 
                                        placeholder="Puesto" disabled="disabled"
                                        value="{{$servidor["servidor"]["puesto"]["nombre"]}}" />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Clave Puesto
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="puesto" id="puesto" 
                                        placeholder="Puesto" disabled="disabled"
                                        value="{{$servidor["servidor"]["puesto"]["nombre"]}}" />
                                    </div>


                                    <input type="submit" class="btn btn-default" id="infouserbtn" value="Añadir información de evento" />
                                </div>
                                <div id="infoevento" class="tab-pane fade">
                                    <div class='input-group date' id='datetimepickbegin'>
                                        <input type='text' class="form-control" placeholder="Fecha inicio"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                    <input type="submit" class="btn btn-default" data-loading-text="Registrando Viaje..." id="finishregister" value="Añadir información de viaje" />
                                </div>     
                                <div id="infotravel" class="tab-pane fade">
                                    <div class='input-group date' id='datetimepickbegin'>
                                        <input type='text' class="form-control" placeholder="Fecha inicio"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                    <div class='input-group date' id='datetimepickend'>
                                        <input type='text' class="form-control" placeholder="Fecha final"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user"></span>
                                        </span>
                                        <input type="text" class="form-control" name="password" id="password" placeholder="Número de comisión" />
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user"></span>
                                        </span>
                                        <input type="text" class="form-control" name="password" id="password" placeholder="País de Origen" />
                                    </div>
                                    <div class='input-group date'>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user"></span>
                                        </span>
                                        <input type="text" class="form-control" name="password" id="password" placeholder="País de Destino" />
                                    </div>
                                    <div class="input-group">
                                        <select class="form-control">
                                            <option selected="selected">Seleccionar...</option>
                                            <option>Internacional</option>
                                            <option>Nacional</option>
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
                $('#infouserbtn,#infotravelbtn').click(function(){
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
            });
        </script>


@stop