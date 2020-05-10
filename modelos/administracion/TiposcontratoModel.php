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

    
}

?>