<?php

class ModalidadesModel extends ModelBase {
  
    function getTodos() {
        
        $query = "  SELECT 
                        id_modalidad, 
                        nombre_modalidad,
                        tipo_modalidad
                
                    FROM modalidades

                    ORDER BY nombre_modalidad";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    
    function getTodosTipoProceso() {
        
        $query = "  SELECT 
                        id_modalidad, 
                        nombre_modalidad,
                        tipo_modalidad
                
                    FROM modalidades

                    WHERE tipo_modalidad = 'Proceso'

                    ORDER BY nombre_modalidad";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    
    
    function getTodosTipoContrato() {
        
        $query = "  SELECT 
                        id_modalidad, 
                        nombre_modalidad,
                        tipo_modalidad
                
                    FROM modalidades

                    WHERE tipo_modalidad = 'Contrato'

                    ORDER BY nombre_modalidad";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_modalidad) {
       
        $query = "select 	
                    modalidades.id_modalidad, 
                    modalidades.nombre_modalidad,
                    modalidades.tipo_modalidad
                
                    from modalidades 

                    where modalidades.id_modalidad='".$id_modalidad."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }

    function insertar(                               
                        $nombre_modalidad,
                        $tipo_modalidad
                    ){
                
        $query = "INSERT INTO modalidades (
                        nombre_modalidad,
                        tipo_modalidad
                    )
                    VALUES(
                        '".utf8_decode($nombre_modalidad)."',
                        '".utf8_decode($tipo_modalidad)."'
                    );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_modalidad, 
                    $nombre_modalidad,
                    $tipo_modalidad
                ) {
        
        $query = "  UPDATE modalidades 
                
                    SET nombre_modalidad = '". utf8_decode($nombre_modalidad) ."',
                        tipo_modalidad = '". utf8_decode($tipo_modalidad) ."'
        
                    WHERE id_modalidad = '" . $id_modalidad . "'";       
            
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_modalidad) {
        
        $query = "DELETE 
                    FROM modalidades 
                    WHERE id_modalidad = '". $id_modalidad ."'";
        
        $this->modificarRegistros($query);

    }
    
    
}

?>