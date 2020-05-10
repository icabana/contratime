function eliminar_supervisor_contrato(id_supervisor, id_contrato) {

  mensaje_confirmar("¿Está seguro de eliminar el Supervisor asociado a este contrato?", "eliminar_supervisor_contrato2(" + id_supervisor + ", " + id_contrato + "); ");

}

function eliminar_supervisor_contrato2(id_supervisor, id_contrato) {

    ejecutarAccion(
        'contratos',
        'Supervisores',
        'eliminar',
        "id_supervisor=" + id_supervisor+"&id_contrato=" + id_contrato,
        '$("#tab_2_supervisores").html(data);  mensaje_alertas("success", "Supervisor Eliminado con Éxito", "center"); '
    );

}