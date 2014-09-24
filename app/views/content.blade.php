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
