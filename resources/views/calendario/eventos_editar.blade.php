
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header {{$evento[0]->evento_color}}">
            <button type="button" style="color: white" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
            </button>
            <h4 class="modal-title" style="color: white">
                <strong>Editar Evento</strong>
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
                        <label>Seleccione icono de evento</label>
                        <div class="btn-group btn-group-sm btn-group-justified" data-toggle="buttons">
                            <label class="btn btn-default active">
                                <input type="radio" name="iconselect1" id="icon-1" value="fa-info" checked>
                                <i class="fa fa-info text-muted"></i> </label>
                            <label class="btn btn-default">
                                <input type="radio" name="iconselect1" id="icon-2" value="fa-warning">
                                <i class="fa fa-warning text-muted"></i> </label>
                            <label class="btn btn-default">
                                <input type="radio" name="iconselect1" id="icon-3" value="fa-check">
                                <i class="fa fa-check text-muted"></i> </label>
                            <label class="btn btn-default">
                                <input type="radio" name="iconselect1" id="icon-4" value="fa-user">
                                <i class="fa fa-user text-muted"></i> </label>
                            <label class="btn btn-default">
                                <input type="radio" name="iconselect1" id="icon-5" value="fa-lock">
                                <i class="fa fa-lock text-muted"></i> </label>
                            <label class="btn btn-default">
                                <input type="radio" name="iconselect1" id="icon-6" value="fa-clock-o">
                                <i class="fa fa-clock-o text-muted"></i> </label>
                        </div>
                    </div>
                    <div class="form-group col-sm-12" style="margin-left: 0px;margin-right: 0px;">
                        <label>Título de Evento</label>
                        <input class="form-control"  id="title1" name="title1" maxlength="40" type="text" placeholder="Título del evento" value="{{ $evento[0]->evento_titulo }}">
                    </div>
                    <div class="form-group col-sm-12" style="margin-left: 0px;margin-right: 0px;">
                        <label>Descripción del Evento</label>
                        <textarea class="form-control" placeholder="Descripción" rows="3" maxlength="200" id="description1" name="description1" >{{ $evento[0]->evento_desc }}</textarea>
                        <p class="note">Máximo 200 caracteres</p>
                    </div>
                    <div class="form-group col-sm-12" style="margin-left: 0px;margin-right: 0px;">
                        <label>Fecha y duración del evento</label>
                    </div>
                    <div class="form-group col-sm-6" style="margin-left: 0px;margin-right: 0px;">
                        <div class="input-group">
                            <input class="form-control" id="fechaDesde1" name="fechaDesde1" type="text" placeholder="Fecha inicio" value="{{Carbon\Carbon::parse(explode(" ", $evento[0]->fecha_inicio)[0])->format('m/d/Y')}}">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>

                    <div class="form-group col-sm-6" style="margin-left: 0px;margin-right: 0px;">
                        <div class="input-group">
                            <input class="form-control" id="clockpicker1" name="clockpicker1" type="text" placeholder="Select time" data-autoclose="true"  value="{{explode(" ", $evento[0]->fecha_inicio)[1]}}">
                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                        </div>
                    </div>



                    <div class="form-group col-sm-6" style="margin-left: 0px;margin-right: 0px;">
                        <div class="input-group">
                            <input class="form-control" id="fechaHasta1" name="fechaHasta1" type="text" placeholder="Fecha fin" value="{{Carbon\Carbon::parse(explode(" ", $evento[0]->fecha_fin)[0])->format('m/d/Y')}}">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>


                    <div class="form-group col-sm-6" style="margin-left: 0px;margin-right: 0px;">
                        <div class="input-group">
                            <input class="form-control" id="clockpicker21" name="clockpicker21" type="text" placeholder="Select time" data-autoclose="true"  value="{{explode(" ", $evento[0]->fecha_fin)[1]}}">
                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                        </div>
                    </div>

                    <div class="form-group col-sm-6" style="margin-left: 0px;margin-right: 0px;">
                        <label>Seleccione color del evento</label>
                        <div class="btn-group btn-group-justified btn-select-tick" data-toggle="buttons">
                            <label class="btn bg-color-darken active">
                                <input type="radio" name="priority1" id="option1" value="bg-color-darken txt-color-white" checked>
                                <i class="fa fa-check txt-color-white"></i> </label>
                            <label class="btn bg-color-blue">
                                <input type="radio" name="priority1" id="option2" value="bg-color-blue txt-color-white">
                                <i class="fa fa-check txt-color-white"></i> </label>
                            <label class="btn bg-color-orange">
                                <input type="radio" name="priority1" id="option3" value="bg-color-orange txt-color-white">
                                <i class="fa fa-check txt-color-white"></i> </label>
                            <label class="btn bg-color-greenLight">
                                <input type="radio" name="priority1" id="option4" value="bg-color-greenLight txt-color-white">
                                <i class="fa fa-check txt-color-white"></i> </label>
                            <label class="btn bg-color-blueLight">
                                <input type="radio" name="priority1" id="option5" value="bg-color-blueLight txt-color-white">
                                <i class="fa fa-check txt-color-white"></i> </label>
                            <label class="btn bg-color-red">
                                <input type="radio" name="priority1" id="option6" value="bg-color-red txt-color-white">
                                <i class="fa fa-check txt-color-white"></i> </label>
                        </div>
                    </div>
                        <div class="form-group col-sm-6" style="margin-left: 0px;margin-right: 0px;">
                            <label>Estado</label>
                            <div class="selectContainer">
                                <select class="form-control" name="estado">
                                    <option value="">--- Estado Evento ---</option>
                                    @if($evento[0]->evento_estado == '200001')
                                        <option value="200001" selected>Activo</option>
                                        <option value="200002">Inactivo</option>
                                    @else
                                        <option value="200001">Activos</option>
                                        <option value="200002" selected>Inactivo</option>
                                    @endif
                                </select>
                            </div>
                        </div>

                    <div class="form-group col-sm-12" style="margin-left: 0px;margin-right: 0px; margin-bottom: -15px" id="recargar_imagenes">
                        <label>Imágenes</label>
                        <ul class="list-inline friends-list" style="margin-left: 0px">

                            @if(count($imagenes)!= 0)
                                @foreach($imagenes as $img)
                                    <li><img src="{{ asset('uploads/'.$carpeta_id.'/'.$img['basename'])}}" alt="friend-1"></li>
                                @endforeach
                            @else
                                <div class="alert alert-info fade in">
                                    <button class="close" data-dismiss="alert">
                                        ×
                                    </button>
                                    <i class="fa-fw fa fa-info"></i>
                                    <strong>Info!</strong> Presiona el boton 'Subir Imagenes' para agregar fotos de este evento.
                                </div>
                            @endif
                            <!--
                            <li>
                                <a href="javascript:void(0);">413 more</a>
                            </li>-->
                        </ul>
                    </div>


                </fieldset>



                <div class="form-actions" style="margin-left: 0;margin-right: 0;margin-bottom: 0">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" onclick="open_dialog_eliminar_imagenes('{{$evento[0]->evento_color }}','{{$evento[0]->evento_id }}');" id="dl_documentos_show_delete" class="btn btn-danger"> Eliminar imágenes </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#"  id="dl_documentos_show" class="btn btn-info"> Subir imágenes </a>
                        </div>

                        <div class="col-md-7">
                            <button class="btn btn-primary" type="button" onclick="validarEvento_editar();" >
                                Editar Evento
                            </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cancelar
                            </button>
                        </div>
                    </div>
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