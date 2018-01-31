@extends('layouts.master')

@section('content')
    <!-- MAIN PANEL -->
    <div id="main" role="main">

        <!-- MAIN CONTENT -->
        <div id="content">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <h1 class="page-title txt-color-blueDark">

                        <!-- PAGE HEADER -->
                        <i class="fa-fw fa fa-puzzle-piece"></i>
                        App Views
                        <span>>
								Project
							</span>
                    </h1>
                </div>
                <!-- end col -->

                <!-- right side of the page with the sparkline graphs -->
                <!-- col -->
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
                    <!-- sparks -->
                    <ul id="sparks">
                        <li class="sparks-info">
                            <h5> My Income <span class="txt-color-blue">$47,171</span></h5>
                            <div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
                                1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
                            </div>
                        </li>
                        <li class="sparks-info">
                            <h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
                            <div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
                                110,150,300,130,400,240,220,310,220,300, 270, 210
                            </div>
                        </li>
                        <li class="sparks-info">
                            <h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
                            <div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
                                110,150,300,130,400,240,220,310,220,300, 270, 210
                            </div>
                        </li>
                    </ul>
                    <!-- end sparks -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->


            <div class="row">
                <!-- SuperBox -->

                <div class="superbox col-sm-12">
<!--
                    @foreach($evento as $even)
                        --><div class="superbox-list" onclick="cargar_imagenes_evento({{$even->evento_id}});">
                            <img src="{{asset('uploads/'.$even->evento_id.'/portada.jpg')}}" onerror="this.src='{{asset('img/logo_original.png')}}'" data-img="{{asset('uploads/'.$even->evento_id.'/portada.jpg')}}" alt="{{$even->evento_desc}}" title="{{$even->evento_titulo}}" class="superbox-img">
                        </div><!--

                    @endforeach
                        -->
                    <div class="superbox-float"></div>
                </div>
                <!-- /SuperBox -->

                <div class="superbox-show" style="height:300px; display: none"></div>

            </div>

        </div>
        </div>
        <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->



@endsection

@section('page-js-script')
    <script language="JavaScript" type="text/javascript" src="{{ asset('js/modulos/galeria.js') }}"></script>


    <!-- PAGE RELATED PLUGIN(S) -->
    <script src="{{ asset('js/plugin/superbox/superbox.min.js') }}"></script>
    <script src="{{ asset('js/plugin/lightbox/lightbox.js') }}"></script>


    <script type="text/javascript">

        $(document).ready(function() {
            $("#li_galerias").addClass('active');
            pageSetUp();
            $('.superbox').SuperBox();

            $('.superbox').settings = {
                loadTxt: "Loading..." // Loading text
            };
        })

    </script>

@endsection

