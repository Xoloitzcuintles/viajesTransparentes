@section('consulta')
                <script src="{{ URL::asset('js/lib/viajes/consulta.js') }}"></script>
                    <div class="col-sm-3">
                        <h3>Buscador</h3>
                            {{ Form::open(array('url' => '#', 'id' => 'consulta_viajes')) }}
                            
                            <div class='input-group'>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-search"></span>
                                </span>
                                {{ Form::text('servidor', Input::old('servidor'), array('id' => 'servidor_id','placeholder'=>'Buscar...','class'=>'form-control')) }}
                            </div>
                            <div class='input-group date' id='datetimepickbegin' data-date-format="DD/MM/YYYY">
                                <input type='text' class="form-control" placeholder="Fecha inicio"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                            <div class='input-group date' id='datetimepickend' data-date-format="DD/MM/YYYY">
                                <input type='text' class="form-control" placeholder="Fecha final"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>                            
                            <div class="input-group">
                                <select class="form-control" id="area_adscripcion">
                                    <option selected="selected">Área de adscripción</option>
                                <?php foreach($instituciones as $institucion){ ?>
                                        <option value="{{$institucion['id']}}">{{$institucion['name']}}</option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="input-group">
                                <label for="servidor">Tema</label>
                                <select class="form-control" id="servidor">
                                <?php foreach($temas as $tema){ ?>
                                        <option value="{{$tema['id']}}">{{$tema['name']}}</option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="input-group">
                                <label for="servidor">Servidor Público</label>
                                <select multiple class="form-control" id="servidor">
                                <?php foreach($servidores as $servidor){ ?>
                                        <option value="{{$servidor['id']}}">{{$servidor['nombre']." ".$servidor['apellidoPaterno']}}</option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="input-group">
                                <select class="form-control">
                                    <option selected="selected">Buscar por...</option>
                                    <option>Área de adscripción</option>
                                    <option>Tema</option>
                                    <option>Perfil servidor público</option>
                                    <option>Ubicación geográfica</option>
                                </select>
                            </div>
                            {{ Form::submit('Realizar búsqueda', array('class' => 'button expand round btn btn-default', 'id' => 'buscar_viajes_button')) }}
                        {{ Form::close() }}
                    </div>
@stop