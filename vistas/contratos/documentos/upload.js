function upload_documentos(){
 
    $('#modal_documentos_contrato').modal('hide');
    $('.modal-backdrop ').hide();
  
    var inputFileImage = document.getElementById("fileToUploadDocumentos");
    var file = inputFileImage.files[0];
    var data = new FormData();
    data.append('fileToUploadDocumentos',file);

    var id_contrato_upload = $("#id_contrato_upload").val();
    
    data.append('id_contrato_upload', $("#id_contrato_upload").val());
    data.append('id_documento_upload', $("#id_documento_upload").val());
        
    $.ajax({
        url: "vistas/contratos/documentos/upload.php",        
        type: "POST",             
        data: data, 			  
        contentType: false,       
        cache: false,             
        processData:false,        
        success: function(data)   
        {           
            $("#fileToUploadDocumentos").val("");
            actualizar_lista_documentos(id_contrato_upload);
          
        }
    });
          
}

function documento_seleccionado (id_documento, id_contrato){

    $("#id_documento_upload").val(id_documento);  
    $("#id_contrato_upload").val(id_contrato);  
            
}

function eliminar_documento_contrato(archivo, id_contrato, id_documento) {

    mensaje_confirmar(
            "¿Está seguro de eliminar este archivo?", 
            "eliminar_documento_contrato2('" + archivo + "', " + id_contrato + ", " + id_documento + "); "
    );
  
}

function eliminar_documento_contrato2(archivo, id_contrato, id_documento) {

    ejecutarAccion(
      'administracion',
      'Documentos',
      'eliminarDocumento',
      'archivo=' + archivo+'&id_contrato_upload=' +id_contrato+'&id_documento=' +id_documento,
      "$('#div_documentos').html(data);  mensaje_alertas('success', 'Documento Eliminado Exitosamente', 'center');"

    );

}

function actualizar_lista_documentos(id_contrato_upload) {
   
    ejecutarAccionSinAlert(
      'administracion',
      'Documentos',
      'actualizarDocumento',
      'id_contrato_upload=' +id_contrato_upload,
      "$('#div_documentos').html(data);"

    );

}