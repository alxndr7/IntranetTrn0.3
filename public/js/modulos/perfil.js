
function valid_change_passw()
{
    if($("#change_passw").valid())
        $("#change_passw").submit();
}


function modal_ver_firma(){

    $.ajax({
        url: 'modal_ver_firma',
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


function CopyToClipboard(containerid) {
    if (document.selection) {
        var range = document.body.createTextRange();
        range.moveToElementText(document.getElementById(containerid));
        range.select().createTextRange();
        document.execCommand("copy");

    } else if (window.getSelection) {
        var range = document.createRange();
        range.selectNode(document.getElementById(containerid));
        window.getSelection().addRange(range);
        document.execCommand("copy");
        alert("Firma Copiada")
    }}