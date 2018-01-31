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

                    <ul id="sparks" class="list-inline">
                        <li class="sparks-info">
                            <h5><span class="txt-color-blue">CUMPLEAÑEROS DE HOY:</span></h5>
                        </li>
                        @foreach($cumpleHoy as $cumple)
                            <li class="sparks-info">
                                <h5>{{$cumple->nombre1}}<span class="txt-color-blue"><i class="fa fa-gift"></i>&nbsp;{{$cumple->edad}}</span> <span class="txt-color-blue" STYLE="font-size: x-small">{{$cumple->sucursal}}</span></h5>
                                <img src='http://172.20.1.11:7777/Sistemas/adjuntos/RRHH/personal/{{$cumple->pers_id}}.JPG'  onerror="this.src='http://172.20.1.11:7777/Sistemas/adjuntos/RRHH/personal/0.JPG'" alt='img' width='50' >
                            </li>
                        @endforeach
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
                            <h2> Cumpleaños </h2>
                            <div class="widget-toolbar">
                                <!-- add: non-hidden - to disable auto hide -->
                                <div class="btn-group">
                                    <button class="btn dropdown-toggle btn-xs btn-default" data-toggle="dropdown">
                                        Ver <i class="fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu js-status-update pull-right">
                                        <li>
                                            <a href="javascript:void(0);" id="mt">Mensual</a>
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

        </div>
        <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->
@endsection

@section('page-js-script')

    <!-- PAGE RELATED PLUGIN(S) -->
    <script src="{{asset('js/plugin/moment/moment.min.js')}}"></script>
    <script src="{{asset('js/plugin/fullcalendar/jquery.fullcalendar.min.js')}}"></script>
    <script type="text/javascript">

        // DO NOT REMOVE : GLOBAL FUNCTIONS!

        $(document).ready(function() {

            $("#li_cumple").addClass('active');
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

            var initDrag = function (e) {
                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end

                var eventObject = {
                    title: $.trim(e.children().text()), // use the element's text as the event title
                    description: $.trim(e.children('span').attr('data-description')),
                    icon: $.trim(e.children('span').attr('data-icon')),
                    className: $.trim(e.children('span').attr('class')) // use the element's children as the event class
                };
                // store the Event Object in the DOM element so we can get to it later
                e.data('eventObject', eventObject);

                // make the event draggable using jQuery UI
                e.draggable({
                    zIndex: 999,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0 //  original position after the drag
                });
            };

            var addEvent = function (title, priority, description, icon) {
                title = title.length === 0 ? "Untitled Event" : title;
                description = description.length === 0 ? "No Description" : description;
                icon = icon.length === 0 ? " " : icon;
                priority = priority.length === 0 ? "label label-default" : priority;

                var html = $('<li><span class="' + priority + '" data-description="' + description + '" data-icon="' +
                    icon + '">' + title + '</span></li>').prependTo('ul#external-events').hide().fadeIn();

                $("#event-container").effect("highlight", 800);

                initDrag(html);
            };

            /* initialize the external events
             -----------------------------------------------------------------*/

            $('#external-events > li').each(function () {
                initDrag($(this));
            });

            $('#add-event').click(function () {
                var title = $('#title').val(),
                    priority = $('input:radio[name=priority]:checked').val(),
                    description = $('#description').val(),
                    icon = $('input:radio[name=iconselect]:checked').val();

                addEvent(title, priority, description, icon);
            });

            /* initialize the calendar
             -----------------------------------------------------------------*/

            $('#calendar').fullCalendar({
                monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
                dayNamesShort: ['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'],
                displayEventTime : false,
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

                events:"{{url('/get_cumples')}}",
                eventMouseover: function(event, jsEvent, view) {

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

    </script>

@endsection