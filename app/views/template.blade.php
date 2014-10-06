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
        <!-- jQuery Version 1.11.0 -->
        <script src="{{ URL::asset('js/jquery-1.11.0.js') }}"></script>
        <link href="{{ URL::asset('css/datepicker.css') }}" rel="stylesheet">
    </head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

    <body id="page-top" class="index">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <a href="{{URL::to('/')}}" class="navbar-brand" id="travelogo">Travel logo</a>
                        <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=465561006870893&version=v2.0";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                        <div style="padding-left:300px;" class="fb-like" data-href="{{URL::to('/')}}" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>    </body>
                        <ul class="nav navbar-nav navbar-right">
                            @if(Request::url() === URL::to('/'))
                                <li class="page-scroll">
                                    <a href="#quees">¿Qué es?</a>
                                </li>
                                @if(!Auth::check())
                                    <li class="page-scroll">
                                        <a href="#registroaccesar">Accesar</a>
                                    </li>
                                @endif                            
                                <li class="page-scroll">
                                    <a href="#comofunciona">¿Cómo funciona?</a>
                                </li>
                                <li class="page-scroll">
                                    <a href="#contactanos">Contáctanos</a>
                                </li>
                            @else
                                <li class="page-scroll">
                                    <a href="{{URL::to('/')}}">Inicio</a>
                                </li>
                            @endif
                            
                            <?php if (!Auth::check() || Auth::user()->role_id == 3 ) { ?>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('/')}}/viajesApi/consulta"><span class="glyphicon glyphicon-plane"></span>Viajes</a></li>
                            <?php } ?>
                            <?php if (!Auth::check() || Auth::user()->role_id == 3 ) { ?>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('/')}}/servidores"><span class="glyphicon glyphicon-user"></span>Servidores</a></li>
                            <?php } ?>

                            <?php if (Auth::check()) { ?>
                                <?php if (Auth::user()->role_id < 2) { ?>
                                    <li class="dropdown">
                                        <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown">Viajes<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
                                            <?php if(Auth::check() && Auth::user()->servidor_id){ ?>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('/')}}/servidor/altaViaje">Añadir Viajes</a></li>
                                            <?php } ?>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('/')}}/viajesApi/consulta">Consultar Viajes</a></li>
                                        </ul>
                                    </li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('/')}}/servidores"><span class="glyphicon glyphicon-user"></span>Servidores</a></li>
                                <?php }  ?>
                                <?php if (Auth::user()->role_id == 1) { ?>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('/administrator')}}"><span class="glyphicon glyphicon-cog"></span>Administrador</a></li>
                                <?php }  ?>
                                <li class="page-scroll">
                                    <a href="{{URL::to('/users/logout')}}">Cerrar Sesión</a>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        @yield('content')

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <!-- Scrolling Nav JavaScript -->
        <script src="{{ URL::asset('js/jquery.easing.min.js') }}"></script>
        <script src="{{ URL::asset('js/scrolling-nav.js') }}"></script>
        <script src="{{ URL::asset('js/moment.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ URL::asset('js/es.js') }}"></script>
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
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-55346650-1', 'auto');
          ga('send', 'pageview');

        </script>
        <input type="hidden" id="base_url" value="{{URL::to('/')}}"/>


</html>
