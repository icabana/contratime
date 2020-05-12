<?php

class AjustesContratosModel extends ModelBase {

  
    function getTodos() {
        
        $query = "select 

                    contratos_ajustes.id_ajuste, 
                    contratos_ajustes.contrato_ajuste, 
                    contratos_ajustes.tipo_ajuste, 
                    contratos_ajustes.fecha_ajuste, 
                    contratos_ajustes.valor_ajuste, 

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

                    tiposajustes.id_tipoajuste,
                    tiposajustes.nombre_tipoajuste
                
                    from contratos_ajustes 
                            left join tiposajustes ON contratos_ajustes.tipo_ajuste = tiposajustes.id_tipoajuste
                            left join contratos ON contratos_ajustes.contrato_ajuste = contratos.id_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getTodosxContrato($contrato_ajuste) {
        
        $query = "select 

                    contratos_ajustes.id_ajuste, 
                    contratos_ajustes.contrato_ajuste, 
                    contratos_ajustes.tipo_ajuste, 
                    contratos_ajustes.fecha_ajuste, 
                    contratos_ajustes.valor_ajuste, 

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

                    tiposajustes.id_tipoajuste,
                    tiposajustes.nombre_tipoajuste
                
                    from contratos_ajustes 
                            left join tiposajustes ON contratos_ajustes.tipo_ajuste = tiposajustes.id_tipoajuste
                            left join contratos ON contratos_ajustes.contrato_ajuste = contratos.id_contrato

                    
                    where contratos_ajustes.contrato_ajuste='".$contrato_ajuste."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    function getDatos($id_ajuste) {
       
        $query = "select 

                    contratos_ajustes.id_ajuste, 
                    contratos_ajustes.contrato_ajuste, 
                    contratos_ajustes.tipo_ajuste, 
                    contratos_ajustes.fecha_ajuste, 
                    contratos_ajustes.valor_ajuste, 

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

                    tiposajustes.id_tipoajuste,
                    tiposajustes.nombre_tipoajuste
                
                    from contratos_ajustes 
                            left join tiposajustes ON contratos_ajustes.tipo_ajuste = tiposajustes.id_tipoajuste
                            left join contratos ON contratos_ajustes.contrato_ajuste = contratos.id_contrato
                    
                    where contratos_ajustes.id_ajuste='".$id_ajuste."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    

    function insertar(    
        $contrato_ajuste,
        $tipo_ajuste,
        $fecha_ajuste,
        $valor_ajuste
    ){
                
        $query = "INSERT INTO contratos_ajustes (
                            contrato_ajuste,
                            tipo_ajuste,
                            fecha_ajuste,
                            valor_ajuste
                            )
                    VALUES(
                            '".$contrato_ajuste."',
                            '".$tipo_ajuste."',
                            '".$fecha_ajuste."',
                            '".$valor_ajuste."'
                    );";
       
        return $this->crear_ultimo_id($query);
        
    }
    
    
    function eliminar($id_ajuste) {
        
        $query = "DELETE FROM contratos_ajustes WHERE id_ajuste = '". $id_ajuste ."'";    

        $this->modificarRegistros($query);
        
    }



}

?>