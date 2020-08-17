function enviar_correo_contratosxfinalizar(id_contrato) {
 
    mensaje_confirmar("¿Está seguro de Enviar Notificación por Correo?", "enviar_correo_contratosxfinalizar2(" + id_contrato + "); ");

}

function enviar_correo_contratosxfinalizar2(id_contrato) {

    ejecutarAccion(
        'alertas',
        'Alertas',
        'contratoxFinalizar',
        "id_contrato=" + id_contrato,
        ''
    );

}

function enviar_correo_contratos_sin_pagar(id_contrato) {
 
    mensaje_confirmar("¿Está seguro de Enviar Notificación por Correo?", "enviar_correo_contratos_sin_pagar2(" + id_contrato + "); ");

}

function enviar_correo_contratos_sin_pagar2(id_contrato) {

    ejecutarAccion(
        'alertas',
        'Alertas',
        'contratoFinalizadosSinPagar',
        "id_contrato=" + id_contrato,
        ''
    );

}

function enviar_correo_procesos_x_finalizar(id_contrato) {
 
    mensaje_confirmar("¿Está seguro de Enviar Notificación por Correo?", "enviar_correo_procesos_x_finalizar2(" + id_contrato + "); ");

}

function enviar_correo_procesos_x_finalizar2(id_contrato) {

    ejecutarAccion(
        'alertas',
        'Alertas',
        'procesoxEvaluar',
        "id_contrato=" + id_contrato,
        ''
    );

}


function enviar_correo_procesos_x_cerrar(id_contrato) {
 
    mensaje_confirmar("¿Está seguro de Enviar Notificación por Correo?", "enviar_correo_procesos_x_cerrar2(" + id_contrato + "); ");

}

function enviar_correo_procesos_x_cerrar2(id_contrato) {

    ejecutarAccion(
        'alertas',
        'Alertas',
        'procesoxCerrar',
        "id_contrato=" + id_contrato,
        ''
    );

}