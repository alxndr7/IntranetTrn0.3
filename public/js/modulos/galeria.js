
function ver_imagenes_evento(obj){
    alert(obj);
}

function cargar_imagenes_evento(id){

    $.ajax({
            url: 'imagenes_evento',
            type: 'GET',
            data: {
                id : id
            },
            success: function (data) {
                $('#galeria_imagenes').html(data);
                /*
                 fn_actualizar_grilla('tabla_sectores', 'list_sectores');
                 MensajeExito('Nuevo Contribuyente', 'El Sector Ha sido Insertado.');*/
            },
            error: function (data) {
                // mostraralertas('* Contactese con el Administrador...');
            }
        });

}