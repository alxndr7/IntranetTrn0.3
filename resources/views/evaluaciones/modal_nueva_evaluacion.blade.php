
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header {{$evento[0]->evento_color}}">
            <button type="button" style="color: white" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
            </button>
            <h4 class="modal-title" style="color: white">
                <strong>Nueva Evaluación</strong>
            </h4>
        </div>
        <div class="modal-body no-padding">
            <div class="widget-body">
                <!-- content goes here -->
            <form id="edit_form_evento" class="form-horizontal">
                <input type="hidden" id="evento_id" name="evento_id" value="{{ $evento[0]->evento_id }}"/>
                <fieldset style="padding-right: 0px;">
<br>
                    <div class="form-group col-sm-12" style="margin-left: 0px;margin-right: 0px;">
                        <label>Descripción Evaluación:</label>
                        <input class="form-control"  id="title1" name="title1" maxlength="40" type="text" placeholder="Título del evento" value="{{ $evento[0]->evento_titulo }}">
                    </div>
                    <div class="form-group col-sm-5" style="margin-left: 0px;margin-right: 0px;">
                        <label>Duración:</label>
                        <div class="btn-group btn-group-justified btn-select-tick" data-toggle="buttons">

                                <input class="form-control" id="horas" name="horas" type="number" placeholder="Horas">
                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>

                                <input class="form-control" id="    minutos" name="minutos" type="number" placeholder="Minutos">
                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                        </div>
                    </div>
                    <div class="form-group col-sm-3" style="margin-left: 0px;margin-right: 0px;">
                        <label>Nota Mínima:</label>
                        <div class="btn-group btn-group-justified btn-select-tick" data-toggle="buttons">
                            <input class="form-control" id="horas" name="horas" type="number" placeholder="Horas">
                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                        </div>
                    </div>
                    <div class="form-group col-sm-4" style="margin-left: 0px;margin-right: 0px;">
                        <label>Estado:</label>
                        <select class="form-control" name="estado">
                            <option value="">--- Estado Evaluación ---</option>
                            @if($evento[0]->evento_estado == '200001')
                                <option value="200001" selected>Activo</option>
                                <option value="200002">Inactivo</option>
                            @else
                                <option value="200001">Activos</option>
                                <option value="200002" selected>Inactivo</option>
                            @endif
                        </select>
                    </div>

                    <div class="form-group col-sm-12" style="margin-left: 0px;margin-right: 0px; margin-bottom: 0px">
                        <label>Agregar Nueva Pregunta:</label>
                    </div>


                    <div class="form-group col-sm-6" style="margin-left: 0px;margin-right: 0px;">
                        <select class="form-control" id="tipo_pregunta">
                            <option value="0">--- Tipo de Pregunta ---</option>
                            <option value="1">1.- Verdadero / Falso</option>
                            <option value="2">2.- Selección simple</option>
                            <option value="3">3.- Selección múltiple</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-6" style="margin-left: 0px;margin-right: 0px;">
                        <button class="btn btn-primary  col-sm-12 bg-color-blue" type="button" onclick="modal_nueva_pregunta();" >
                            Agregar pregunta a cuestionario
                        </button>
                    </div>
                    <div class="form-group col-sm-12 hide" id="alerta_validar_pregunta" style="margin-left: 0px;margin-right: 0px;">
                        <div class="alert alert-danger fade in">
                            <i class="fa-fw fa fa-times"></i>
                            <strong>Error!</strong> Debe seleccionar un tipo de pregunta!
                        </div>
                    </div>

                    <div class="form-group col-sm-12" style="margin-left: 0px;margin-right: 0px; margin-bottom: -15px" id="recargar_imagenes">
                        <label>Cuestionario actual</label>
                        <ul class="list-inline friends-list" style="margin-left: 0px">
                                <div class="alert alert-info fade in">
                                    <button class="close" data-dismiss="alert">
                                        ×
                                    </button>
                                    <i class="fa-fw fa fa-info"></i>
                                    <strong>Info!</strong> Presiona el boton 'Agregar pregunta' para agregar preguntas a la evaluación.
                                </div>
                        <!--
                            <li>
                                <a href="javascript:void(0);">413 more</a>
                            </li>-->
                        </ul>
                    </div>


                </fieldset>


                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Cancelar
                    </button>
                    <button type="button" class="btn btn-success">
                        Guardar Evaluación
                    </button>
                </div>

            </form>

            </div>
        </div>

    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->

<style>
    .ui-datepicker{z-index:1151 !important;}
    .clockpicker-popover {
        z-index: 999999;
    }
</style>

<script>


    $('#edit_form_evento').bootstrapValidator({
        feedbackIcons : {
            valid : 'glyphicon glyphicon-ok',
            invalid : 'glyphicon glyphicon-remove',
            validating : 'glyphicon glyphicon-refresh'
        },
        fields : {
            title1 : {
                validators : {
                    notEmpty : {
                        message : 'Este campo es requerido'
                    }
                }
            },
            description1:{
                validators:{
                    notEmpty:{
                        message: 'Este campo es requerido'
                    }
                }
            },
            fechaDesde1 : {
                validators : {
                    notEmpty : {
                        message : 'Este campo es requerido'
                    }
                }
            },
            fechaHasta1 : {
                validators : {
                    notEmpty : {
                        message : 'Este campo es requerido'
                    }
                }
            },
            clockpicker1 : {
                validators : {
                    notEmpty : {
                        message : 'Este campo es requerido'
                    }
                }
            },
            clockpicker21 : {
                validators : {
                    notEmpty : {
                        message : 'Este campo es requerido'
                    }
                }
            },
            estado:{
                validators :{
                    notEmpty:{
                        message: 'Este campo es requerido'
                    }
                }
            }
        }
    });

    $('#dl_documentos_show').click(function() {

        $.ajax({
            type: 'GET',
            url: "{{url('/subir_archivos_dl')}}",
            data: {
                'id': 12
            },
            success: function(data) {
                //alert(data);
                //event.preventDefault();
                //$('#myModal').modal('show');
               // $('#myModal').show().html(data);

                $('#dl_subir_archivos').dialog('open').html(data);
                if(flagRemoveClass){
                    $("#dl_subir_archivos").parent().find('div.ui-dialog-titlebar').removeClass(removeClass);
                }
                flagRemoveClass = 1;
                removeClass = '{{$evento[0]->evento_color}}';
                $("#dl_subir_archivos").parent().find('div.ui-dialog-titlebar').addClass('{{$evento[0]->evento_color}}');

            },
        });

    });

    $('#dl_subir_archivos').dialog({
        position :{
        my: "center",
        at: "center",
        of: window
    },

    autoOpen : false,
        width : 600,
        resizable : false,
        modal : false,
        title : '<div class="widget-header" style="color: white"><h4><i class="fa fa-file-image-o"></i> Imágenes del evento</h4></div>',
        buttons : [{
            html : "<i class='fa fa-upload'></i>&nbsp; Subir imágenes",
            "class" : "btn btn-danger",
            "type" : "submit",
            "id": "submit",
            click : function() {
                //$(this).dialog("close");
            }
        }, {
            html : "<i class='fa fa-times'></i>&nbsp; Cancelar",
            "class" : "btn btn-default",
            click : function() {
                $(this).dialog("close");
            }
        }]
    });



    // Date Range Picker
    $("#fechaHasta1").datepicker({
        defaultDate: "-0d",
        changeMonth: true,
        numberOfMonths: 1,
        prevText: '<i class="fa fa-chevron-left"></i>',
        nextText: '<i class="fa fa-chevron-right"></i>',
        onClose: function (selectedDate) {
            $("#fechaDesde1").datepicker("option", "maxDate", selectedDate);
        }

    });

    $("#fechaDesde1").datepicker({
        defaultDate: "-0d",
        changeMonth: true,
        numberOfMonths: 1,
        prevText: '<i class="fa fa-chevron-left"></i>',
        nextText: '<i class="fa fa-chevron-right"></i>',
        onClose: function (selectedDate) {
            $("#fechaHasta1").datepicker("option", "minDate", selectedDate);
        }
    });

    $('#clockpicker1').clockpicker({
        placement: 'top',
        donetext: 'Done'
    });

    $('#clockpicker21').clockpicker({
        placement: 'top',
        donetext: 'Done'
    });


</script>