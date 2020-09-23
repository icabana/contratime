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
                        valactual_detalle,
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

    
    function getTodosxPlan($plan_detalle) {
        
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
                        valactual_detalle,
                        futuras_detalle,
                        estadofuturas_detalle,
                        contacto_detalle,

                        fuentes.nombre_fuente,
                        modalidades.nombre_modalidad

                
                    FROM planes_detalles 
                            LEFT JOIN planes ON planes_detalles.plan_detalle = planes.id_plan
                            LEFT JOIN modalidades ON planes_detalles.modalidad_detalle = modalidades.id_modalidad
                            LEFT JOIN fuentes ON planes_detalles.fuente_detalle = fuentes.id_fuente

                    WHERE plan_detalle = '".$plan_detalle."'

                    ORDER BY codigos_detalle";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_detalle) {
       
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
                        valactual_detalle,
                        futuras_detalle,
                        estadofuturas_detalle,
                        contacto_detalle,

                        fuentes.nombre_fuente,
                        modalidades.nombre_modalidad


                    FROM planes_detalles 
                            LEFT JOIN planes ON planes_detalles.plan_detalle = planes.id_plan
                            LEFT JOIN modalidades ON planes_detalles.modalidad_detalle = modalidades.id_modalidad
                            LEFT JOIN fuentes ON planes_detalles.fuente_detalle = fuentes.id_fuente

                WHERE planes_detalles.id_detalle='".$id_detalle."'";
        
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
                $valactual_detalle,
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
                        valactual_detalle,
                        futuras_detalle,
                        estadofuturas_detalle,
                        contacto_detalle
                    )
                    VALUES(
                        '".$plan_detalle."',
                        '".$codigos_detalle."',
                        '".utf8_decode($descripcion_detalle)."',
                        '".$fechainicio_detalle."',
                        '".$meses_detalle."',
                        '".$modalidad_detalle."',
                        '".$fuente_detalle."',
                        '".$valtotal_detalle."',
                        '".$valactual_detalle."',
                        '".$futuras_detalle."',
                        '".$estadofuturas_detalle."',
                        '".utf8_decode($contacto_detalle)."'
                    );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_detalle, 
                    $codigos_detalle,
                    $descripcion_detalle,
                    $fechainicio_detalle,
                    $meses_detalle,
                    $modalidad_detalle,
                    $fuente_detalle,
                    $valtotal_detalle,
                    $valactual_detalle,
                    $futuras_detalle,
                    $estadofuturas_detalle,
                    $contacto_detalle
                ) {
        
        $query = "  UPDATE planes_detalles 
                
                    SET codigos_detalle = '". $codigos_detalle ."',
                        descripcion_detalle = '". utf8_decode($descripcion_detalle) ."',
                        fechainicio_detalle = '". $fechainicio_detalle ."',
                        meses_detalle = '". $meses_detalle ."',
                        modalidad_detalle = '". $modalidad_detalle ."',
                        fuente_detalle = '". $fuente_detalle ."',
                        valtotal_detalle = '". $valtotal_detalle ."',
                        valactual_detalle = '". $valactual_detalle ."',
                        futuras_detalle = '". $futuras_detalle ."',
                        estadofuturas_detalle = '". $estadofuturas_detalle ."',
                        contacto_detalle = '". utf8_decode($contacto_detalle) ."'
        
                    WHERE id_detalle = '" . $id_detalle . "'";       
            
            $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_detalle) {
        
        $query = "DELETE 
                    FROM planes_detalles 
                    WHERE id_detalle = '". $id_detalle ."'";
        
        $this->modificarRegistros($query);

    }
    
    
}

?>