<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Intranet Transaltisa</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('css/compiled.min.css')}}" rel="stylesheet">
    <!-- #FAVICONS -->
    <link rel="shortcut icon" href="{{asset('img/favicon/logotipo_trn.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('img/favicon/logotipo_trn.ico')}}" type="image/x-icon">

    <style>
        .intro-2 {
            background: url("img/bg_login1.jpg")no-repeat center center;
            background-size: cover;
        }

        .top-nav-collapse {
            background-color: #3f51b5 !important;
        }

        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }

        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5 !important;
            }
        }

        .hm-gradient .full-bg-img {
            background: -webkit-linear-gradient(45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
            background: -webkit-gradient(linear, 45deg, from(rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%)));
            background: linear-gradient(to 45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
        }

        .card {
            background-color: rgba(126, 123, 215, 0.2);
        }

        .md-form .prefix {
            font-size: 1.5rem;
            margin-top: 1rem;
        }

        .md-form label {
            color: #ffffff;
        }

        h6 {
            line-height: 1.7;
        }

        @media (max-width: 740px) {
            .full-height,
            .full-height body,
            .full-height header,
            .full-height header .view {
                height: 1040px;
            }
        }
    </style>
</head>

<body>

<!--Main Navigation-->
<header>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">

    </nav>

    <!--Intro Section-->
    <section class="view intro-2 hm-gradient">
        <div class="full-bg-img">
            <div class="container flex-center">
                <div class="d-flex align-items-center content-height">
                    <div class="row flex-center pt-5 mt-3">
                        <div class="col-md-6 text-center text-md-left mb-5">
                            <div class="white-text">
                                <h1 class="h1-responsive font-bold wow fadeInLeft" data-wow-delay="0.3s">Bienvenido a nuestra Intranet! </h1>
                                <hr class="hr-light mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                                <h6 class="wow fadeInLeft" data-wow-delay="0.3s">Ingresa tu usuario y contraseña.</h6>
                                la informacion que necesitas a  tu alcance como: Boletas de pago, alerta de vacaciones, eventos internos, fotografías, entre otros.
                                <br>
                                <a class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Saber más...</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-5">
                            <!--Form-->
                            <form id="login-form" action="{{ url('/login') }}" method="POST" class="smart-form client-form" novalidate>
                                {{ csrf_field() }}
                            <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                <div class="card-body">
                                    <!--Header-->
                                    <div class="text-center">
                                        <h3 class="white-text">
                                            <i class="fa fa-user white-text"></i> Login</h3>
                                        <hr class="hr-light">
                                    </div>

                                    <!--Body-->
                                    <div class="md-form">
                                        <i class="fa fa-user prefix white-text active"></i>
                                        <input type="text" id="usu_usuario" name="usu_usuario" class="form-control"  value="" style="color:#fff">
                                        <label for="form3" class="active">Usuario</label>
                                    </div>

                                    <div class="md-form">
                                        <i class="fa fa-lock prefix white-text active"></i>
                                        <input type="password" id="usu_password" name="usu_password" class="form-control" value="" style="color:#fff">
                                        <label for="form4">Contraseña</label>
                                    </div>

                                    <div class="text-center">
                                        <button class="btn btn-indigo" type="submit">Iniciar Sesión</button>
                                        <hr class="hr-light mb-3 mt-4">

                                        <div class="inline-ul text-center d-flex justify-content-center">
                                            <a class="icons-sm tw-ic">
                                                <i class="fa fa-twitter white-text"></i>
                                            </a>
                                            <a class="icons-sm li-ic">
                                                <i class="fa fa-linkedin white-text"> </i>
                                            </a>
                                            <a class="icons-sm ins-ic">
                                                <i class="fa fa-instagram white-text"> </i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            </form>
                            <!--/.Form-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</header>
<!--Main Navigation-->

<!-- SCRIPTS -->
<script type="text/javascript" src="{{asset('js/compiled.min.js')}}"></script>
<script>
    new WOW().init();

    runAllForms();
    $(function() {
        // Validation
        $("#login-form").validate({
            // Rules for form validation
            rules : {
                user : {
                    required : true,
                },
                password : {
                    required : true,
                }
            },

            // Messages for form validation
            messages : {
                user : {
                    required : 'Ingrese su usuario'
                },
                password : {
                    required : 'Ingrese su contraseña'
                }
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });
    });


</script>

</body>

</html>