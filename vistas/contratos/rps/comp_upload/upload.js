function upload_rps(){
 
    $('#modal_documentos_rp').modal('hide');
    $('.modal-backdrop ').hide();
  
    var inputFileImage = document.getElementById("fileToUploadRps");
    var file = inputFileImage.files[0];
    var data = new FormData();
    data.append('fileToUploadRps',file);

    var contrato_rp = $("#contrato_rp_upload").val();
    
    data.append('id_rp_upload', $("#id_rp_upload").val());
                                   
    $.ajax({
        url: "vistas/contratos/rps/comp_upload/upload.php",        
        type: "POST",             
        data: data, 			  
        contentType: false,       
        cache: false,             
        processData:false,        
        success: function(data)   
        {
           
            actualizar_lista_rps(contrato_rp);
          
        }
    });
          
}

function rp_seleccionado (id_rp, contrato_rp){

    $("#id_rp_upload").val(id_rp);  
    $("#contrato_rp_upload").val(contrato_rp);  
            
}

function eliminar_documento_rp(archivo, id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar el documento (RP)?", "eliminar_documento_rp2('" + archivo + "', " + id_contrato + "); ");
  
}

function eliminar_documento_rp2(archivo, id_contrato) {

    ejecutarAccion(
      'contratos',
      'Rps',
      'eliminarDocumento',
      'archivo=' + archivo+'&id_contrato=' +id_contrato,
      "$('#div_tabla_rps').html(data); mensaje_alertas('success', 'Archivo Eliminado correctamente', 'center'); "

    );

}

function actualizar_lista_rps(contrato_rp) {

    ejecutarAccionSinAlert(
      'contratos',
      'Rps',
      'actualizarDocumento',
      'id_contrato=' +contrato_rp,
      "$('#div_tabla_rps').html(data); "

    );

}