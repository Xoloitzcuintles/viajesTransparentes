<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>
            {{{ isset($title) ? 'Viajes Transparentes - '.$title : 'Viajes Transparentes' }}}
        </title>
        <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
        <!-- Bootstrap Core CSS -->
        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ URL::asset('css/estilos.css') }}" rel="stylesheet">
    </head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

    <body id="page-top" class="ciudadano">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="/ciudadano/" class="navbar-brand">
                            <span class="glyphicon glyphicon-globe icon-logo"></span> Viajes Transparentes
                        </a>

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="page-scroll">
                                <a href="{{URL::to('/')}}/ciudadano">Dashboard</a>
                            </li>
                            <li class="page-scroll">
                                <a href="{{URL::to('/')}}/ciudadano/account">Mi cuaneta</a>
                            </li>
                            <li class="page-scroll">
                                <a href="{{URL::to('/')}}/users/logout">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        @yield('data')

        <!-- jQuery Version 1.11.0 -->
        <script src="{{ URL::asset('js/jquery-1.11.0.js') }}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <!-- Scrolling Nav JavaScript -->
        <script src="{{ URL::asset('js/jquery.easing.min.js') }}"></script>
        <script src="{{ URL::asset('js/scrolling-nav.js') }}"></script>
        <script type="text/javascript">
            // jQuery for page scrolling feature - requires jQuery Easing plugin
            $(function() {
                $('.page-scroll a').bind('click', function(event) {
                    var $anchor = $(this);
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500, 'easeInOutExpo');
                    event.preventDefault();
                });
                // Highlight the top nav as scrolling occurs
                $('body').scrollspy({
                    target: '.navbar-fixed-top'
                })            
            });
        </script>
        <input type="hidden" name="base_url" id="base_url" value="{{URL::to('/')}}"/>
    </body>

</html>
