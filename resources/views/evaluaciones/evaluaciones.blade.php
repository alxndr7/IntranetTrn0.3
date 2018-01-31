@extends('layouts.master')

@section('content')

    <!-- MAIN PANEL -->
    <div id="main" role="main">

        <!-- MAIN CONTENT -->
        <div id="content">

            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <h1 class="page-title txt-color-blueDark"><i class="fa fa-puzzle-piece "></i>
                        Administrar
                        <span>>
							Evaluaciones
							</span>
                    </h1>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
                    <ul id="sparks" class="">
                    <div class="text-right">
                        <button type="button" class="btn btn-labeled bg-color-blue txt-color-white" onclick="modal_nueva_evaluacion();">
                            <span class="btn-label"><i class="glyphicon glyphicon-plus-sign"></i></span>Nueva Evaluación
                        </button>
                        <button  type="button" class="btn btn-labeled btn-success" onclick="clickmod_aranrust();">
                            <span class="btn-label"><i class="glyphicon glyphicon-pencil"></i></span>Asignar Evaluación
                        </button>
                        <!--
                        <button type="button" class="btn btn-labeled bg-color-greenDark txt-color-white" onclick="clicknewmznamasivo();">
                            <span class="btn-label"><i class="glyphicon glyphicon-plus-sign"></i></span>Crear masivo
                        </button>
                        <button  type="button" class="btn btn-labeled btn-danger" onclick="delete_aranrust();" disabled>
                            <span class="btn-label"><i class="glyphicon glyphicon-trash"></i></span>Eliminar
                        </button>
-->

                        <!--
                        <button type="button" class="btn btn-labeled bg-color-magenta txt-color-white">
                            <span class="btn-label"><i class="glyphicon glyphicon-print"></i></span>Imprimir
                        </button>-->
                    </div>
                    </ul>
                </div>
            </div>
            <!-- widget grid -->
            <section id="widget-grid" class="">

                <!-- row -->
                <div class="row">

                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                    </article>
                    <!-- NEW WIDGET START -->
                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-8">

                        <!-- Widget ID (each widget will need unique ID)-->
                        <div class="jarviswidget well" id="wid-id-0">
                            <!-- widget options:
                                usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                                data-widget-colorbutton="false"
                                data-widget-editbutton="false"
                                data-widget-togglebutton="false"
                                data-widget-deletebutton="false"
                                data-widget-fullscreenbutton="false"
                                data-widget-custombutton="false"
                                data-widget-collapsed="true"
                                data-widget-sortable="false"

                            -->
                            <header>
                                <span class="widget-icon"> <i class="fa fa-comments"></i> </span>
                                <h2>Widget Title </h2>

                            </header>

                            <!-- widget div-->
                            <div>

                                <!-- widget edit box -->
                                <div class="jarviswidget-editbox">
                                    <!-- This area used as dropdown edit box -->
                                    <input class="form-control" type="text">
                                </div>
                                <!-- end widget edit box -->

                                <!-- widget content -->
                                <div class="widget-body no-padding">

                                    <table id="example" class="display projects-table table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Periodo</th>
                                            <th><i class="fa fa-fw fa-calendar text-muted hidden-md hidden-sm hidden-xs"></i> Inicio</th>
                                            <th><i class="fa fa-fw fa-calendar text-muted hidden-md hidden-sm hidden-xs"></i> Fin</th>
                                            <th>Dias</th>
                                            <th>Con Ejecución</th>
                                            <th>Sin Ejecución</th>
                                            <th>Deuda</th>
                                            <th><i class="fa fa-circle text-danger font-xs"></i> Estado</th>
                                        </tr>
                                        </thead>

                                    </table>

                                </div>
                                <!-- end widget content -->

                            </div>
                            <!-- end widget div -->

                        </div>
                        <!-- end widget -->

                    </article>
                    <!-- WIDGET END -->
                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                    </article>
                </div>

                <!-- end row -->

                <!-- row -->

                <div class="row">

                    <!-- a blank row to get started -->
                    <div class="col-sm-12">
                        <!-- your contents here -->
                    </div>

                </div>

                <!-- end row -->

            </section>
            <!-- end widget grid -->

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
            </div>
            <div class="modal fade" id="myModalPregunta" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
            </div>
        </div>
        <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->
@endsection

@section('page-js-script')
    <script language="JavaScript" type="text/javascript" src="{{ asset('js/modulos/evaluaciones.js') }}"></script>
    <!-- PAGE RELATED PLUGIN(S) -->
    <script type="text/javascript">

        // DO NOT REMOVE : GLOBAL FUNCTIONS!

        $(document).ready(function() {
            $("#li_admin").addClass('active');
                 });


            /* initialize the external events
             -----------------------------------------------------------------*/



            /* initialize the calendar
             -----------------------------------------------------------------*/






    </script>

@endsection