@extends('template')

@section('content')
<script src="{{ URL::asset('js/lib/viajes/viajes.js') }}"></script>

    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                @yield('consulta')
                <div class="col-sm-9">
                    <h3>Viajes realizados <span class="badge" id="viajes_count">0</span></h3>
                        <div class="panel panel-default">
                            <div class="panel-heading">Consultar Viajes</div>
                            <table class="table" id="viajes_table">
                                <thead>
                                  <tr>
                                    <th>Tipo de Viaje</th>
                                    <th>Num. Acuerdo</th>
                                    <th>Num. Oficio</th>
                                    <th>Ciudad de Origen</th>
                                    <th>Ciudad de Destino</th>
                                    <th>Viáticos</th>
                                    <th>Detalles</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <!--  <tr>
                                    <td>Internacional</td>
                                    <td>ACT-PUB/03/04/2013.03.01</td>
                                    <td>IFAI/Comisionados/Ponencias/087/13</td>
                                    <td>México</td>
                                    <td>Chile</td>
                                    <td>450.00 USD</td>
                                    <td>
                                        <button type="button" class="btn btn-default btn-xs">
                                            <span class="glyphicon glyphicon-plus"></span> Detalles
                                        </button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Internacional</td>
                                    <td>ACT-PUB/03/04/2013.03.01</td>
                                    <td>IFAI/Comisionados/Ponencias/087/13</td>
                                    <td>México</td>
                                    <td>Chile</td>
                                    <td>450.00 USD</td>
                                    <td>
                                        <button type="button" class="btn btn-default btn-xs">
                                            <span class="glyphicon glyphicon-plus"></span> Detalles
                                        </button>
                                    </td>                                
                                  </tr>!-->
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </section>

@stop