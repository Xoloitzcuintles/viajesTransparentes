@extends('template')

@section('content')

    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Bienvenido</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Viajes Transpatentes</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="data" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Datos</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contáctanos</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="login" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Login</h1>
                    <p>
                        {{ Form::open(array('url' => 'users/login', 'id'=>'loginForm')) }}
                            Usuario:
                            <input type="text" name="username" id="username" />
                            <br />
                            Contraseña:
                            <input type="password" name="password" id="password" />
                            <input type="submit" class="btn btn-default" id="loginButton" value="Login!" />
                        {{ Form::close() }}
                    </p>
                </div>
            </div>
        </div>
    </section>

@stop