<?php

class DocumentosModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    documentos.id_documento, 
                    documentos.modalidad_documento,
                    documentos.nombre_documento
                
                    from documentos
                    
                    order by documentos.nombre_documento";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    
    function getTodosxModalidad($modalidad_documento) {
       
        $query = "select 	
                    documentos.id_documento, 
                    documentos.modalidad_documento,
                    documentos.nombre_documento
                
                    from documentos 

                    where documentos.modalidad_documento='".$modalidad_documento."'
                    
                    order by documentos.nombre_documento";
        
         $consulta = $this->consulta($query);
        return $consulta;    
        
    }

    function getDatos($id_documento) {
       
        $query = "select 	
                    documentos.id_documento, 
                    documentos.modalidad_documento,
                    documentos.nombre_documento
                
                    from documentos 

                    where documentos.id_documento='".$id_documento."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }

    function insertar(                               
                        $modalidad_documento,
                        $nombre_documento
                    ){
                
        $query = "INSERT INTO documentos (
                        modalidad_documento,
                        nombre_documento
                    )
                    VALUES(
                        '".$modalidad_documento."',
                        '".utf8_decode($nombre_documento)."'
                    );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_documento, 
                    $nombre_documento
                ) {
        
        $query = "  UPDATE documentos 
                
                    SET nombre_documento = '". utf8_decode($nombre_documento) ."'
        
                    WHERE id_documento = '" . $id_documento . "'";       
            
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_documento) {
        
        $query = "DELETE 
                    FROM documentos 
                    WHERE id_documento = '". $id_documento ."'";
        
        $this->modificarRegistros($query);

    }
    
    
}

?>