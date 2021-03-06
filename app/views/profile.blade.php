@extends('template')

@section('content')
        <section>
            <div class="container">
                <div class="loading"></div>
                <div class="row hidden">
<!--                     <ol class="breadcrumb">
                      <li><a href="#">Inicio</a></li>
                      <li><a href="#">Perfiles</a></li>
                      <li class="active">Liliana Herrera Martín</li>
                    </ol>  -->               
                    <div class="col-lg-3">
                        <h3 id="servidorName"></h3>
                        <div class="profilepic">
                            <img onerror="profile.imgError()" src="" class="picture"/>
                        </div>
                        <p><a id="servidorEmail" href="">Sin correo</a></p>
                        <p><strong>Tipo de Personal: </strong><span id="">--</span></p>
                        <p><strong>Nombre del Cargo: </strong><span id="nombrePuesto">--</span></p>
                        <p><strong>Unidad Administrativa: </strong><span id="unidadAdministrativa">--</span></p>
                        <p><strong>Clave de Puesto: </strong><span id="clavePuesto">--</span></p>
                        <div class="usertools">
                            <a href="" class="tool">
                                <span class="glyphicon glyphicon-plus"></span>
                            </a>
                            <a id="servidorEmailTool" href="mailto:liliana.herrera@ifai.org.mx" class="tool">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </a>
                            <?php if (Auth::check()) : ?>
                                <a href="/ciudadano/followServidor/<?php echo $servidorId; ?>" class="tool">
                                    <span class="glyphicon glyphicon-map-marker"></span>
                                </a>
                            <?php else : ?>
                                <a id="loginFirst" href="" class="tool">
                                    <span class="glyphicon glyphicon-map-marker"></span>
                                </a>
                            <?php endif; ?>                      
                        </div>
                    </div>   
                    <div class="col-lg-9">
                        <h3>Viajes realizados <span class="badge"></span></h3>
                        <div class="panel panel-default">
                            <div class="panel-heading">Consultar Viajes</div>
                            <table class="table" id="servidor_table">
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
                                <tbody id="viajesRows">
                                  
                                </tbody>
                            </table>
                        </div>
                        <h3>Estadísticas</h3>
                        <h4>Viáticos</h4>
                        <div class="progress">
                          <div class="progress-bar" id="viaticos-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            $<span id="viaticos_total">3,000</span>
                          </div>
                        </div>
                        <h4>Transportes</h4>
                        <div class="progress">
                          <div class="progress-bar progress-bar-info" id="transportes-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                            $<span id="transportes_total">3,000</span>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-9">
                        <h3>Mapa de lugares</h3>
                        <div id="regions_div"></div>
                        <h3>Comentarios</h3>
                        <div id="comments_div"><div class="fb-comments" data-href="{{Request::url()}}" data-numposts="5" data-colorscheme="light"></div></div>
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
<?php
        $servidor = json_decode($servidorData);
        ?>
        <input type="hidden" id="base_url" name="base_url" value="{{URL::to('/')}}" />
        <input type="hidden" id="servidor_id" name="servidor_id" value="{{$servidor->servidor->contact->id}}" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ URL::asset('js/jquery-1.11.1.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.easing.min.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/general-servidor.js') }}"></script>
        <script type="text/javascript">
            $(function(){
                profile.getServidorData(<?php echo $servidorData; ?>);
                profile.setProfile();
                profile.getTrips();
            });
        </script>
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
        
@stop