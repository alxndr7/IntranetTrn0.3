
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" style="background-color: #636366">
            <button type="button" style="color: white" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
            </button>
            <h4 class="modal-title" style="color: white">
                <strong>Nueva Pregunta de selección simple</strong>
            </h4>
        </div>
        <div class="modal-body no-padding">
            <div class="widget-body">
                <!-- content goes here -->
            <form id="edit_form_evento" class="form-horizontal">
                <input type="hidden" id="evento_id" name="evento_id"/>
                <fieldset style="padding-right: 0px;">
<br>
                    <div class="form-group col-sm-12 bg-color-blueLight" style="margin-left: 0px;margin-right: 0px; text-align: center; color:white;">
                        <h4>.:Pregunta:.</h4>
                    </div>
                    <div class="form-group col-sm-2" style="margin-left: 0px;margin-right: 0px;">
                        <input class="form-control"  id="num_preg" name="num_preg" maxlength="2" type="number" placeholder="00">
                    </div>
                    <div class="form-group col-sm-10" style="margin-left: 0px;margin-right: 0px;">
                        <textarea class="form-control" placeholder="Pregunta..." rows="4" maxlength="500" id="description1" name="description1" ></textarea>
                        <p class="note">Máximo 500 caracteres</p>
                    </div>
                    <div class="form-group col-sm-12 bg-color-blueLight" style="margin-left: 0px;margin-right: 0px; text-align: center; color:white;">
                        <h4>.:Alternativas:.</h4>
                    </div>

                    <div class="table-responsive form-group col-sm-12" style="margin-left: 0px;margin-right: 0px;">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th> <i class="fa fa-comments-o"></i> Alternativas</th>
                                <th> <i class="fa fa-key"></i></th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr class="success">
                                <td width="5%">a)</td>
                                <td width="90%"> <input class="form-control input-xs"  id="alternativa1" maxlength="200" type="text" placeholder="Alternativa 1"></td>
                                <td width="5%">
                                    <div class="smart-form">
                                        <label class="radio">
                                            <input type="radio" name="radio" value="A" checked="checked" style="margin-left:0px">
                                            <i></i></label></div>
                                </td>
                            </tr>
                            <tr class="danger">
                                <td>b)</td>
                                <td><input class="form-control input-xs"  id="alternativa2" maxlength="200" type="text" placeholder="Alternativa 2"></td></td>
                                <td>
                                    <div class="smart-form">
                                        <label class="radio">
                                            <input type="radio" name="radio" value="B" checked="checked" style="margin-left:0px">
                                            <i></i></label></div>
                                </td>
                            </tr>
                            <tr class="warning">
                                <td>c)</td>
                                <td><input class="form-control input-xs"  id="alternativa3" maxlength="200" type="text" placeholder="Alternativa 3"></td></td>
                                <td>
                                    <div class="smart-form">
                                        <label class="radio">
                                            <input type="radio" name="radio" value="C" checked="checked" style="margin-left:0px">
                                            <i></i></label></div>
                                </td>
                            </tr>
                            <tr class="info">
                                <td>d)</td>
                                <td><input class="form-control input-xs"  id="alternativa4" maxlength="200" type="text" placeholder="Alternativa 4"></td></td>
                                <td>
                                    <div class="smart-form">
                                        <label class="radio">
                                            <input type="radio" name="radio" value="D" checked="checked" style="margin-left:0px">
                                            <i></i></label></div>
                                </td>
                            </tr>
                            <tr class="success">
                                <td>e)</td>
                                <td><input class="form-control input-xs"  id="alternativa5" maxlength="200" type="text" placeholder="Alternativa 5"></td></td>
                                <td>
                                    <div class="smart-form">
                                        <label class="radio">
                                        <input type="radio" name="radio" value="E" checked="checked" style="margin-left:0px">
                                            <i></i></label></div>
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



</script>