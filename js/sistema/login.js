function login() {

    if ($("#documento").val() == "" || $("#password").val() == "") {

        mensaje_alertas("error", "Los campos son obligatorios", "center");

    } else {

        ejecutarAccion(
            "sistema",
            "Sistema",
            "validar",
            $("#form_login").serialize(),
            "validar_login(data); "
        );

    }

}

function validar_login(data) {

    if (data == '1') {

        location.reload();
        return true;        

    } else {

        mensaje_alertas('error', data, 'center');

    }

}

function recordar_contrasena() {

    if ($("#documento").val() == "") {

        mensaje_alertas("error", "Debe colocar el Documento con el que desea iniciar sesión.", "center");        

    }else{

        ejecutarAccion(
            "configuracion",
            "Login",
            "recuperarContrasena",
            "documento="+$("#documento").val(),
            "alert(data);"
        );

    }

}

function validar_requeridos() {
    var error = 0;
    $('.requerido').each(function (i, elem) {
        if ($(elem).val() == '') {
            $(elem).css({ 'border': '1px solid red' });
            error++;
        } else {
            $(elem).css({ 'border': '0px' });
        }
    });
    if (error > 0) {
        mensaje_alertas("error", "Debe rellenar los campos requeridos", "center");
        return 0;
    }

    return 1;
}


function cerrar() {

    mensaje_confirmar("¿Desea Cerrar Sesión?", "cerrar_sesion();");

}


function cerrar_sesion() {

    $.post(
        "index.php",
        {
            modulo: "sistema",
            controlador: "Sistema",
            accion: "cerrar"
        }, function (data) {
            open(data, '_self');
        }

    );

}