<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Viajes Transparentes - Perfiles</title>
        <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
        <!-- Bootstrap Core CSS -->
        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ URL::asset('css/estilos.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/datepicker.css') }}" rel="stylesheet">
    </head>
    <body id="page-top" class="index">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#page-top" class="navbar-brand">
                            <span class="glyphicon glyphicon-globe icon-logo"></span> Viajes Transparentes
                        </a>

                    </div>

                    <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                            <li>
                                <a href="viajes.html">Viajes</a>
                            </li>
                            <li>
                                <a href="perfiles.html">Perfiles</a>
                            </li>
                            <li>
                                <a href="#">Información CSV</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsam</p>
                            </li>
                            <li>
                                <span class="count">2</span>Información de Viaje
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsam</p>
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
                                <li><a href="#infotravel" data-toggle="tab">Información del Viaje</a></li>
                                <li><a href="#infomoney" data-toggle="tab">Gastos Realizados</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="infouser" class="tab-pane active">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="foto" id="foto" placeholder="Fotografía a publicar" />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="appat" id="appat" placeholder="Apellido Paterno" />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="apmat" id="apmat" placeholder="Apellido Materno" />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>                            
                                        <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Cargo" />
                                    </div>
                                    <input type="submit" class="btn btn-default" id="infouserbtn" value="Añadir información de viaje" />
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
                                    <div class='input-group date' id='datetimepickend'>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user"></span>
                                        </span>
                                        <input type="text" class="form-control" name="password" id="password" placeholder="Número de comisión" />
                                    </div>
                                    <div class='input-group date' id='datetimepickend'>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user"></span>
                                        </span>
                                        <input type="text" class="form-control" name="password" id="password" placeholder="País de Origen" />
                                    </div>
                                    <div class='input-group date' id='datetimepickend'>
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
        <footer class="text-center">
                <div class="footer-below">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                Todos los Derechos Reservados &copy; 2014
                            </div>
                        </div>
                    </div>
                </div>
        </footer>    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
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

    </body>
</html>