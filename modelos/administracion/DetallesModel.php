<?php

class DetallesModel extends ModelBase {
  
    function getTodos() {
        
        $query = "  SELECT 
                        id_detalle, 
                        plan_detalle,
                        codigos_detalle,
                        descripcion_detalle,
                        fechainicio_detalle,
                        meses_detalle,
                        modalidad_detalle,
                        fuente_detalle,
                        valtotal_detalle,
                        futuras_detalle,
                        estadofuturas_detalle,
                        contacto_detalle,

                        fuentes.nombre_fuente,
                        modalidades.nombre_modalidad

                
                    FROM planes_detalles 
                            LEFT JOIN planes ON planes_detalles.plan_detalle = planes.id_plan
                            LEFT JOIN modalidades ON planes_detalles.modalidad_detalle = modalidades.id_modalidad
                            LEFT JOIN fuentes ON planes_detalles.fuente_detalle = fuentes.id_fuente

                    ORDER BY codigos_detalle";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_detalle) {
       
        $query = "SELECT 
                    id_detalle, 
                    plan_detalle,
                    codigos_detalle,
                    descripcion_detalle,
                    fechainicio_detalle,
                    meses_detalle,
                    modalidad_detalle,
                    fuente_detalle,
                    valtotal_detalle,
                    futuras_detalle,
                    estadofuturas_detalle,
                    contacto_detalle

                FROM planes_detalles

                WHERE detalles.id_detalle='".$id_detalle."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }

    function insertar(      
                $plan_detalle,
                $codigos_detalle,
                $descripcion_detalle,
                $fechainicio_detalle,
                $meses_detalle,
                $modalidad_detalle,
                $fuente_detalle,
                $valtotal_detalle,
                $futuras_detalle,
                $estadofuturas_detalle,
                $contacto_detalle
        ){
                
        $query = "INSERT INTO planes_detalles (
                        plan_detalle,
                        codigos_detalle,
                        descripcion_detalle,
                        fechainicio_detalle,
                        meses_detalle,
                        modalidad_detalle,
                        fuente_detalle,
                        valtotal_detalle,
                        futuras_detalle,
                        estadofuturas_detalle,
                        contacto_detalle
                    )
                    VALUES(
                        '1',
                        '".utf8_decode($codigos_detalle)."',
                        '".utf8_decode($descripcion_detalle)."',
                        '".utf8_decode($fechainicio_detalle)."',
                        '".utf8_decode($meses_detalle)."',
                        '".utf8_decode($modalidad_detalle)."',
                        '".utf8_decode($fuente_detalle)."',
                        '".utf8_decode($valtotal_detalle)."',
                        '".utf8_decode($futuras_detalle)."',
                        '".utf8_decode($estadofuturas_detalle)."',
                        '".utf8_decode($contacto_detalle)."'
                    );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_detalle, 
                    $plan_detalle,
                    $codigos_detalle,
                    $descripcion_detalle,
                    $fechainicio_detalle,
                    $meses_detalle,
                    $modalidad_detalle,
                    $fuente_detalle,
                    $valtotal_detalle,
                    $futuras_detalle,
                    $estadofuturas_detalle,
                    $contacto_detalle
                ) {
        
        $query = "  UPDATE detalles 
                
                    SET plan_detalle = '". $plan_detalle ."',
                        codigos_detalle = '". utf8_decode($codigos_detalle) ."',
                        descripcion_detalle = '". utf8_decode($descripcion_detalle) ."',
                        fechainicio_detalle = '". utf8_decode($fechainicio_detalle) ."',
                        meses_detalle = '". utf8_decode($meses_detalle) ."',
                        modalidad_detalle = '". utf8_decode($modalidad_detalle) ."',
                        fuente_detalle = '". utf8_decode($fuente_detalle) ."',
                        valtotal_detalle = '". utf8_decode($valtotal_detalle) ."',
                        futuras_detalle = '". utf8_decode($futuras_detalle) ."',
                        estadofuturas_detalle = '". utf8_decode($estadofuturas_detalle) ."',
                        contacto_detalle = '". utf8_decode($contacto_detalle) ."'
        
                    WHERE id_detalle = '" . $id_detalle . "'";       
            
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_detalle) {
        
        $query = "DELETE 
                    FROM detalles 
                    WHERE id_detalle = '". $id_detalle ."'";
        
        $this->modificarRegistros($query);

    }
    
    
}

?>