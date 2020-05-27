function upload_cdps(){

    $(".upload-msg").text('Cargando...');
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
            $(".upload-msg").html(data);
            $('#modal_documentos_cdp').modal('hide');
            $('#fileToUploadCdps').val('');
            actualizar_lista_cdps(contrato_cdp);
            window.setTimeout(function() {
            $(".alert-dismissible").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
            });	}, 2000);
        }
    });
            
}

function cdp_seleccionado (id_cdp, contrato_cdp){

    $("#id_cdp_upload").val(id_cdp);  
    $("#contrato_cdp_upload").val(contrato_cdp);  
            
}


function eliminar_documento_cdp(archivo, id_contrato) {

    var opcion = confirm("¿Está seguro de eliminar este archivo?");
    if (opcion != true) return 0;

    ejecutarAccion(
      'contratos',
      'Cdps',
      'eliminarDocumento',
      'archivo=' + archivo+'&id_contrato=' +id_contrato,
      "$('#tab_4_cdps').html(data); mensaje_alertas('success', 'Archivo Eliminado correctamente', 'center'); "

    );

}



function actualizar_lista_cdps(contrato_cdp) {

    ejecutarAccion(
      'contratos',
      'Cdps',
      'actualizarDocumento',
      'id_contrato=' +contrato_cdp,
      "$('#tab_4_cdps').html(data); "

    );

}