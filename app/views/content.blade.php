@extends('template')

@section('content')
    <!-- Header Section -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 functions">
                    <h3><span class="glyphicon glyphicon-bullhorn"></span> Notificaciones</h3>
                    <p>ipsum dolor sit amet, consectetur adipisicing elit. Laborum porro dolor atque quidem, debitis temporibus, illum nihil.</p>
                    <h3><span class="glyphicon glyphicon-transfer"></span> Consultas</h3>
                    <p>ipsum dolor sit amet, consectetur adipisicing elit. Laborum porro dolor atque quidem, debitis temporibus, illum nihil.</p>
                    <h3><span class="glyphicon glyphicon-thumbs-up"></span> Comparte</h3>
                    <p>ipsum dolor sit amet, consectetur adipisicing elit. Laborum porro dolor atque quidem, debitis temporibus, illum nihil.</p>
                    <h3><span class="glyphicon glyphicon-phone"></span> Accesa desde tu Móvil</h3>
                    <p>ipsum dolor sit amet, consectetur adipisicing elit. Laborum porro dolor atque quidem, debitis temporibus, illum nihil.</p>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ipsum obcaecati esse, nesciunt pariatur, nulla ipsa rerum possimus officiis, laboriosam voluptatibus consequatur. At beatae, mollitia eaque cum consequatur necessitatibus dolore.</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-user icons-info"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus excepturi ipsa, error magni mollitia, hic quaerat saepe sunt, molestiae nemo illo. Nobis animi quia voluptas reiciendis assumenda fugiat ab sit.</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-stats icons-info"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam fuga ipsa ducimus rerum quibusdam aliquid culpa enim illum recusandae, quis architecto modi aspernatur officia nisi inventore necessitatibus, soluta maiores asperiores.</p>
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
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                      <span class="caret"></span>
                                      <span class="sr-only">Toggle Dropdown</span>
                                    </button>                                    
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="">Registro como</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#">Ciudadano</a></li>
                                      <li><a href="#">Servidor</a></li>
                                      <li><a href="#">Administrador</a></li>
                                    </ul>
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
    <footer class="text-center">
            <div class="footer-above">
                <div class="container">
                    <div class="row">
                        <div class="footer-col col-md-4">
                            <h3>Acerca de</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut nihil laudantium illum culpa rem dignissimos eos ratione iste libero labore atque, illo nulla quisquam qui aperiam minima tempora numquam error.</p>
                        </div>
                        <div class="footer-col col-md-4">
                            <h3>Servidores Públicos</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem earum quo optio quibusdam, odit, tempore debitis cum, suscipit inventore non veniam iusto? Magnam dolore molestiae optio, vel atque at iure!</p>
                        </div>
                        <div class="footer-col col-md-4">
                            <h3>Destinos principales</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni id iusto eligendi quidem distinctio mollitia minus maiores, eaque temporibus, est, esse quae! Ab excepturi rerum, obcaecati! Maxime corporis, rerum labore.</p>
                        </div>
                    </div>
                </div>
            </div>
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
@stop
