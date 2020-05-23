function upload_cdps(){

    $(".upload-msg").text('Cargando...');
    var inputFileImage = document.getElementById("fileToUploadCdps");
    var file = inputFileImage.files[0];
    var data = new FormData();
    data.append('fileToUploadCdps',file);
    
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
            actualizar_documentos_entrante();
            $('#modal_documentos_cdp').modal('hide');
            $('#fileToUploadCdps').val('');
            window.setTimeout(function() {
            $(".alert-dismissible").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
            });	}, 2000);
        }
    });
            
}

function cdp_seleccionado (id_cdp){

    $("#id_cdp_upload").val(id_cdp);  
            
}