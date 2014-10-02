@extends('template')

@section('content')
    <!-- Header Section -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 functions">
                    <h3><span class="glyphicon glyphicon-bullhorn"></span> Notificaciones</h3>
                    <p>Suscribete y sigue de cerca las últimas noticias de los servidores públicos.</p>
                    <h3><span class="glyphicon glyphicon-transfer"></span> Consultas</h3>
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
                    <h3>Accesar</h3>
                    <button type="button" class="btn btn-default btn-lg" id="js-accesar">
                        <span class="glyphicon glyphicon-lock"></span> Accesar a la Plataforma
                    </button>
                </div>
                <div class="col-sm-6 text-center">
                    <h3>Registrarse</h3>
                    <button type="button" class="btn btn-default btn-lg" id="js-registrarse">
                        <span class="glyphicon glyphicon-user"></span> Registrarse en la Plataforma
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-offset-1 hidesection" id="loginuser">
                    <p>
                        {{ Form::open(array('url' => 'users/login', 'id'=>'loginForm')) }}
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
                        {{ Form::close() }}
                    </p>
                </div>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ipsum obcaecati esse, nesciunt pariatur, nulla ipsa rerum possimus officiis, laboriosam voluptatibus consequatur. At beatae, mollitia eaque cum consequatur necessitatibus dolore.</p>
                </div>
                <div class="col-sm-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus excepturi ipsa, error magni mollitia, hic quaerat saepe sunt, molestiae nemo illo. Nobis animi quia voluptas reiciendis assumenda fugiat ab sit.
                </div>
                <div class="col-sm-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam fuga ipsa ducimus rerum quibusdam aliquid culpa enim illum recusandae, quis architecto modi aspernatur officia nisi inventore necessitatibus, soluta maiores asperiores.
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni id iusto eligendi quidem distinctio mollitia minus maiores, eaque temporibus, est, esse quae! Ab excepturi rerum, obcaecati! Maxime corporis, rerum labore.</p>
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
