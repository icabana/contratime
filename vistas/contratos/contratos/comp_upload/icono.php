<?php

$icono_archivo = "";
$documento_contrato = "";

$path = 'archivos/uploads/contratos/' . $contrato['id_contrato'] . '/';

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

        $id_contrato = $contrato['id_contrato'];

        if ($archivo != "." && $archivo != "..") {
            $extension = pathinfo($archivo, PATHINFO_EXTENSION);
            $nombre_archivo = $archivo;
            $ruta_archivo = $path . $nombre_archivo;

            $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/contratos/comp_upload/imagenes/pdf.png">';
            if ($extension == "pdf") {
                $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/contratos/comp_upload/imagenes/pdf.png">';
            }
            if ($extension == "doc" || $extension == "docx") {
                $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/contratos/comp_upload/imagenes/word.png">';
            }
            if ($extension == "xls" || $extension == "xlsx") {
                $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/contratos/comp_upload/imagenes/excel.png"';
            }

            $documento_contrato .= '  
                <a target="_blank" title="Ver/Descargar Documento"  href="' . $ruta_archivo . '">' . $icono_archivo . '</a>                         
                 
                      <br><a href="#"  title="Eliminar Documento" onclick="eliminar_documento_contrato(\'' . $ruta_archivo . '\', '.$contrato['contrato_contrato'].'); return false;">Eliminar</a>
                ';
        }
        
    }

} else {

    $id_contrato = $contrato['id_contrato'];
    $contrato_contrato = $contrato['contrato_contrato'];

    $icono_archivo ='<img width="30px" height="30px" src="vistas/contratos/contratos/comp_upload/imagenes/nuevo.png">';

    $documento_contrato .= '<a href="#" onclick="contrato_seleccionado('.$id_contrato.', '.$contrato_contrato.');"  data-toggle="modal" data-target="#modal_documentos_contrato" >' . $icono_archivo . '</a>';

}