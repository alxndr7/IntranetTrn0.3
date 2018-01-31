var cont_tabla_vf =1;

function modal_nueva_evaluacion(){

    MensajeDialogLoadAjax('myModal', '.:: CARGANDO ...');
    $.ajax({
        url: 'modal_nueva_evaluacion',
        type: 'GET',
        success: function (data) {

            $('#myModal').modal('show');
            $('#myModal').show().html(data);

            /*
             fn_actualizar_grilla('tabla_sectores', 'list_sectores');
             MensajeExito('Nuevo Contribuyente', 'El Sector Ha sido Insertado.');*/
        },
        error: function (data) {
            // mostraralertas('* Contactese con el Administrador...');
        }
    });

}

function modal_nueva_pregunta(){

    var select_pregunta = $('#tipo_pregunta').val();

    switch(select_pregunta) {
        case "1":
            cont_tabla_vf=1;
            $.ajax({
                url: 'modal_nueva_pregunta_vf',
                type: 'GET',
                success: function (data) {

                    $('#myModalPregunta').modal('show');
                    $('#myModalPregunta').show().html(data);

                    /*
                     fn_actualizar_grilla('tabla_sectores', 'list_sectores');
                     MensajeExito('Nuevo Contribuyente', 'El Sector Ha sido Insertado.');*/
                },
                error: function (data) {
                    // mostraralertas('* Contactese con el Administrador...');
                }
            });
            break;
        case "2":
            $.ajax({
                url: 'modal_nueva_pregunta_simple',
                type: 'GET',
                success: function (data) {

                    $('#myModalPregunta').modal('show');
                    $('#myModalPregunta').show().html(data);

                    /*
                     fn_actualizar_grilla('tabla_sectores', 'list_sectores');
                     MensajeExito('Nuevo Contribuyente', 'El Sector Ha sido Insertado.');*/
                },
                error: function (data) {
                    // mostraralertas('* Contactese con el Administrador...');
                }
            });
            break;
        case "3":
            $.ajax({
                url: 'modal_nueva_pregunta_multiple',
                type: 'GET',
                success: function (data) {

                    $('#myModalPregunta').modal('show');
                    $('#myModalPregunta').show().html(data);

                    /*
                     fn_actualizar_grilla('tabla_sectores', 'list_sectores');
                     MensajeExito('Nuevo Contribuyente', 'El Sector Ha sido Insertado.');*/
                },
                error: function (data) {
                    // mostraralertas('* Contactese con el Administrador...');
                }
            });
            break;
        default:
            $('#alerta_validar_pregunta').removeClass('hide');
            setTimeout(function(){
                $('#alerta_validar_pregunta').addClass('hide');
            }, 2500);
    }

}

function add_item(){

    cont_tabla_vf++;
    var tr ='';
    if(cont_tabla_vf%2 == 0)
        tr = '<tr class="info">';
    else
        tr = '<tr class="success">';


    $("#tabla_vf").find('tbody')
        .append($(tr)
            .append($('<td>').text(cont_tabla_vf+')')
            ) .append($('<td>')
                .append($('<input>')
                    .attr('class','form-control input-xs')
                    .attr('placeholder','Pregunta V o F - ' + cont_tabla_vf)
                )
            ) .append($('<td>')
                .append($('<div>')
                    .attr('class', 'smart-form')
                    .append($('<label>')
                        .attr('class','toggle')
                        .append($('<input>')
                            .attr('type','checkbox')
                            .attr('name','checkbox-toggle')
                        )
                        .append($('<i>')
                            .attr('data-swchon-text','V')
                            .attr('data-swchoff-text','F')
                        )
                    )
                )
            )
        );
}
