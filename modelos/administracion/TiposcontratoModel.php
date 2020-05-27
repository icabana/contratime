<?php

class TiposcontratoModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    tiposcontrato.id_tipocontrato, 
                    tiposcontrato.nombre_tipocontrato
                
                    from tiposcontrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_tipocontrato) {
       
        $query = "select 	
                    tiposcontrato.id_tipocontrato, 
                    tiposcontrato.nombre_tipocontrato
                
                    from tiposcontrato 

                    where tiposcontrato.id_tipocontrato='".$id_tipocontrato."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }

    
    function insertar(                               
        $nombre_tipocontrato
    ){

        $query = "INSERT INTO tiposcontrato (
                nombre_tipocontrato
            )
            VALUES(
                '".$nombre_tipocontrato."'
            );";

        return $this->crear_ultimo_id($query);       

        }

        function editar(
            $id_tipocontrato, 
            $nombre_tipocontrato
        ) {

        $query = "  UPDATE tiposcontrato 

            SET nombre_tipocontrato = '". $nombre_tipocontrato ."'

            WHERE id_tipocontrato = '" . $id_tipocontrato . "'";       

        return $this->modificarRegistros($query);

        }

        function eliminar($id_tipocontrato) {

        $query = "DELETE 
            FROM tiposcontrato 
            WHERE id_tipocontrato = '". $id_tipocontrato ."'";

        $this->modificarRegistros($query);

        }

    
}

?>