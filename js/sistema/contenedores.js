function abrirVentanaContenedor(modulo, controlador, accion, datos, script) {

    bloqueoCargando();

    $.post(
        "index.php",
        "&modulo=" + modulo + "&accion=" + accion + "&controlador=" + controlador + "&" + datos,
        function (data) {

            $("#cuerpo").html(data);
            eval(script);
            desbloqueoCargando();

        }

    );

}

function abrirVentanaContenedorTabla(tabla, modulo, controlador, accion, datos) {

    bloqueoCargando();

    $.post(
        "index.php",
        "&modulo=" + modulo + "&accion=" + accion + "&controlador=" + controlador + "&" + datos,
        function (data) {

            $("#cuerpo").html(data);
            $("#cuerpo").css("height", "100%");
            CrearTabla(tabla);
            desbloqueoCargando();
        }

    );

}

function abrirVentanaContenedorTablaScript(tabla, modulo, controlador, accion, datos, script) {

    bloqueoCargando();

    $.post(
        "index.php",
        "&modulo=" + modulo + "&accion=" + accion + "&controlador=" + controlador + "&" + datos,
        function (data) {

            $("#cuerpo").html(data);
            eval(script);
            $("#cuerpo").css("height", "100%");
            desbloqueoCargando();

        }

    );

}

function CrearTabla(id) {

    $('#' + id).DataTable({
        "language": {
            "emptyTable": "No hay datos disponibles en la tabla.",
            "info": "Del _START_ al _END_ de _TOTAL_ ",
            "infoEmpty": "Mostrando 0 registros de un total de 0.",
            "infoFiltered": "(filtrados de un total de _MAX_ registros)",
            "infoPostFix": "(actualizados)",
            "lengthMenu": "Mostrar _MENU_ registros",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "searchPlaceholder": "Dato para buscar",
            "zeroRecords": "No se han encontrado coincidencias.",
            "paginate": {
                "first": "Primera",
                "last": "Última",
                "next": "Siguiente",
                "previous": "Anterior"
            },
            "aria": {
                "sortAscending": "Ordenación ascendente",
                "sortDescending": "Ordenación descendente"
            }
        }
    });

}

function ejecutarAccion(modulo, controlador, accion, datos, script) {

    bloqueoCargando();
    
    $.post(
        "index.php",
        "&modulo=" + modulo + "&accion=" + accion + "&controlador=" + controlador + "&" + datos,
        function (data) {
            data = data.replace(/^\s+/g, '').replace(/\s+$/g, '');
            eval(script);
            desbloqueoCargando();
        }
    );
}

function ejecutarAccionSinAlert(modulo, controlador, accion, datos, script) {

    $.post(
        "index.php",
        "&modulo=" + modulo + "&accion=" + accion + "&controlador=" + controlador + "&" + datos,
        function (data) {
            data = data.replace(/^\s+/g, '').replace(/\s+$/g, '');
            eval(script);

        }
    );
}