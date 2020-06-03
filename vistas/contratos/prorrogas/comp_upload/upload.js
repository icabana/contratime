function upload_prorrogas(){
 
    $('#modal_documentos_prorroga').modal('hide');
    $('.modal-backdrop ').hide();
  
    var inputFileImage = document.getElementById("fileToUploadProrrogas");
    var file = inputFileImage.files[0];
    var data = new FormData();
    data.append('fileToUploadProrrogas',file);

    var contrato_prorroga = $("#contrato_prorroga_upload").val();
    
    data.append('id_prorroga_upload', $("#id_prorroga_upload").val());
                                   
    $.ajax({
        url: "vistas/contratos/prorrogas/comp_upload/upload.php",        
        type: "POST",             
        data: data, 			  
        contentType: false,       
        cache: false,             
        processData:false,        
        success: function(data)   
        {

            $("#fileToUploadProrrogas").val("");
            actualizar_lista_prorrogas(contrato_prorroga);
          
        }
    });
          
}

function prorroga_seleccionado (id_prorroga, contrato_prorroga){

    $("#id_prorroga_upload").val(id_prorroga);  
    $("#contrato_prorroga_upload").val(contrato_prorroga);  
            
}

function eliminar_documento_prorroga(archivo, id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar este archivo?", "eliminar_documento_prorroga2('" + archivo + "', " + id_contrato + "); ");
  
}

function eliminar_documento_prorroga2(archivo, id_contrato) {

    ejecutarAccion(
      'contratos',
      'Prorrogas',
      'eliminarDocumento',
      'archivo=' + archivo+'&id_contrato=' +id_contrato,
      "$('#div_tabla_prorrogas').html(data); mensaje_alertas('success', 'Archivo Eliminado correctamente', 'center'); "

    );

}

function actualizar_lista_prorrogas(contrato_prorroga) {

    ejecutarAccionSinAlert(
      'contratos',
      'Prorrogas',
      'actualizarDocumento',
      'id_contrato=' +contrato_prorroga,
      "$('#div_tabla_prorrogas').html(data);  "

    );

}