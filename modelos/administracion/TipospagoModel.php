<?php

class TipospagoModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    tipospago.id_tipopago, 
                    tipospago.nombre_tipopago
                
                    from tipospago";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_tipopago) {
       
        $query = "select 	
                    tipospago.id_tipopago, 
                    tipospago.nombre_tipopago
                
                    from tipospago 

                    where tipospago.id_tipopago='".$id_tipopago."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }

    
}

?>