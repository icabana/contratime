<?php

class PagosContratosModel extends ModelBase {

  
    function getTodos() {
        
        $query = "select 

                    contratos_pagos.id_pago, 
                    contratos_pagos.contrato_pago, 
                    contratos_pagos.tipo_pago, 
                    contratos_pagos.fecha_pago, 
                    contratos_pagos.valor_pago, 

                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado_contrato,

                    tipospago.id_tipopago,
                    tipospago.nombre_tipopago
                
                    from contratos_pagos 
                            left join tipospago ON contratos_pagos.tipo_pago = tipospago.id_tipopago
                            left join contratos ON contratos_pagos.contrato_pago = contratos.id_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getTodosxContrato($contrato_pago) {
        
        $query = "select 

                    contratos_pagos.id_pago, 
                    contratos_pagos.contrato_pago, 
                    contratos_pagos.tipo_pago, 
                    contratos_pagos.fecha_pago, 
                    contratos_pagos.valor_pago, 

                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado_contrato,

                    tipospago.id_tipopago,
                    tipospago.nombre_tipopago
                
                    from contratos_pagos 
                            left join tipospago ON contratos_pagos.tipo_pago = tipospago.id_tipopago
                            left join contratos ON contratos_pagos.contrato_pago = contratos.id_contrato

                    
                    where contratos_pagos.contrato_pago='".$contrato_pago."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    function getDatos($id_pago) {
       
        $query = "select 

                    contratos_pagos.id_pago, 
                    contratos_pagos.contrato_pago, 
                    contratos_pagos.tipo_pago, 
                    contratos_pagos.fecha_pago, 
                    contratos_pagos.valor_pago, 

                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado_contrato,

                    tipospago.id_tipopago,
                    tipospago.nombre_tipopago
                
                    from contratos_pagos 
                            left join tipospago ON contratos_pagos.tipo_pago = tipospago.id_tipopago
                            left join contratos ON contratos_pagos.contrato_pago = contratos.id_contrato
                    
                    where contratos_pagos.id_pago='".$id_pago."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    

    function insertar(    
        $contrato_pago,
        $tipo_pago,
        $fecha_pago,
        $valor_pago
    ){
                
        $query = "INSERT INTO contratos_pagos (
                            contrato_pago,
                            tipo_pago,
                            fecha_pago, 
                            valor_pago
                            )
                    VALUES(
                            '".$contrato_pago."',
                            '".$tipo_pago."',
                            '".$fecha_pago."',
                            '".$valor_pago."'
                    );";
       
        return $this->crear_ultimo_id($query);
        
    }
    
    
    function eliminar($id_pago) {
        
        $query = "DELETE FROM contratos_pagos WHERE id_pago = '". $id_pago ."'";    

        $this->modificarRegistros($query);
        
    }



}

?>