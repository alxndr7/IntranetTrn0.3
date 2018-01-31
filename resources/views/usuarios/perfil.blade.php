@extends('layouts.master')

@section('content')


    <style>
        .modal {
            width: 80%;
        }
    </style>
    <!-- MAIN PANEL -->
    <div id="main" role="main">

    <div id="content">

        <!-- end row -->
        <!-- row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-2">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <div class="well well-light well-sm no-margin no-padding">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div id="myCarousel" class="carousel fade profile-carousel">
                                            <div class="air air-bottom-right padding-10">
                                                <a href="" class="btn txt-color-white bg-color-teal btn-sm"><i class="fa fa-check"></i> Follow</a>&#xA0;
                                                <a href="" class="btn txt-color-white bg-color-pinkDark btn-sm"><i class="fa fa-link"></i> Connect</a>
                                            </div>
                                            <div class="air air-top-left padding-10">
                                                <h4 class="txt-color-white font-md"></h4>
                                            </div>
                                            <ol class="carousel-indicators">
                                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <!-- Slide 1 -->
                                                <div class="item active">
                                                    <img src="{{url('img/demo/s1.jpg')}}" alt="demo user">
                                                </div>
                                                <!-- Slide 2 -->
                                                <div class="item">
                                                    <img src="{{url('img/demo/s2.jpg')}}" alt="demo user">
                                                </div>
                                                <!-- Slide 3 -->
                                                <div class="item">
                                                    <img src="{{url('img/demo/m3.jpg')}}" alt="demo user">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-3 profile-pic">
                                                <img src='http://172.20.1.11:7777/Sistemas/adjuntos/RRHH/personal/{{Auth::user()->pers_id}}.JPG'  onerror="this.src='http://172.20.1.11:7777/Sistemas/adjuntos/RRHH/personal/0.JPG'" alt='YO'  width="90" height="90" >

                                                <div class="padding-10">
                                                    <h4 class="font-md"><strong>348</strong>
                                                        <br>
                                                        <small>Horas conectadas</small>
                                                    </h4>
                                                    <br>
                                                    <h4 class="font-md"><strong>68</strong>
                                                        <br>
                                                        <small>Días trabajados</small>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <h1><span class="semi-bold">{{$info_usuario->nombre1}} {{$info_usuario->nombre2}}</span>
                                                    <br>
                                                    <small> {{$info_usuario->puesto_nombre}} </small>
                                                </h1>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <p class="text-muted">
                                                            <i class="fa fa-phone"></i>&#xA0;&#xA0;(<span class="txt-color-darken">+51</span>) <span class="txt-color-darken"></span><span class="txt-color-darken">{{$info_usuario->telef_celular}}</span>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted">
                                                            <i class="fa fa-envelope"></i>&#xA0;&#xA0;<a href="mailto:simmons@smartadmin">{{$info_usuario->mail_trn}} - {{$info_usuario->mail_personal}}</a>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted">
                                                            <i class="fa fa-calendar"></i>&#xA0;&#xA0;<span class="txt-color-darken"><a href="" rel="tooltip" title="" data-placement="top" data-original-title="Create an Appointment"></a> {{Carbon\Carbon::parse($info_usuario->nac_fecha)->format('m/d/Y')}} - {{$info_usuario->nac_dist}}</span>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted">
                                                            <i class="fa fa-map-marker"></i>&#xA0;&#xA0;<span class="txt-color-darken">{{$info_usuario->dir_dist}}<a href="" rel="tooltip" title="" data-placement="top" data-original-title="Create an Appointment"></a> </span>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted">
                                                            <i class="fa fa-home"></i>&#xA0;&#xA0;<span class="txt-color-darken">{{$info_usuario->direccion}} {{$info_usuario->referencia_dir}} <a href="" rel="tooltip" title="" data-placement="top" data-original-title="Create an Appointment"></a></span>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted">
                                                            <i class="fa fa-credit-card"></i>&#xA0;&#xA0;<span class="txt-color-darken">46064227 <a href="" rel="tooltip" title="" data-placement="top" data-original-title="Create an Appointment"></a></span>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted">
                                                            <i class="fa fa-circle-o-notch"></i>&#xA0;&#xA0;<span class="txt-color-darken"> {{$info_usuario->estado}}  <a href="" rel="tooltip" title="" data-placement="top" data-original-title="Create an Appointment"></a></span>
                                                        </p>
                                                    </li>
                                                </ul>
                                                <br>

                                                <p class="font-md">
                                                    <i>A cerca de mi</i>
                                                </p>

                                                <p>
                                           Descripción...
                                                </p>
                                                <br>
                                                <br>
                                            </div>
                                            <div class="col-sm-4" style="text-align: center">
                                                <h1>
                                                    <small></small>
                                                </h1>
                                                <ul class="list-inline friends-list">
                                                    <li style="text-align: center">
                                                        <button type="button" class="btn btn-labeled btn-danger" onclick="modal_ver_firma();">
                                                            <span class="btn-label"><i class="fa fa-key"></i></span>Cambiar Contraseña
                                                        </button>
                                                    </li>
                                                </ul>
                                                <ul class="list-inline friends-list">
                                                    <li style="text-align: center">
                                                        <button type="button" class="btn btn-labeled bg-color-blue txt-color-white" onclick="modal_ver_firma();">
                                                            <span class="btn-label"><i class="fa fa-envelope-o"></i></span>Firma Outlook 365
                                                        </button>
                                                    </li>
                                                </ul>
                                                <ul class="list-inline friends-list">
                                                    <li style="text-align: center">
                                                        <button type="button" class="btn btn-labeled bg-color-blue txt-color-white" onclick="modal_ver_firma();">
                                                            <span class="btn-label"><i class="fa fa-envelope-o"></i></span>Firma Outlook
                                                        </button>
                                                    </li>
                                                </ul>

                                                <form id="change_passw" action="{{ url('/cambiar_passw') }}" method="POST"  class="smart-form hide" novalidate>
                                                    {{ csrf_field() }}
                                                    <header>
                                                        Cambio de contraseña
                                                    </header>

                                                    <fieldset>
                                                        <section>
                                                            <label class="input"> <i class="icon-append fa fa-lock"></i>
                                                                <input type="password" name="password" id="password" placeholder="Contraseña"/>
                                                                <b class="tooltip tooltip-bottom-right">No olvide su contraseña</b> </label>
                                                        </section>

                                                        <section>
                                                            <label class="input"> <i class="icon-append fa fa-lock"></i>
                                                                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirme contraseña"/>
                                                                <b class="tooltip tooltip-bottom-right">No olvide su contraseña</b> </label>
                                                        </section>

                                                        <div class="well">
                                                            <button type="button" onclick="valid_change_passw();" class="btn btn-primary btn-sm btn-block">
                                                                Cambiar Contraseña
                                                            </button>
                                                        </div>
                                                    </fieldset>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
        </div>

    </div>
    </div>
    <script language="JavaScript" type="text/javascript" src="{{ asset('js/modulos/perfil.js') }}"></script>
@endsection


@section('page-js-script')
    <script type="text/javascript">

        $(document).ready(function() {

            pageSetUp();
            var errorClass = 'invalid';
            var errorElement = 'em';


            var $registerForm = $("#change_passw").validate({
                errorClass		: errorClass,
                errorElement	: errorElement,
                highlight: function(element) {
                    $(element).parent().removeClass('state-success').addClass("state-error");
                    $(element).removeClass('valid');
                },
                unhighlight: function(element) {
                    $(element).parent().removeClass("state-error").addClass('state-success');
                    $(element).addClass('valid');
                },

                // Rules for form validation
                rules : {

                    password : {
                        required : true,
                        minlength : 3,
                        maxlength : 20
                    },
                    confirmPassword : {
                        required : true,
                        minlength : 3,
                        maxlength : 20,
                        equalTo : '#password'
                    }
                },

                // Messages for form validation
                messages : {

                    password : {
                        required : 'Ingresar tu Contraseña.'
                    },
                    confirmPassword : {
                        required : 'Ingresa tu contraseña una ves mas.',
                        equalTo : 'Las contraseñas deben coincidir..'
                    }
                },

                // Do not change code below
                errorPlacement : function(error, element) {
                    error.insertAfter(element.parent());
                }
            });

        })

    </script>

@endsection
