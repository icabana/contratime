function upload_contratos(){
 
    $('#modal_documentos_contrato').modal('hide');
    $('.modal-backdrop ').hide();
  
    var inputFileImage = document.getElementById("fileToUploadContratos");
    var file = inputFileImage.files[0];
    var data = new FormData();
    data.append('fileToUploadContratos',file);

    var contrato_contrato = $("#contrato_contrato_upload").val();
    
    data.append('id_contrato_upload', $("#id_contrato_upload").val());
                                   
    $.ajax({
        url: "vistas/contratos/contratos/comp_upload/upload.php",        
        type: "POST",             
        data: data, 			  
        contentType: false,       
        cache: false,             
        processData:false,        
        success: function(data)   
        {
           
            actualizar_lista_contratos(contrato_contrato);
          
        }
    });
          
}

function contrato_seleccionado (id_contrato, contrato_contrato){

    $("#id_contrato_upload").val(id_contrato);  
    $("#contrato_contrato_upload").val(contrato_contrato);  
            
}

function eliminar_documento_contrato(archivo, id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar este archivo?", "eliminar_documento_contrato2('" + archivo + "', " + id_contrato + "); ");
  
}

function eliminar_documento_contrato2(archivo, id_contrato) {

    ejecutarAccion(
      'contratos',
      'Contratos',
      'eliminarDocumento',
      'archivo=' + archivo+'&id_contrato=' +id_contrato,
      "$('#div_tabla_contratos').html(data); mensaje_alertas('success', 'Documento Eliminado correctamente', 'center'); "

    );

}

function actualizar_lista_contratos(contrato_contrato) {

    ejecutarAccionSinAlert(
      'contratos',
      'Contratos',
      'actualizarDocumento',
      'id_contrato=' +contrato_contrato,
      "$('#div_tabla_contratos').html(data); "

    );

}