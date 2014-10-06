@extends('template')

@section('content')
<!-- Header Section -->
    <script src="{{ URL::asset('js/lib/servidor/servidores.js') }}"></script>

    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Servidores Públicos Registrados <span class="badge" id="servidores_count">0</span></h3>
                    <div class="panel panel-default">
                        <div class="panel-heading">Consultar Viajes</div>
                        <table class="table" id="servidores_table">
                            <thead>
                              <tr>
                                <th>Nombre</th>
                                <th>Cargo</th>
                                <th>Puesto</th>
                                <th>Unidad Administrativa</th>
                                <th>Viajes</th>
                                <th>Gasto</th>
                                <th>&nbsp;</th>
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