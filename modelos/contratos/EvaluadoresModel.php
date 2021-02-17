<?php

class EvaluadoresContratosModel extends ModelBase {

  
    function getTodos() {
        
        $query = "select 

                    contratos_evaluadores.id_evaluador, 
                    contratos_evaluadores.contrato_evaluador, 
                    contratos_evaluadores.evaluador_evaluador, 

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

                    evaluadores.tipo_evaluador,
                    evaluadores.tipodocumento_evaluador,
                    evaluadores.documento_evaluador,
                    evaluadores.nombres_evaluador,
                    evaluadores.apellidos_evaluador,
    
                    concat( evaluadores.nombres_evaluador,' ',evaluadores.apellidos_evaluador) as nombre_evaluador,
    
                    evaluadores.dirresidencia_evaluador,
                    evaluadores.dircorrespondencia_evaluador,
                    evaluadores.telefono_evaluador,
                    evaluadores.celular_evaluador,
                    evaluadores.correo_evaluador,
                    evaluadores.paginaweb_evaluador,
    
                    evaluadores.pais_evaluador,
                    evaluadores.departamento_evaluador,
                    evaluadores.municipio_evaluador,
    
                    evaluadores.fechanacimiento_evaluador,
    
                    evaluadores.genero_evaluador,
                    evaluadores.estadocivil_evaluador,
    
                    evaluadores.profesion_evaluador,

                    paises.codigo3_pais,
                    paises.nombre_pais
                
                    from contratos_evaluadores 
                            left join contratos ON contratos_evaluadores.contrato_evaluador = contratos.id_contrato
                            left join evaluadores ON contratos_evaluadores.evaluador_evaluador = evaluadores.id_evaluador
                            left join paises on evaluadores.pais_evaluador = paises.id_pais";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getTodosxContrato($contrato_evaluador) {
        
        $query = "select 

                    contratos_evaluadores.id_evaluador, 
                    contratos_evaluadores.contrato_evaluador, 
                    contratos_evaluadores.evaluador_evaluador, 

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

                    evaluadores.tipo_evaluador,
                    evaluadores.tipodocumento_evaluador,
                    evaluadores.documento_evaluador,
                    evaluadores.nombres_evaluador,
                    evaluadores.apellidos_evaluador,

                    concat( evaluadores.nombres_evaluador,' ',evaluadores.apellidos_evaluador) as nombre_evaluador,

                    evaluadores.dirresidencia_evaluador,
                    evaluadores.dircorrespondencia_evaluador,
                    evaluadores.telefono_evaluador,
                    evaluadores.celular_evaluador,
                    evaluadores.correo_evaluador,
                    evaluadores.paginaweb_evaluador,

                    evaluadores.pais_evaluador,
                    evaluadores.departamento_evaluador,
                    evaluadores.municipio_evaluador,

                    evaluadores.fechanacimiento_evaluador,

                    evaluadores.genero_evaluador,
                    evaluadores.estadocivil_evaluador,

                    evaluadores.profesion_evaluador,

                    paises.codigo3_pais,
                    paises.nombre_pais
                
                    from contratos_evaluadores 
                            left join contratos ON contratos_evaluadores.contrato_evaluador = contratos.id_contrato
                            left join evaluadores ON contratos_evaluadores.evaluador_evaluador = evaluadores.id_evaluador
                            left join paises on evaluadores.pais_evaluador = paises.id_pais       

                    
                    where contratos_evaluadores.contrato_evaluador='".$contrato_evaluador."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    
    function getTodosCorreosxContrato($contrato_evaluador) {
        
        $query = "select 

                    evaluadores.correo_evaluador
                
                    from contratos_evaluadores 
                            left join contratos ON contratos_evaluadores.contrato_evaluador = contratos.id_contrato
                            left join evaluadores ON contratos_evaluadores.evaluador_evaluador = evaluadores.id_evaluador     

                    
                    where contratos_evaluadores.contrato_evaluador='".$contrato_evaluador."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  
 
    function existeEvaluadorenContrato($contrato_evaluador, $evaluador_evaluador) {
        
        $query = "SELECT  

                    count(id_evaluador) as numero
                
                    FROM contratos_evaluadores 
                    
                    WHERE contrato_evaluador='".$contrato_evaluador."' and evaluador_evaluador='".$evaluador_evaluador."'";
        
        $consulta = $this->consulta($query);
        return $consulta[0]['numero'];       
               
    }  


    function getDatos($id_evaluador) {
       
        $query = "select 

                    contratos_evaluadores.id_evaluador, 
                    contratos_evaluadores.contrato_evaluador, 
                    contratos_evaluadores.evaluador_evaluador, 

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

                    evaluadores.tipo_evaluador,
                    evaluadores.tipodocumento_evaluador,
                    evaluadores.documento_evaluador,
                    evaluadores.nombres_evaluador,
                    evaluadores.apellidos_evaluador,

                    concat( evaluadores.nombres_evaluador,' ',evaluadores.apellidos_evaluador) as nombre_evaluador,

                    evaluadores.dirresidencia_evaluador,
                    evaluadores.dircorrespondencia_evaluador,
                    evaluadores.telefono_evaluador,
                    evaluadores.celular_evaluador,
                    evaluadores.correo_evaluador,
                    evaluadores.paginaweb_evaluador,

                    evaluadores.pais_evaluador,
                    evaluadores.departamento_evaluador,
                    evaluadores.municipio_evaluador,

                    evaluadores.fechanacimiento_evaluador,

                    evaluadores.genero_evaluador,
                    evaluadores.estadocivil_evaluador,
                    evaluadores.profesion_evaluador
                
                    from contratos_evaluadores 
                            left join contratos ON contratos_evaluadores.contrato_evaluador = contratos.id_contrato
                            left join evaluadores ON contratos_evaluadores.evaluador_evaluador = evaluadores.id_evaluador
                    
                    where contratos_evaluadores.id_evaluador='".$id_evaluador."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    

    function insertar(      
        $evaluador_evaluador,
        $contrato_evaluador
    ){
                
        $query = "INSERT INTO contratos_evaluadores (
                        evaluador_evaluador,
                        contrato_evaluador
                            )
                    VALUES(
                        '".$evaluador_evaluador."',
                        '".$contrato_evaluador."'
                    );";
       
        return $this->crear_ultimo_id($query);
        
    }
    
    
    function eliminar($id_evaluador) {
        
        $query = "DELETE FROM contratos_evaluadores WHERE id_evaluador = '". $id_evaluador ."'";    

        $this->modificarRegistros($query);
        
    }



}

?>