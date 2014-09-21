@extends('template')

@section('content')

    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Login</h1>
                    <p>
                        <form id="loginForm">
                            Usuario:
                            <input type="text" name="username" id="username" />
                            <br />
                            Contraseña:
                            <input type="password" name="password" id="password" />
                        </form>
                    </p>
                    <a class="btn btn-default" id="loginButton">Login!</a>
                </div>
            </div>
        </div>
    </section>

@stop