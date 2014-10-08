@extends('template')

@section('content')
    <div id="topage">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </div>
    <!-- Header Section -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 functions">
                    <h3><span class="glyphicon glyphicon-bullhorn"></span> Notificaciones</h3>
                    <p>Suscribete y sigue de cerca las últimas noticias de los servidores públicos.</p>
                    <h3><span class="glyphicon glyphicon-transfer"></span> Consultas</h3>
                    <a href="{{URL::to('/servidores')}}"><button type="button" class="btn btn-default btn-lg" id="consultarServidoresButton">
                        <span class="glyphicon glyphicon-user"></span> Consultar Servidores
                    </button></a>
                    <a href="{{URL::to('/viajesApi/consulta')}}"><button type="button" class="btn btn-default btn-lg" id="consultarViajesButton">
                        <span class="glyphicon glyphicon-plane"></span> Consultar Viajes
                    </button></a>
                    <p>Reliza consultas sobre los viajes realizados por los servidores públicos y obtene información filtrada, gráficas, comparaciones y otras opciones más.</p>
                    <h3><span class="glyphicon glyphicon-thumbs-up"></span> Comparte</h3>
                    <p>Depués de realizar tus consultas comparte los resultados obtenidos a traves de las redes sociales</p>
                    <h3><span class="glyphicon glyphicon-phone"></span> Accesa desde tu Móvil</h3>
                    <p>Consulta toda la información necesaria a través de tu dispositivo móvil desde cualquier lugar</p>
                </div>
                <div class="col-lg-6">
                    <img alt="" src="images/travel.png" class="img-responsive diagram">
                </div>
            </div>
        </div>
    </header>
    <!-- Intro Section -->
    <section id="quees">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>¿Qué es?</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-info-sign icons-info"></span>
                    <p>Sistema que te permite realizar consultas, visualizar y comparar los viajes de los servidores públicos considerando datos interesantes como:
Área de adscripción o tema perfil de un servidor público, nivel jerárquico del servidor, ubicación geográfica, duración del viaje, etc
                    </p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-user icons-info"></span>
                    <p>Podrás obtener la información respecto a los viajes realizados por los servidores públicos y y filtrar la información obtenida de acuerdo a tus necesidades. En los perfiles de los servidores públicos podrás visualizar el perfil con sus datos de mayor relevancia como son: correo electrónico, nombre del cargo y unidad administrativa.</p>
                </div>
                <div class="col-sm-4">
                    <a href="{{URL::to('/viajesApi/consulta')}}"><span class="glyphicon glyphicon-stats icons-info"></span></a>
                    <p>El sistema permite realizar comparaciones entre los viajes realizados por los servidores públicos, a través de búsquedas específicas, gráficas entre otros.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section -->
<?php if(!Auth::check()){ ?>
    <section id="registroaccesar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Accesar Plataforma</h2>
                    <hr>
                </div>
            </div>
                <div class="row">
                        <div class="col-sm-6 text-center">
                            <?php if(!Auth::check()){ ?>
                            <!--<h3>Accesar</h3>
                            <button type="button" class="btn btn-default btn-lg" id="js-accesar">
                                <span class="glyphicon glyphicon-lock"></span> Accesar a la Plataforma
                            </button>!-->
                            {{ Form::open(array('url' => 'users/login', 'id'=>'loginFormAdmin')) }}
                                <input type="hidden" id="username" name="username" value="admin@ifai.gob.mx"/>
                                <input type="hidden" id="password" name="password" value="admin"/>
                                <input type="submit" class="btn btn-default" id="loginButtonAdmin" value="Ingresar como Administrador" />
                            {{ Form::close() }}
                            {{ Form::open(array('url' => 'users/login', 'id'=>'loginFormServidor')) }}
                                <input type="hidden" id="username" name="username" value="servidor@ifai.gob.mx"/>
                                <input type="hidden" id="password" name="password" value="servidor"/>
                                <input type="submit" class="btn btn-default" id="loginButtonServidor" value="Ingresar como Servidor Público" />
                            {{ Form::close() }}
                            {{ Form::open(array('url' => 'users/login', 'id'=>'loginFormCiudadano')) }}
                                <input type="hidden" id="username" name="username" value="ciudadano@ifai.gob.mx"/>
                                <input type="hidden" id="password" name="password" value="ciudadano"/>
                                <input type="submit" class="btn btn-default" id="loginButtonCiudadano" value="Ingresar como Ciudadano" />
                            {{ Form::close() }}
                            <?php } else { ?>
                            <h3>Ir a Perfil</h3>
                            <button type="button" class="btn btn-default btn-lg" id="js-perfil">
                                <span class="glyphicon glyphicon-lock"></span> Ir a Mi Perfil
                            </button>
                            <?php } ?>
                        </div>
                    <div class="col-sm-6 text-center">
                        <h3>Registrarse</h3>
                        <button type="button" class="btn btn-default btn-lg" id="js-registrarse">
                            <span class="glyphicon glyphicon-user"></span> Registrarse en la Plataforma
                        </button>
                    </div>
                </div>
            <div class="row">
                <?php if( !Auth::check() ){ ?>
                <div class="col-sm-4 col-md-offset-1 hidesection" id="loginuser">
                    <p>
<!--                        {{ Form::open(array('url' => 'users/login', 'id'=>'loginForm')) }}
                            <div class="input-group">
                                <span>
                                    Usuarios de prueba:<br>
                                    <ul>
                                        <li>us: admin@ifai.gob.mx pw:admin</li>
                                        <li>us: servidor@ifai.gob.mx pw:servidor</li>
                                        <li>us: ciudadano@ifai.gob.mx pw:ciudadano</li>
                                </span>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de usuario" />
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-lock"></span>
                                </span>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" />
                            </div>
                            <input type="submit" class="btn btn-default" id="loginButton" value="Accesar" />
                        {{ Form::close() }} !-->
                        

                    </p>
                </div>
                <?php } else { ?>
                <div class="col-sm-4 col-md-offset-1 hidesection" id="loginuser">
                    <p>
                    </p>
                </div>
                <?php } ?>
                <div class="col-sm-4 col-md-offset-2 hidesection" id="registeruser">
                    <p>
                        {{ Form::open(array('url' => 'users/register', 'id'=>'registerForm')) }}
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de usuario" />
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-lock"></span>
                                </span>                            
                                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" />
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-lock"></span>
                                </span>
                                <input type="password" class="form-control" name="repeatPassword" id="repeatPassword" placeholder="Repetir contraseña"/>
                            </div>
                            <div class="btn-group">
                                    <input type="submit" class="btn btn-default" name="registerButton" id="registerButton" value="Registrarse" />
                                    <!--<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                      <span class="caret"></span>
                                      <span class="sr-only">Toggle Dropdown</span> !-->
                                    </button>                                    
                                    <!--<ul class="dropdown-menu" role="menu">
                                      <li><a href="">Registro como</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#">Ciudadano</a></li>
                                      <li><a href="#">Servidor</a></li>
                                      <li><a href="#">Administrador</a></li>
                                    </ul>!-->
                            </div>                            
                        {{ Form::close() }}
                    </p>
                </div>
            </div>
        </div>
    </section>    
<?php } ?>
    <!-- VT Section -->
    <section id="mediosvt">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>En Medios</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="//www.youtube.com/embed/0lqWkIdayIA?rel=0&vq=hd1080"></iframe>
                    </div>
                </div>
                <div class="col-sm-6">
                    <p>En este video podrás encontrar una breve explicación sobre el desarrollo de nuestro sistema, así como las funcionalidades principales y características más importantes.</p>
                    <div class="btn-group btn-group-justified social">
                        <a class="btn btn-default fb" role="button">Facebook</a>
                        <a class="btn btn-default tw" role="button">Twitter</a>
                        <a class="btn btn-default yt" role="button">You Tube</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section id="comofunciona">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>¿Cómo funciona?</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <p>Sólo es necesario accesar a nuestro sistema dando click en el siguiente enlace <a href="">Consultar información</a>, ahí podrás encontrar la información necesaria sobre los viajes realizados por los servidores públicos así como el dinero utilizado, fechas, destino, entre otras funcionalidades.</p>
                </div>
                <div class="col-sm-4">
                        Una vez dentro realiza tus búsquedas de una manera fácil y sencilla, compara datos y públicalos en tus redes sociales, o si lo prefieres exporta la inforamción obtenida para desṕues utilizarla.
                </div>
                <div class="col-sm-4">
                        Sigue a tu servidor público de cerca, esto te permitira recibir notificaciones vía correo electrónico respecto a los viajes realizados, actualizaciones y datos interesantes que recibirás en tiempo real.
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section id="contactanos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contáctanos</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form novalidate="" id="contactForm" name="sentMessage">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nombre</label>
                                <input type="text" data-validation-required-message="Please enter your name." required="" id="name" placeholder="Nombre" class="form-control">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Correo Electrónico</label>
                                <input type="email" data-validation-required-message="Please enter your email address." required="" id="email" placeholder="Correo Electrónico" class="form-control" aria-invalid="false">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Número telefónico</label>
                                <input type="tel" data-validation-required-message="Please enter your phone number." required="" id="phone" placeholder="Número telefónico" class="form-control">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mensaje</label>
                                <textarea data-validation-required-message="Please enter a message." required="" id="message" placeholder="Mensaje" class="form-control" rows="5"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button class="btn btn-success btn-default" type="submit">Enviar Comentario</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
            <div class="footer-above">
                <div class="container">
                    <div class="row">
                        <div class="footer-col col-md-4">
                            <h3 class="text-center">Acerca de</h3>
                            <p>Sistema de Viajes Transparentes te permite consultar, visualizar y comparar los viajes de trabajo, considerando datos interesantes como:</p>
                            <ul>
                                <li>Área de adscripción</li>
                                <li>Perfil de un servidor público</li>
                                <li>Fecha o período de tiempo</li>
                                <li>Ubicación geográfica</li>
                                <li>Duración de viaje</li>
                                <li>Costo</li>
                            </ul>
                        </div>
                        <div class="footer-col col-md-4">
                            <h3 class="text-center">Servidores Públicos</h3>
                            <ul id="js-servidoresList" class="servidoresList"></ul>
                        </div>
                        <div class="footer-col col-md-4">
                            <h3 class="text-center">Destinos principales</h3>
                            <div class="alert alert-info" align="center" role="alert">Aún no contamos con información registrada</div>
                            <div class="notinformation">
                                <span class="glyphicon glyphicon-map-marker"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-below text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            Todos los Derechos Reservados &copy; 2014
                        </div>
                    </div>
                </div>
            </div>
        </footer>    
@stop
