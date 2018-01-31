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
							Cumpleaños
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

                <div class="col-sm-12 col-md-12 col-lg-3">
                    <!-- new widget -->
                    <div class="jarviswidget jarviswidget-color-blueDark">
                        <header>
                            <h2> Agregar Eventos </h2>
                        </header>

                        <!-- widget div-->
                        <div>

                            <div class="widget-body">
                                <!-- content goes here -->

                                                          <form id="add-event-form" class="form-horizontal">
                                    <fieldset style="padding-right: 0px;">

                                        <div class="form-group col-sm-12" style="margin-left: 0px;margin-right: 0px;">
                                            <label>Seleccione icono de evento</label>
                                            <div class="btn-group btn-group-sm btn-group-justified" data-toggle="buttons">
                                                <label class="btn btn-default active">
                                                    <input type="radio" name="iconselect" id="icon-1" value="fa-info" checked>
                                                    <i class="fa fa-info text-muted"></i> </label>
                                                <label class="btn btn-default">
                                                    <input type="radio" name="iconselect" id="icon-2" value="fa-warning">
                                                    <i class="fa fa-warning text-muted"></i> </label>
                                                <label class="btn btn-default">
                                                    <input type="radio" name="iconselect" id="icon-3" value="fa-check">
                                                    <i class="fa fa-check text-muted"></i> </label>
                                                <label class="btn btn-default">
                                                    <input type="radio" name="iconselect" id="icon-4" value="fa-user">
                                                    <i class="fa fa-user text-muted"></i> </label>
                                                <label class="btn btn-default">
                                                    <input type="radio" name="iconselect" id="icon-5" value="fa-lock">
                                                    <i class="fa fa-lock text-muted"></i> </label>
                                                <label class="btn btn-default">
                                                    <input type="radio" name="iconselect" id="icon-6" value="fa-clock-o">
                                                    <i class="fa fa-clock-o text-muted"></i> </label>
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-12" style="margin-left: 0px;margin-right: 0px;">
                                            <label>Título de Evento</label>
                                            <input class="form-control"  id="title" name="title" maxlength="40" type="text" placeholder="Título del evento">
                                        </div>
                                        <div class="form-group col-sm-12" style="margin-left: 0px;margin-right: 0px;">
                                            <label>Descripción del Evento</label>
                                            <textarea class="form-control" placeholder="Descripción" rows="3" maxlength="200" id="description" name="description"></textarea>
                                            <p class="note">Máximo 200 caracteres</p>
                                        </div>
                                        <div class="form-group col-sm-12" style="margin-left: 0px;margin-right: 0px;">
                                            <label>Fecha y duración del evento</label>
                                        </div>
                                        <div class="form-group col-sm-6" style="margin-left: 0px;margin-right: 0px;">
                                            <div class="input-group">
                                                <input class="form-control" id="fechaDesde" name="fechaDesde" type="text" placeholder="Fecha inicio">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-6" style="margin-left: 0px;margin-right: 0px;">
                                            <div class="input-group">
                                                <input class="form-control" id="clockpicker" name="clockpicker" type="text" placeholder="Select time" data-autoclose="true">
                                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                            </div>
                                        </div>



                                        <div class="form-group col-sm-6" style="margin-left: 0px;margin-right: 0px;">
                                            <div class="input-group">
                                                <input class="form-control" id="fechaHasta" name="fechaHasta" type="text" placeholder="Fecha fin">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>


                                        <div class="form-group col-sm-6" style="margin-left: 0px;margin-right: 0px;">
                                            <div class="input-group">
                                                <input class="form-control" id="clockpicker2" name="clockpicker2" type="text" placeholder="Select time" data-autoclose="true">
                                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-12" style="margin-left: 0px;margin-right: 0px;">
                                            <label>Seleccione color del evento</label>
                                            <div class="btn-group btn-group-justified btn-select-tick" data-toggle="buttons">
                                                <label class="btn bg-color-darken active">
                                                    <input type="radio" name="priority" id="option1" value="bg-color-darken txt-color-white" checked>
                                                    <i class="fa fa-check txt-color-white"></i> </label>
                                                <label class="btn bg-color-blue">
                                                    <input type="radio" name="priority" id="option2" value="bg-color-blue txt-color-white">
                                                    <i class="fa fa-check txt-color-white"></i> </label>
                                                <label class="btn bg-color-orange">
                                                    <input type="radio" name="priority" id="option3" value="bg-color-orange txt-color-white">
                                                    <i class="fa fa-check txt-color-white"></i> </label>
                                                <label class="btn bg-color-greenLight">
                                                    <input type="radio" name="priority" id="option4" value="bg-color-greenLight txt-color-white">
                                                    <i class="fa fa-check txt-color-white"></i> </label>
                                                <label class="btn bg-color-blueLight">
                                                    <input type="radio" name="priority" id="option5" value="bg-color-blueLight txt-color-white">
                                                    <i class="fa fa-check txt-color-white"></i> </label>
                                                <label class="btn bg-color-red">
                                                    <input type="radio" name="priority" id="option6" value="bg-color-red txt-color-white">
                                                    <i class="fa fa-check txt-color-white"></i> </label>
                                            </div>
                                        </div>

                                    </fieldset>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="btn btn-default" type="button" onclick="validarEvento();" id="add-event" >
                                                    Agregar Evento
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- end content -->
                            </div>

                        </div>
                        <!-- end widget div -->
                    </div>
                    <!-- end widget -->

                </div>
                <div class="col-sm-12 col-md-12 col-lg-9">

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
                                        Ver Por <i class="fa fa-caret-down"></i>
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

            $("#li_admin").addClass('active');
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


            // Date Range Picker
            $("#fechaHasta").datepicker({
                defaultDate: "-0d",
                changeMonth: true,
                numberOfMonths: 1,
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                onClose: function (selectedDate) {
                    $("#fechaDesde").datepicker("option", "maxDate", selectedDate);
                }

            });
            $("#fechaDesde").datepicker({
                defaultDate: "-0d",
                changeMonth: true,
                numberOfMonths: 1,
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                onClose: function (selectedDate) {
                    $("#fechaHasta").datepicker("option", "minDate", selectedDate);
                }
            });

            $('#clockpicker').clockpicker({
                placement: 'top',
                donetext: 'Done'
            });

            $('#clockpicker2').clockpicker({
                placement: 'top',
                donetext: 'Done'
            });


            $('#add-event-form').bootstrapValidator({
                feedbackIcons : {
                    valid : 'glyphicon glyphicon-ok',
                    invalid : 'glyphicon glyphicon-remove',
                    validating : 'glyphicon glyphicon-refresh'
                },
                fields : {
                    title : {
                        validators : {
                            notEmpty : {
                                message : 'Este campo es requerido'
                            }
                        }
                    },
                    description:{
                        validators:{
                            notEmpty:{
                                message: 'Este campo es requerido'
                            }
                        }
                    },
                    fechaDesde : {
                        validators : {
                            notEmpty : {
                                message : 'Este campo es requerido'
                            }
                        }
                    },
                    fechaHasta : {
                        validators : {
                            notEmpty : {
                                message : 'Este campo es requerido'
                            }
                        }
                    },
                    clockpicker : {
                        validators : {
                            notEmpty : {
                                message : 'Este campo es requerido'
                            }
                        }
                    },
                    clockpicker2 : {
                        validators : {
                            notEmpty : {
                                message : 'Este campo es requerido'
                            }
                        }
                    }
                }
            });

        })

    </script>

@endsection

