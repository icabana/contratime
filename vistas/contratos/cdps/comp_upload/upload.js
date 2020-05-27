function upload_cdps(){
 
    $('#modal_documentos_cdp').modal('hide');
    $('.modal-backdrop ').hide();
  
    var inputFileImage = document.getElementById("fileToUploadCdps");
    var file = inputFileImage.files[0];
    var data = new FormData();
    data.append('fileToUploadCdps',file);

    var contrato_cdp = $("#contrato_cdp_upload").val();
    
    data.append('id_cdp_upload', $("#id_cdp_upload").val());
                                   
    $.ajax({
        url: "vistas/contratos/cdps/comp_upload/upload.php",        
        type: "POST",             
        data: data, 			  
        contentType: false,       
        cache: false,             
        processData:false,        
        success: function(data)   
        {
           
            actualizar_lista_cdps(contrato_cdp);
          
        }
    });
          
}

function cdp_seleccionado (id_cdp, contrato_cdp){

    $("#id_cdp_upload").val(id_cdp);  
    $("#contrato_cdp_upload").val(contrato_cdp);  
            
}

function eliminar_documento_cdp(archivo, id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar este archivo?", "eliminar_documento_cdp2('" + archivo + "', " + id_contrato + "); ");
  
}

function eliminar_documento_cdp2(archivo, id_contrato) {

    ejecutarAccion(
      'contratos',
      'Cdps',
      'eliminarDocumento',
      'archivo=' + archivo+'&id_contrato=' +id_contrato,
      "$('#tab_4_cdps').html(data); mensaje_alertas('success', 'Archivo Eliminado correctamente', 'center'); "

    );

}

function actualizar_lista_cdps(contrato_cdp) {

    ejecutarAccionSinAlert(
      'contratos',
      'Cdps',
      'actualizarDocumento',
      'id_contrato=' +contrato_cdp,
      "$('#tab_4_cdps').html(data); "

    );

}