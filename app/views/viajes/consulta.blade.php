@section('consulta')
                <script src="{{ URL::asset('js/lib/viajes/consulta.js') }}"></script>
                <div class="col-sm-3">
                    <h1>Búsqueda</h1>
                    <p>
                {{ Form::open(array('url' => '#', 'id' => 'consulta_viajes')) }}
                
                {{ Form::label('servidor', 'Servidor') }}
 
                {{ Form::text('servidor', Input::old('servidor'), array('id' => 'servidor_id')) }}
<!-- <br />
                {{ Form::label('username', 'Nick') }}
                {{ Form::text('username', Input::old('username')) }}
 <br />
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password') }}
 <br />
                {{ Form::label('password_confirmation', 'Confirm password') }}
                {{ Form::password('password_confirmation') }}
                !-->
                <br />
                {{ Form::submit('Buscar', array('class' => 'button expand round btn btn-default', 'id' => 'buscar_viajes_button')) }}
 
                {{ Form::close() }}
                    </p>
                </div>
@stop