
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-color-blueLight">
            <button type="button" style="color: white" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
            </button>
            <h4 class="modal-title" style="color: white">
                <strong>Nueva Pregunta Verdadero/Falso</strong>
            </h4>
        </div>
        <div class="modal-body no-padding">
            <div class="widget-body">
                <!-- content goes here -->
            <form id="edit_form_evento" class="form-horizontal">
                <input type="hidden" id="evento_id" name="evento_id"/>
                <fieldset style="padding-right: 0px;">
<br>
                    <div class="form-group col-sm-12" style="margin-left: 0px;margin-right: 0px;">
                        <label>Descripción Evaluación:</label>
                    </div>
                    <div class="form-group col-sm-2" style="margin-left: 0px;margin-right: 0px;">
                        <input class="form-control"  id="num_preg" name="num_preg" maxlength="2" type="number" placeholder="00">
                    </div>
                    <div class="form-group col-sm-10" style="margin-left: 0px;margin-right: 0px;">
                        <textarea class="form-control" placeholder="Pregunta..." rows="4" maxlength="500" id="description1" name="description1" ></textarea>
                        <p class="note">Máximo 500 caracteres</p>
                    </div>
                    <div class="table-responsive form-group col-sm-12" style="margin-left: 0px;margin-right: 0px;">

                        <table class="table" id="tabla_vf">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th> <i class="fa fa-comments-o"></i> Preguntas  <button type="button" class="btn btn-primary btn-xs" style="align: right" onclick="add_item();">
                                        Nuevo item
                                    </button></th>
                                <th> <i class="fa fa-key"></i></th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr class="success">
                                <td width="5%">1)</td>
                                <td width="90%"> <input class="form-control input-xs"  id="alternativa1" maxlength="200" type="text" placeholder="Pregunta V o F - 1"></td>
                                <td width="5%">
                                    <div class="smart-form">
                                        <label class="toggle">
                                            <input type="checkbox" name="checkbox-toggle" style="margin-left:0px">
                                            <i data-swchon-text="V" data-swchoff-text="F"></i></label></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                </fieldset>



                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Cancelar
                    </button>
                    <button type="button" class="btn btn-success">
                        Guardar Pregunta
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