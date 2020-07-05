<?php

$icono_archivo = "";
$documento_prorroga = "";

$path = 'archivos/uploads/prorrogas/' . $prorroga['id_prorroga'] . '/';

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

        $id_prorroga = $prorroga['id_prorroga'];

        if ($archivo != "." && $archivo != "..") {
            $extension = pathinfo($archivo, PATHINFO_EXTENSION);
            $nombre_archivo = $archivo;
            $ruta_archivo = $path . $nombre_archivo;

            $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/prorrogas/comp_upload/imagenes/pdf.png">';
            if ($extension == "pdf") {
                $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/prorrogas/comp_upload/imagenes/pdf.png">';
            }
            if ($extension == "doc" || $extension == "docx") {
                $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/prorrogas/comp_upload/imagenes/word.png">';
            }
            if ($extension == "xls" || $extension == "xlsx") {
                $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/prorrogas/comp_upload/imagenes/excel.png"';
            }

            $documento_prorroga .= '  
                <a target="_blank" title="Ver/Descargar Documento"  href="' . $ruta_archivo . '">' . $icono_archivo . '</a>                         
                <br/> 
                <a href="#"  title="Eliminar Documento" onclick="eliminar_documento_prorroga(\'' . $ruta_archivo . '\', '.$prorroga['contrato_prorroga'].'); return false;">Eliminar</a>
                ';
        }
        
    }

} else {

    $id_prorroga = $prorroga['id_prorroga'];
    $contrato_prorroga = $prorroga['contrato_prorroga'];

    $icono_archivo ='<img width="30px" height="30px" src="vistas/contratos/prorrogas/comp_upload/imagenes/nuevo.png">';

    $documento_prorroga .= '<a href="#" onclick="prorroga_seleccionado('.$id_prorroga.', '.$contrato_prorroga.');"  data-toggle="modal" data-target="#modal_documentos_prorroga" >' . $icono_archivo . '</a>';

}