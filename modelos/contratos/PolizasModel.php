<?php

class PolizasContratosModel extends ModelBase {

  
    function getTodos() {
        
        $query = "select 

                    contratos_polizas.id_poliza, 
                    contratos_polizas.contrato_poliza, 
                    contratos_polizas.numero_poliza, 
                    contratos_polizas.fechaexp_poliza, 
                    contratos_polizas.fechainicio_poliza, 
                    contratos_polizas.fechafinal_poliza, 

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
                    contratos.estado_contrato
                
                    from contratos_polizas 
                            left join contratos ON contratos_polizas.contrato_poliza = contratos.id_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getTodosxContrato($contrato_poliza) {
        
        $query = "select 

                    contratos_polizas.id_poliza, 
                    contratos_polizas.contrato_poliza, 
                    contratos_polizas.numero_poliza, 
                    contratos_polizas.fechaexp_poliza, 
                    contratos_polizas.fechainicio_poliza, 
                    contratos_polizas.fechafinal_poliza, 

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
                    contratos.estado_contrato
                
                    from contratos_polizas 
                            left join contratos ON contratos_polizas.contrato_poliza = contratos.id_contrato
                    
                    where contratos_polizas.contrato_poliza='".$contrato_poliza."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    function getDatos($id_poliza) {
       
        $query = "select 

                    contratos_polizas.id_poliza, 
                    contratos_polizas.contrato_poliza, 
                    contratos_polizas.numero_poliza, 
                    contratos_polizas.fechaexp_poliza, 
                    contratos_polizas.fechainicio_poliza, 
                    contratos_polizas.fechafinal_poliza, 

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

                    tipospoliza.id_tipopoliza,
                    tipospoliza.nombre_tipopoliza
                
                    from contratos_polizas 
                            left join contratos ON contratos_polizas.contrato_poliza = contratos.id_contrato
                    
                    where contratos_polizas.id_poliza='".$id_poliza."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    

    function insertar(    
        $contrato_poliza,
        $numero_poliza,
        $fechaexp_poliza,
        $fechainicio_poliza,
        $fechafinal_poliza
    ){
                
        $query = "INSERT INTO contratos_polizas (
                            contrato_poliza,
                            numero_poliza,
                            fechaexp_poliza, 
                            fechainicio_poliza, 
                            fechafinal_poliza
                            )
                    VALUES(
                            '".$contrato_poliza."',
                            '".$numero_poliza."',
                            '".$fechaexp_poliza."',
                            '".$fechainicio_poliza."',
                            '".$fechafinal_poliza."'
                    );";
       
        return $this->crear_ultimo_id($query);
        
    }
    
    
    function eliminar($id_poliza) {
        
        $query = "DELETE FROM contratos_polizas 
                    WHERE id_poliza = '". $id_poliza ."'";    

        $this->modificarRegistros($query);
        
    }



}

?>