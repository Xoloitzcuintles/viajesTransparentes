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
                      <li><a href="#">Perfiles</a></li>
                      <li class="active">Liliana Herrera Martín</li>
                    </ol>                
                    <div class="col-lg-3">
                        <h3>Liliana Herrera Martín </h3>
                        <div class="profilepic">
                            <img src="images/servidores/user.jpg" class="picture"/>
                        </div>
                        <p><a href="mailto:liliana.herrera@ifai.org.mx">liliana.herrera@ifai.org.mx</a></p>
                        <p><strong>Tipo de Personal:</strong> Confianza</p>
                        <p><strong>Nombre del Cargo:</strong> Secretaría Particular</p>
                        <p><strong>Unidad Administrativa:</strong> Comisionado</p>
                        <p><strong>Clave de Puesto:</strong> MAC03</p>
                        <div class="usertools">
                            <a href="" class="tool">
                                <span class="glyphicon glyphicon-plus"></span>
                            </a>
                            <a href="mailto:liliana.herrera@ifai.org.mx" class="tool">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </a>
                            <a href="" class="tool">
                                <span class="glyphicon glyphicon-map-marker"></span>
                            </a>                        
                        </div>
                    </div>   
                    <div class="col-lg-9">
                        <h3>Viajes realizados <span class="badge">42</span></h3>
                        <div class="panel panel-default">
                            <div class="panel-heading">Consultar Viajes</div>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th>Tipo de Viaje</th>
                                    <th>Num. Autorización</th>
                                    <th>Num. Oficio</th>
                                    <th>País de Origen</th>
                                    <th>País de Destino</th>
                                    <th>Viáticos</th>
                                    <th>Detalles</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Internacional</td>
                                    <td>ACT-PUB/03/04/2013.03.01</td>
                                    <td>IFAI/Comisionados/Ponencias/087/13</td>
                                    <td>México</td>
                                    <td>Chile</td>
                                    <td>450.00 USD</td>
                                    <td>
                                        <button type="button" class="btn btn-default btn-xs">
                                            <span class="glyphicon glyphicon-plus"></span> Detalles
                                        </button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Internacional</td>
                                    <td>ACT-PUB/03/04/2013.03.01</td>
                                    <td>IFAI/Comisionados/Ponencias/087/13</td>
                                    <td>México</td>
                                    <td>Chile</td>
                                    <td>450.00 USD</td>
                                    <td>
                                        <button type="button" class="btn btn-default btn-xs">
                                            <span class="glyphicon glyphicon-plus"></span> Detalles
                                        </button>
                                    </td>                                
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                        <h3>Estadísticas</h3>
                        <h4>Viáticos</h4>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            $3,000
                          </div>
                        </div>
                        <h4>Gasolina</h4>
                        <div class="progress">
                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                            $100,000
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-9">
                        <h3>Mapa de lugares</h3>
                        <div id="regions_div"></div>
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
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
          google.load("visualization", "1", {packages:["geomap"]});
          google.setOnLoadCallback(drawMap);

          function drawMap() {
            var data = google.visualization.arrayToDataTable([
              ['Country', 'Popularity'],
              ['Germany', 200],
              ['United States', 300],
              ['Brazil', 400],
              ['Canada', 500],
              ['France', 600],
              ['RU', 700]
            ]);

            var options = {};
            options['dataMode'] = 'regions';

            var container = document.getElementById('regions_div');
            var geomap = new google.visualization.GeoMap(container);

            geomap.draw(data, options);
          };
        </script>


    </body>
</html>