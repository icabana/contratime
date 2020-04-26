
function insertar_usuario() {

    if(!validar_requeridos()){
        return 0;   
    }

    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

    if (!regex.test($('#correo_usuario').val().trim())) {    
        mensaje_alertas("error", "El correo registrado no tiene un formato correcto.", "center");
        return false;
    }

    var roles = "roles=";
    $("input[type=checkbox]:checked").each(function(){       
        roles += $(this).val()+",";
    });
    roles += "0";

    var datos = $('#form_usuarios').serialize()+"&"+roles;

    ejecutarAccion(
      'configuracion',
      'Usuarios',
      'insertar',
      datos,
      'insertar_usuario2(data)'
    );

}

function insertar_usuario2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Usuario Registrado Exitosamente", "center");
      cargar_usuarios();
    } else {
      mensaje_alertas("error", "El Documento ya se encuentra registrado", "center");
    }

}