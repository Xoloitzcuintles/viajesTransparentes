
@extends('ciudadano/layout')

@section('data')
<!-- Header Section -->
    <section>
        <div class="container">
            <p>Usuario: <span><?php echo $user->email; ?></span></p>
            <p>Nombre: <span><?php echo $user->name; ?></span></p>
        </div>
    </section>
@stop