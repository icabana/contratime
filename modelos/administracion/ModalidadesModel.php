<?php

class ModalidadesModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    modalidades.id_modalidad, 
                    modalidades.nombre_modalidad
                
                    from modalidades";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_modalidad) {
       
        $query = "select 	
                    modalidades.id_modalidad, 
                    modalidades.nombre_modalidad
                
                    from modalidades 

                    where modalidades.id_modalidad='".$id_modalidad."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }

    function insertar(                               
                        $nombre_modalidad
                    ){
                
        $query = "INSERT INTO modalidades (
                        nombre_modalidad
                    )
                    VALUES(
                        '".$nombre_modalidad."'
                    );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_modalidad, 
                    $nombre_modalidad
                ) {
        
        $query = "  UPDATE modalidades 
                
                    SET nombre_modalidad = '". $nombre_modalidad ."'
        
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