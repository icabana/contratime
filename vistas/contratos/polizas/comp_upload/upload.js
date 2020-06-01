function upload_polizas(){
 
    $('#modal_documentos_poliza').modal('hide');
    $('.modal-backdrop ').hide();
  
    var inputFileImage = document.getElementById("fileToUploadPolizas");
    var file = inputFileImage.files[0];
    var data = new FormData();
    data.append('fileToUploadPolizas',file);

    var contrato_poliza = $("#contrato_poliza_upload").val();
    
    data.append('id_poliza_upload', $("#id_poliza_upload").val());
                                   
    $.ajax({
        url: "vistas/contratos/polizas/comp_upload/upload.php",        
        type: "POST",             
        data: data, 			  
        contentType: false,       
        cache: false,             
        processData:false,        
        success: function(data)   
        {
           
            actualizar_lista_polizas(contrato_poliza);
          
        }
    });
          
}

function poliza_seleccionado (id_poliza, contrato_poliza){

    $("#id_poliza_upload").val(id_poliza);  
    $("#contrato_poliza_upload").val(contrato_poliza);  
            
}

function eliminar_documento_poliza(archivo, id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar este archivo?", "eliminar_documento_poliza2('" + archivo + "', " + id_contrato + "); ");
  
}

function eliminar_documento_poliza2(archivo, id_contrato) {

    ejecutarAccion(
      'contratos',
      'Polizas',
      'eliminarDocumento',
      'archivo=' + archivo+'&id_contrato=' +id_contrato,
      "$('#tab_34_polizas').html(data); mensaje_alertas('success', 'Archivo Eliminado correctamente', 'center'); "

    );

}

function actualizar_lista_polizas(contrato_poliza) {

    ejecutarAccionSinAlert(
      'contratos',
      'Polizas',
      'actualizarDocumento',
      'id_contrato=' +contrato_poliza,
      "$('#tab_34_polizas').html(data); "

    );

}