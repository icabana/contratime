<?php

$icono_archivo = "";
$documento_poliza = "";

$path = 'archivos/uploads/polizas/' . $poliza['id_poliza'] . '/';

$directorio = dir($path);
$num_archivos = 0;

if (file_exists($path)) {

    while ($archivo = $directorio->read()) {

        if ($archivo != "." && $archivo != "..") {

            $num_archivos++;
        }
    }
}


if ($num_archivos >  0) {

    $directorio = dir($path);

    while ($archivo = $directorio->read()) {

        $id_poliza = $poliza['id_poliza'];

        if ($archivo != "." && $archivo != "..") {
            $extension = pathinfo($archivo, PATHINFO_EXTENSION);
            $nombre_archivo = $archivo;
            $ruta_archivo = $path . $nombre_archivo;

            $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/polizas/comp_upload/imagenes/pdf.png">';
            if ($extension == "pdf") {
                $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/polizas/comp_upload/imagenes/pdf.png">';
            }
            if ($extension == "doc" || $extension == "docx") {
                $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/polizas/comp_upload/imagenes/word.png">';
            }
            if ($extension == "xls" || $extension == "xlsx") {
                $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/polizas/comp_upload/imagenes/excel.png"';
            }

            $documento_poliza .= '  
                <a target="_blank" title="Ver/Descargar Documento"  href="' . $ruta_archivo . '">' . $icono_archivo . '</a>                         
                <br/> 
                <a href="#"  title="Eliminar Documento" onclick="eliminar_documento_poliza(\'' . $ruta_archivo . '\', '.$poliza['contrato_poliza'].'); return false;">Eliminar</a>
                ';
        }
        
    }

} else {

    $id_poliza = $poliza['id_poliza'];
    $contrato_poliza = $poliza['contrato_poliza'];

    $icono_archivo ='<img width="30px" height="30px" src="vistas/contratos/polizas/comp_upload/imagenes/nuevo.png">';

    $documento_poliza .= '<a href="#" onclick="poliza_seleccionado('.$id_poliza.', '.$contrato_poliza.');"  data-toggle="modal" data-target="#modal_documentos_poliza" >' . $icono_archivo . '</a>';

}