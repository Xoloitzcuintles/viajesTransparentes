@extends('template')

@section('content')
    <script src="{{ URL::asset('js/lib/user/register.js') }}"></script>

    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Registro</h1>
                    <p>
                        {{ Form::open(array('url' => 'users/register', 'id'=>'registerForm')) }}
                            Correo Electrónico:
                            <input type="text" name="username" id="username" />
                            <br />
                            Contraseña:
                            <input type="password" name="password" id="password" />
                            <br />
                            Repetir:
                            <input type="password" name="repeatPassword" id="repeatPassword" />
                            <br />
                            <input type="submit" class="btn btn-default" 
                            name="registerButton" id="registerButton" value="Registrarse" />
                        {{ Form::close() }}
                    </p>
                </div>
            </div>
        </div>
    </section>

@stop