@extends('layouts.master')

@section('content')

    <style>
        img {
            float: left;
            -webkit-transition: margin 0.5s ease-out;
            -moz-transition: margin 0.5s ease-out;
            -ms-transition: margin 0.5s ease-out;
            transition: margin 0.5s ease-out;
        }
        .ex1 img:hover {
            margin-top: 10px;
        }

    </style>

    <div id="main" role="main">


    <!-- MAIN CONTENT -->
    <div id="content">

        <h1 style="text-align: center"><a href="javascript:void(0);"><strong>Difusión de Nuestras Noticias</strong></a></h1>
        <div class="row">

            <div class="col-sm-1">
            </div>
            <div class="col-sm-10">

                <div class="row">

                    <div class="col-sm-12 ex1" style="padding-bottom: 13px">
                        <a href="javascript:void(0);"><img src="{{asset('img/boletin/radar-01-01.png')}}" width="100%"></a>
                    </div>
                </div>


                <div class="row">

                    <div class="col-sm-4 ex1" style="padding-bottom: 13px;padding-top: 13px">
                        <a href="javascript:void(0);"><img src="{{asset('img/boletin/radar-01-02.png')}}" width="100%"></a>
                    </div>
                    <div class="col-sm-4 ex1" style="padding-bottom: 13px;padding-top: 13px">
                        <a href="javascript:void(0);"><img src="{{asset('img/boletin/radar-01-03.png')}}" width="100%"></a>
                    </div>
                    <div class="col-sm-4 ex1" style="padding-bottom: 13px;padding-top: 13px">
                        <a href="javascript:void(0);"> <img src="{{asset('img/boletin/radar-01-04.png')}}" width="100%"></a>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-12 ex1" style="padding-top: 13px">
                        <a href="{{url('noticias')}}"><img src="{{asset('img/boletin/radar-01-05.png')}}" width="100%"></a>
                    </div>
                </div>

            </div>
            <div class="col-sm-1">
            </div>
        </div>

    </div>
    <!-- END MAIN CONTENT -->

    </div>
@endsection

@section('page-js-script')

    <script>

        $("#li_home").addClass('active');
        setTimeout(function() { myFunction() }, 2000);


        function myFunction(){

            $.ajax({
                url: '{{url('home_alerta_cumples')}}',
                type: 'GET',
                success: function (data) {

                    for(var i = 0; i < data.length; i++){
                        var urlimage = 'http://172.20.1.11:7777/Sistemas/adjuntos/RRHH/personal/' + data[i].pers_id + '.JPG';
                       // alert(urlimage);
                        $.bigBox({
                            title : "Alerta de cumpleaños !!",
                            content : "<img src='" + urlimage+"'  onerror=\"this.src='http://172.20.1.11:7777/Sistemas/adjuntos/RRHH/personal/0.JPG'\" alt='img' width='50' > Hoy es el cumpleaños de " + data[i].nombre1 + ", le enviamos un afectuoso saludo",
                            color : "#101140",
                            //timeout: 8000,
                            icon : "fa fa-bell swing animated",
                            number : i+1
                        });
                    }

                },
                error: function (data) {
                    // mostraralertas('* Contactese con el Administrador...');
                }
            });



        }


    </script>


@endsection