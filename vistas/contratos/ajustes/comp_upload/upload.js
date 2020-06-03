function upload_ajustes(){
 
    $('#modal_documentos_ajuste').modal('hide');
    $('.modal-backdrop ').hide();
  
    var inputFileImage = document.getElementById("fileToUploadAjustes");
    var file = inputFileImage.files[0];
    var data = new FormData();
    data.append('fileToUploadAjustes',file);

    var contrato_ajuste = $("#contrato_ajuste_upload").val();
    
    data.append('id_ajuste_upload', $("#id_ajuste_upload").val());
                                   
    $.ajax({
        url: "vistas/contratos/ajustes/comp_upload/upload.php",        
        type: "POST",             
        data: data, 			  
        contentType: false,       
        cache: false,             
        processData:false,        
        success: function(data)   
        {
            
            $("#fileToUploadAjustes").val("");
            actualizar_lista_ajustes(contrato_ajuste);
          
        }
    });
          
}

function ajuste_seleccionado (id_ajuste, contrato_ajuste){

    $("#id_ajuste_upload").val(id_ajuste);  
    $("#contrato_ajuste_upload").val(contrato_ajuste);  
            
}

function eliminar_documento_ajuste(archivo, id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar este archivo?", "eliminar_documento_ajuste2('" + archivo + "', " + id_contrato + "); ");
  
}

function eliminar_documento_ajuste2(archivo, id_contrato) {

    ejecutarAccion(
      'contratos',
      'Ajustes',
      'eliminarDocumento',
      'archivo=' + archivo+'&id_contrato=' +id_contrato,
      "$('#tab_7_ajustes').html(data); mensaje_alertas('success', 'Archivo Eliminado correctamente', 'center'); "

    );

}

function actualizar_lista_ajustes(contrato_ajuste) {

    ejecutarAccionSinAlert(
      'contratos',
      'Ajustes',
      'actualizarDocumento',
      'id_contrato=' +contrato_ajuste,
      "$('#tab_7_ajustes').html(data); "

    );

}