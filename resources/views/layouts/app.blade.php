<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('/img/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="{{ asset('/js/all.js') }}" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="{{ asset('/css/font-family.css') }}" rel="stylesheet" /><!-- Merriweather-->
    <link href="{{ asset('/css/font-family2.css') }}" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="{{ asset('/css/magnific-popup.min.css') }}" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
    <!-- AOS ANIMATION -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/animation_aos/aos.css') }}">
</head>
<body>
    <div id="app">
       <!-- HEADER -->
        <div class="col-12 text-center barra-top m-0">
            <h5>CONOCE MÁS DE NUESTROS CURSOS <br class="d-block d-sm-block d-md-none d-lg-none"><a class="btn" href="#">Consulta las bases <span>aquí</span></a></h5>
        </div>
        <!-- <div class="info-nav">
            <div class="container">
                <div class="d-flex justify-content-between bd-highlight">
                    <div class="p-2 bd-highlight">
                        <a href="{{ asset('/')}}" class="logo">
                            <img src="{{ asset('/img/Logotipo/DF-logotipoheader.svg') }}" class="logo-black" alt="">
                        </a>
                    </div>
                    <div class="p-2 bd-highlight">
                        <ul class="menu-center">
                            <li>
                                <form action="" class="form-inline">
                                    <div class="input-group">
                                        <span class="input-group-append">
                                            <div class="input-group-text bg-transparent"><i class="fa fa-search"></i></div>
                                        </span>
                                        <input class="form-control py-2 border-right-0 border" type="search" id="example-search-input">
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="p-2 bd-highlight">
                        <ul class="menu-right">
                            <li class="menu-m">
                                <button class="navbar-toggler toggler-example toggle-menu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="text-white">
                                        <i class="fas fa-bars fa-1x"></i>
                                    </span>
                                </button>
                            </li>
                            <li>
                                @if (Auth::guest())
                                    <a class="btn" href="{{ url('/login') }}"> Iniciar sesión </a>
                                @else
                                    <a class="btn" href="{{ url('/logout') }}"> Cerrar Sesión </a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>    -->
        @include('layouts.template_navbar_responsive')
        <!-- END HEADER -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header p-0">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text icon-search" id="basic-addon1"><i class="fas fa-search fa-rotate-90"></i></span>
                            </div>
                            <input type="text" class="form-control form-search" placeholder="" aria-label="Username" aria-describedby="basic-addon1" id="txtSearch">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main data-aos="fade-in">
            @yield('content')
        </main>
        <!--footer-->
        <footer class="site-footer">
            <div class="container p-0 content-f1">
                <div class="row mrl-q">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 text.sm-center content-footer-logo">
                        <a href=""><img src="{{ asset('/img/Logotipo/DF-logotipopiedepagina.svg') }}" alt="index.php"></a>
                        <div class="row justify-content-start">
                            <div class="col-md-11 col-lg-11">
                                <p>Academia de trading fundada en el 2018 con un único propósito formar traders profesionales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 text-center text.sm-center text-md-left text-lg-left content-comunidad">
                    <h6>COMUNIDAD</h6>
                        <ul>
                            <li>
                                <a href="#">Entradas</a>
                            </li>
                            <li>
                                <a href="#">Cryptos</a>
                            </li>
                            <li>
                                <a href="#">Futuros masding</a>
                            </li>
                            <li>
                                <a href="#">Telegram</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-2 text-center text.sm-center text-md-left text-lg-left content-cryptos">
                    <h6>CRYPTOS</h6>
                        <ul>
                            <li>
                                <a href="#">Entradas</a>
                            </li>
                            <li>
                                <a href="#">Básico</a>
                            </li>
                            <li>
                                <a href="#">Intermedio</a>
                            </li>
                            <li>
                                <a href="#">Avanzado</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 text-center text.sm-center text-md-left text-lg-left content-cursos-live">
                        <h6>CURSOS EN VIVO</h6>
                        <ul>
                            <li>
                                <a href="#">Calendario</a>
                            </li>
                            <li>
                                <a href="#">Lives</a>
                            </li>
                            <li>
                                <a href="#">Próximo evento</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row py-4 d-flex align-items-center socials-medias">
                  <div class="col-md-6 col-lg-4 text-center text-md-left">
                    <a class="fb-ic">
                      <i class="fab fa-whatsapp mr-4"> </i>
                    </a>
                    <a class="ins-ic">
                      <i class="fab fa-instagram mr-4"> </i>
                    </a>
                    <a class="fb-ic">
                      <i class="fab fa-facebook-f mr-4"> </i>
                    </a>
                    <a class="tw-ic">
                      <i class="fab fa-twitter mr-4"> </i>
                    </a>
                  </div>
                  <div class="col-md-6 col-lg-8 text-center text-md-left mb-4 mb-md-0">
                      <h6 class="mb-0">Copyright © MINDS OVER MARKET | <a href="">Politicas De Privacidad</a> | <a href="">Términos Y Condiciones</a></h6>
                  </div>            
                </div>
            </div>
        </footer>
        <!--end footer-->
        <!-- Bootstrap core JS-->
        <script src="{{ asset('/js/jquery-3.5.1.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Third party plugin JS-->
        <script src="{{ asset('/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.magnific-popup.min.js')}}"></script>
        <script type='text/javascript' src="{{ asset('/js/main.js') }}"></script>
        <script src="{{ asset('/js/wow.min.js') }}"></script>
        <!-- Core theme JS-->
        <!-- <script src="{{ asset('/js/scripts.js') }}"></script> -->
        <!-- AOS ANIMATION -->
        <script type="text/javascript" src="{{ asset('/animation_aos/aos.js') }}"></script>
        <!-- INIT AOS -->
        <script type="text/javascript" src="{{ asset('/js/animation.js') }}"></script>
    </div>
    </section> 
</body>
</html>
