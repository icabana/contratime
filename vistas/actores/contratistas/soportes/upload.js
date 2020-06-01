function upload_soportes(){
 
    $('#modal_soportes_contratista').modal('hide');
    $('.modal-backdrop ').hide();
  
    var inputFileImage = document.getElementById("fileToUploadSoportes");
    var file = inputFileImage.files[0];
    var data = new FormData();
    data.append('fileToUploadSoportes',file);

    var id_contratista_upload = $("#id_contratista_upload").val();
    
    data.append('id_contratista_upload', $("#id_contratista_upload").val());
    data.append('id_soporte_upload', $("#id_soporte_upload").val());
      
    $.ajax({
        url: "vistas/actores/contratistas/soportes/upload.php",        
        type: "POST",             
        data: data, 			  
        contentType: false,       
        cache: false,             
        processData:false,        
        success: function(data)   
        {
           
            actualizar_lista_soportes(id_contratista_upload);
          
        }
    });
          
}

function soporte_seleccionado (id_soporte, id_contratista){

    $("#id_soporte_upload").val(id_soporte);  
    $("#id_contratista_upload").val(id_contratista);  
            
}

function eliminar_soporte_contratista(archivo, id_contratista, id_soporte) {

    mensaje_confirmar(
            "¿Está seguro de eliminar este archivo?", 
            "eliminar_soporte_contratista2('" + archivo + "', " + id_contratista + ", " + id_soporte + "); "
    );
  
}

function eliminar_soporte_contratista2(archivo, id_contratista, id_soporte) {

    ejecutarAccion(
      'actores',
      'Soportes',
      'eliminarSoporte',
      'archivo=' + archivo+'&id_contratista_upload=' +id_contratista+'&id_soporte=' +id_soporte,
      "$('#div_soportes').html(data);  mensaje_alertas('success', 'Soporte Eliminado Exitosamente', 'center');"

    );

}

function actualizar_lista_soportes(id_contratista_upload) {
    
    ejecutarAccionSinAlert(
      'actores',
      'Soportes',
      'actualizarSoporte',
      'id_contratista_upload=' +id_contratista_upload,
      "$('#div_soportes').html(data);"

    );

}