@extends('template')

@section('content')

    <section id="intro" class="intro-section">
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