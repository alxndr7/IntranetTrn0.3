var list = new Array();


 /*

  $("#dl_subir_archivos").children.find('.ui-dialog-titlebar-close').on('click'),function () {
  alert(3);
  }
$(document).on('click','.dl_sub_arch .ui-dialog-titlebar-close',function(){
    //close button clicked
    alert(2);
});
*/
$("#dl_eliminar_archivos").parent().find('div.ui-dialog-titlebar').removeClass(removeClass);

function validarEvento()
{
    var validator = $('#add-event-form').data('bootstrapValidator');
    validator.validate();
    if(validator.isValid()){
        var data = $('#add-event-form').serialize();
        //alert(data);
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: 'insert_evento',
            type: 'POST',
            data: data,
            success: function (data) {
                $('#calendar').fullCalendar( 'refetchEvents' );
            },
            error: function (data) {
            }
        });

    }
}


function validarEvento_editar()
{
    var validator = $('#edit_form_evento').data('bootstrapValidator');
    validator.validate();
    //alert($('#edit_form_evento').serialize());
    if(validator.isValid()){
        var data = $('#edit_form_evento').serialize();
        //alert(data);
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: 'editar_evento',
            type: 'POST',
            data: data,
            success: function (data) {
                $('#calendar').fullCalendar( 'refetchEvents' );
                $('#myModal').modal('hide');
            },
            error: function (data) {
            }
        });

    }
}


function open_dialog_subir_imagenes() {

    $("#dialog_prueba").dialog({
        autoOpen: false, modal: true, width: 600, show: {effect: "fade", duration: 300}, resizable: false,
        title: "<div class='widget-header'><h4>.:  LIMITES :.</h4></div>",
        buttons: [{
            html: "<i class='fa fa-save'></i>&nbsp; Guardar",
            "class": "btn btn-success bg-color-green",
            click: function () {
                save_edit_manzana(1);
            }
        }, {
            html: "<i class='fa fa-sign-out'></i>&nbsp; Salir",
            "class": "btn btn-danger",
            click: function () {
                $(this).dialog("close");
            }
        }],
    });
}

function open_dialog_eliminar_imagenes(obj,id) {

    list = new Array();

    $("#dl_eliminar_archivos").dialog({
        autoOpen: false, modal: true, width: 600, show: {effect: "fade", duration: 300}, resizable: false,
        title : '<div class="widget-header" style="color: white"><h4><i class="fa fa-file-image-o"></i> Eliminar imágenes del evento</h4></div>',
        buttons: [{
            html: "<i class='fa fa-save'></i>&nbsp; Eliminar",
            "class": "btn btn-success bg-color-green",
            click: function () {
                eliminar_imagenes();
            }
        }, {
            html: "<i class='fa fa-sign-out'></i>&nbsp; Salir",
            "class": "btn btn-danger",
            click: function () {
                $(this).dialog("close");
            }
        }],
    });

    $.ajax({
        type: 'GET',
        url: 'eliminar_archivos_dl',
        data: {
            'id': id
        },
        success: function(data) {
            //alert(data);
            //event.preventDefault();
            //$('#myModal').modal('show');
            // $('#myModal').show().html(data);

            $('#dl_eliminar_archivos').dialog('open').html(data);
            if(flagRemoveClass){
                $("#dl_eliminar_archivos").parent().find('div.ui-dialog-titlebar').removeClass(removeClass);
            }
            flagRemoveClass = 1;
            removeClass = obj;
            $("#dl_eliminar_archivos").parent().find('div.ui-dialog-titlebar').addClass(obj);

        },
    });
}


function list_eliminar_img(url, chk){

    if(chk.checked){
        list.push(url);
    }
    else{
        var index = list.indexOf(url);
        if(index != -1){
            list.splice(index, 1);
        }
    }
    //alert(list);
}

function eliminar_imagenes(){


    $.ajax({
        url: 'eliminar_archivos',
        type: 'GET',
        data: {
            id : $("#evento_id").val(),
            list_eliminar: list
        },
        success: function (data) {
            dialog_close('dl_eliminar_archivos');
            $('#recargar_imagenes').html(data);
            /*
            fn_actualizar_grilla('tabla_sectores', 'list_sectores');
            MensajeExito('Nuevo Contribuyente', 'El Sector Ha sido Insertado.');*/
        },
        error: function (data) {
           // mostraralertas('* Contactese con el Administrador...');
        }
    });
}
