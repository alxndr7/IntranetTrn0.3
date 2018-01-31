
<div class="modal-dialog">
    <div class="modal-content" style="width: 800px" >
        <div class="modal-header" style="background-color: #636366">
            <button type="button" style="color: white" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
            </button>
            <h4 class="modal-title"  style="color: white">
                <strong>Firma OUTLOOK</strong>
            </h4>
        </div>
        <div class="modal-body no-padding">
            <div class="widget-body">
                <!-- content goes here -->
            <form id="edit_form_evento" class="form-horizontal">
                <input type="hidden" id="evento_id" name="evento_id"/>
                <fieldset style="padding-right: 0px;">
<br>
                    <div class="form-group col-sm-12" style="margin-left: 0px;margin-right: 0px; margin:0 auto;" id="div1" >

                        <style>
                            .first-half {
                                float: left;
                                width: 50%;
                            }
                            .second-half {
                                float: right;
                                width: 50%;
                            }

                        </style>
                            <table style="width: 780px;font-family: Arial;" >
                                <tr class="">
                                    <td style="width:265px;font-size: 14px; border-right:2px solid;border-color: #636366"> <strong style="color:#101140">{{ucwords(strtolower($info_firma[0]->nombre1)).' '.ucwords(strtolower($info_firma[0]->nombre2)).' '.ucwords(strtolower($info_firma[0]->ape_pat)).' '.ucwords(strtolower($info_firma[0]->ape_mat))}} </strong><br>
                                        {{$info_firma[0]->puesto_nombre}}<br>
                                        {{$info_firma[0]->area_nombre}}<br>
                                        {{$info_firma[0]->telef_trn_rpc}}<br>
                                        {{$info_firma[0]->mail_trn}}
                                    </td>
                                    <td style="width:250px;border-right:2px solid;border-color: #636366">
                                            <img src="http://172.20.1.168/IntranetTrn0.3/public/img/logo_firma.png" style="width: 230px;height: 100px" >
                                    </td>
                                    <td style="width:265px;font-size: 14px; border-left:1px solid;">
                                       &nbsp;&nbsp;Transaltisa S.A. - Corporación Cervesur<br>
                                        &nbsp;&nbsp;Eduardo Lopez de Romaña s/n<br>
                                        &nbsp;&nbsp;Parque Industrial - Arequipa<br>
                                        &nbsp;&nbsp;T.(054) 606 868<br>
                                        &nbsp;&nbsp;www.transaltisa.com.pe
                                    </td>
                                </tr>
                                <tr class="">
                                    <td colspan="3"  style="font-size: 9px">
                                        <br>
                                        El contenido de esta comunicación electrónica no se considera oferta o acuerdo de voluntades, salvo que sea suscrito por firma del representante legal de Transaltisa S.A.<br>
                                        El contenido de esta comunicación es confidencial para uso exclusivo del destinatario, por lo que se prohíbe su divulgación, total o parcial a cualquier tercero no autorizado.

                                    </td>
                                </tr>
                                <tr class="">
                                    <td colspan="3"  style="font-size: 8px;font-style: italic">
                                        <br>
                                        The content of this electronic communication is not to be considered as an offer, proposal, or agreement unless it is confirmed in a document duly signed by the Transaltisa legal representative.<br>
                                        The content of this communication is confidential and for the exclusive use of the addressee. Its total or partial disclosure to any unauthorized third party is strictly forbidden.
                                    </td>
                                </tr>
                            </table>
                        <table style="width: 780px;font-family: Arial;" >
                            <br>
                            <tr class="">

                                <td  style="width:60px;">
                                        <img src="http://172.20.1.168/IntranetTrn0.3/public/img/firma_planeta_green.jpg" style="float: left;width: 55px;height: 40px;">
                                </td>
                                <td style="width:330px;">
                                    <strong style="color: green;font-size: 10px;">
                                        &nbsp;&nbsp;&nbsp;El medio ambiente esta en nuestras manos.<br>
                                        &nbsp;&nbsp;&nbsp;Antes de imprimir este mensaje asegurate que es necesario.
                                    </strong>
                                </td>
                                <td  style="width:50px;text-align: right">
                                        <img src="http://172.20.1.168/IntranetTrn0.3/public/img/firma_iso.png" style="width: 40px;height: 40px">
                                </td>
                                <td style="width:340px;">
                                    <strong style="color:#101140;font-size: 14px;">Somnolencia Anulada, Operación Asegurada</strong>
                                </td>
                            </tr>
                        </table>


                        </div>

                </fieldset>


                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Cancelar
                    </button>
                    <button type="button" class="btn btn-success" onclick="CopyToClipboard('div1')">
                        Copiar Firma
                    </button>
                </div>

            </form>

            </div>
        </div>

    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
