<?php

class TiposajustescontratoModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    tiposajustes.id_tipoajuste, 
                    tiposajustes.nombre_tipoajuste
                
                    from tiposajustes";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_tipoajuste) {
       
        $query = "select 	
                    tiposajustes.id_tipoajuste, 
                    tiposajustes.nombre_tipoajuste
                
                    from tiposajustes 

                    where tiposajustes.id_tipoajuste='".$id_tipoajuste."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }

    
}

?>