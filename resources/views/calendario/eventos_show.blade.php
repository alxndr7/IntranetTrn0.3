@extends('layouts.master')

@section('content')

    <!-- MAIN PANEL -->
    <div id="main" role="main">

        <!-- MAIN CONTENT -->
        <div id="content">

            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <h1 class="page-title txt-color-blueDark"><i class="fa fa-calendar fa-fw "></i>
                        Calendario
                        <span>>
							Eventos
							</span>
                    </h1>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
                    <ul id="sparks" class="">
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
                </div>
            </div>
            <!-- row -->

            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-12">

                    <!-- new widget -->
                    <div class="jarviswidget jarviswidget-color-blueDark">

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
                            <span class="widget-icon"> <i class="fa fa-calendar"></i> </span>
                            <h2> Eventos Transaltisa </h2>
                            <div class="widget-toolbar">
                                <!-- add: non-hidden - to disable auto hide -->
                                <div class="btn-group">
                                    <button class="btn dropdown-toggle btn-xs btn-default" data-toggle="dropdown">
                                        Ver <i class="fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu js-status-update pull-right">
                                        <li>
                                            <a href="javascript:void(0);" id="mt">Mes</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" id="ag">Semanal</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" id="td">Hoy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </header>

                        <!-- widget div-->
                        <div>

                            <div class="widget-body no-padding">
                                <!-- content goes here -->
                                <div class="widget-body-toolbar">

                                    <div id="calendar-buttons">

                                        <div class="btn-group">
                                            <a href="javascript:void(0)" class="btn btn-default btn-xs" id="btn-prev"><i class="fa fa-chevron-left"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-default btn-xs" id="btn-next"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div id="calendar"></div>

                                <!-- end content -->
                            </div>

                        </div>
                        <!-- end widget div -->
                    </div>
                    <!-- end widget -->

                </div>

            </div>

            <!-- end row -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">

            </div>

            <div id="dl_subir_archivos" class="dl_sub_arch" title="Subir fotos de evento" data-backdrop="static" data-keyboard="false">

            </div>
            <div id="dl_eliminar_archivos" title="Eliminar fotos de evento" data-backdrop="static" data-keyboard="false">

            </div>
        </div>
        </div>
        <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->



@endsection

@section('page-js-script')
    <script language="JavaScript" type="text/javascript" src="{{ asset('js/modulos/eventos.js') }}"></script>
    <!-- PAGE RELATED PLUGIN(S) -->
    <script src="{{asset('js/plugin/moment/moment.min.js')}}"></script>
    <script src="{{asset('js/plugin/clockpicker/clockpicker.min.js')}}"></script>
    <script src="{{asset('js/plugin/fullcalendar/jquery.fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/plugin/bootstrapvalidator/bootstrapValidator.min.js')}}"></script>
    <!-- PAGE RELATED PLUGIN(S) -->
    <script src="{{asset('js/plugin/jquery-form/jquery-form.min.js')}}"></script>
    <!-- PAGE RELATED PLUGIN(S) -->
    <script src="{{ asset('js/plugin/dropzone/dropzone.min.js') }}"></script>



    <script type="text/javascript">

        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        var removeClass = '';
        var flagRemoveClass = 0;


        $(document).ready(function() {
            $("#li_eventos").addClass('active');
            pageSetUp();



            "use strict";

            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();

            var hdr = {
                left: 'title',
                center: 'month,agendaWeek,agendaDay',
                right: 'prev,today,next'
            };


            /* initialize the calendar
             -----------------------------------------------------------------*/

            $('#calendar').fullCalendar({
                monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
                dayNamesShort: ['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'],
                defaultView: 'agendaWeek',
                header: hdr,
                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar !!!

                drop: function (date, allDay) { // this function is called when something is dropped

                    // retrieve the dropped element's stored Event Object
                    var originalEventObject = $(this).data('eventObject');

                    // we need to copy it, so that multiple events don't have a reference to the same object
                    var copiedEventObject = $.extend({}, originalEventObject);

                    // assign it the date that was reported
                    copiedEventObject.start = date;
                    copiedEventObject.allDay = allDay;

                    // render the event on the calendar
                    // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                    $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                    // is the "remove after drop" checkbox checked?
                    if ($('#drop-remove').is(':checked')) {
                        // if so, remove the element from the "Draggable Events" list
                        $(this).remove();
                    }

                },

                select: function (start, end, allDay) {
                    var title = prompt('Event Title:');
                    if (title) {
                        calendar.fullCalendar('renderEvent', {
                                title: title,
                                start: start,
                                end: end,
                                allDay: allDay
                            }, true // make the event "stick"
                        );
                    }
                    calendar.fullCalendar('unselect');
                },

                events:"{{url('/get_eventos')}}",
                eventClick: function(event) {

                    $.ajax({
                        type: 'GET',
                        url: "{{url('/editar_evento_form')}}",
                        data: {
                            'id': event.id
                        },
                        success: function(data) {
                            //alert(data);
                            //event.preventDefault();
                            $('#myModal').modal('show');
                            $('#myModal').show().html(data);
                        },
                    });
                },

                eventRender: function (event, element, icon) {
                    if (!event.description == "") {
                        element.find('.fc-title').append("<br/><span class='ultra-light'>" + event.description +
                            "</span>");
                    }
                    if (!event.icon == "") {
                        element.find('.fc-title').append("<i class='air air-top-right fa " + event.icon +
                            " '></i>");
                    }
                },

                windowResize: function (event, ui) {
                    $('#calendar').fullCalendar('render');
                }
            });

            /* hide default buttons */
            $('.fc-right, .fc-center').hide();


            $('#calendar-buttons #btn-prev').click(function () {
                $('.fc-prev-button').click();
                return false;
            });

            $('#calendar-buttons #btn-next').click(function () {
                $('.fc-next-button').click();
                return false;
            });

            $('#calendar-buttons #btn-today').click(function () {
                $('.fc-today-button').click();
                return false;
            });

            $('#mt').click(function () {
                $('#calendar').fullCalendar('changeView', 'month');
            });

            $('#ag').click(function () {
                $('#calendar').fullCalendar('changeView', 'agendaWeek');
            });

            $('#td').click(function () {
                $('#calendar').fullCalendar('changeView', 'agendaDay');
            });



        })



        setTimeout(function() { rendering_vacaciones() }, 500);


        function rendering_vacaciones(){

            $.ajax({
                url: '{{url('vacaciones_personal')}}',
                type: 'GET',
                success: function (data) {

                    //alert(data);
                    $('#calendar').fullCalendar( 'addEventSource', data);

                },
                error: function (data) {
                    // mostraralertas('* Contactese con el Administrador...');
                }
            });



        }
    </script>

@endsection

