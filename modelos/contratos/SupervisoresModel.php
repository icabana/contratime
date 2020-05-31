<?php

class SupervisoresContratosModel extends ModelBase {

  
    function getTodos() {
        
        $query = "select 

                    contratos_supervisores.id_supervisor, 
                    contratos_supervisores.contrato_supervisor, 
                    contratos_supervisores.supervisor_supervisor, 

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

                    supervisores.tipo_supervisor,
                    supervisores.tipodocumento_supervisor,
                    supervisores.documento_supervisor,
                    supervisores.nombres_supervisor,
                    supervisores.apellidos_supervisor,
    
                    concat( supervisores.nombres_supervisor,' ',supervisores.apellidos_supervisor) as nombre_supervisor,
    
                    supervisores.dirresidencia_supervisor,
                    supervisores.dircorrespondencia_supervisor,
                    supervisores.telefono_supervisor,
                    supervisores.celular_supervisor,
                    supervisores.correo_supervisor,
                    supervisores.paginaweb_supervisor,
    
                    supervisores.pais_supervisor,
                    supervisores.departamento_supervisor,
                    supervisores.municipio_supervisor,
    
                    supervisores.fechanacimiento_supervisor,
    
                    supervisores.genero_supervisor,
                    supervisores.estadocivil_supervisor,
                    supervisores.hijos_supervisor,
    
                    supervisores.profesion_supervisor,

                    paises.codigo3_pais,
                    paises.nombre_pais
                
                    from contratos_supervisores 
                            left join contratos ON contratos_supervisores.contrato_supervisor = contratos.id_contrato
                            left join supervisores ON contratos_supervisores.supervisor_supervisor = supervisores.id_supervisor
                            left join paises on supervisores.pais_supervisor = paises.id_pais";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getTodosxContrato($contrato_supervisor) {
        
        $query = "select 

                    contratos_supervisores.id_supervisor, 
                    contratos_supervisores.contrato_supervisor, 
                    contratos_supervisores.supervisor_supervisor, 

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

                    supervisores.tipo_supervisor,
                    supervisores.tipodocumento_supervisor,
                    supervisores.documento_supervisor,
                    supervisores.nombres_supervisor,
                    supervisores.apellidos_supervisor,

                    concat( supervisores.nombres_supervisor,' ',supervisores.apellidos_supervisor) as nombre_supervisor,

                    supervisores.dirresidencia_supervisor,
                    supervisores.dircorrespondencia_supervisor,
                    supervisores.telefono_supervisor,
                    supervisores.celular_supervisor,
                    supervisores.correo_supervisor,
                    supervisores.paginaweb_supervisor,

                    supervisores.pais_supervisor,
                    supervisores.departamento_supervisor,
                    supervisores.municipio_supervisor,

                    supervisores.fechanacimiento_supervisor,

                    supervisores.genero_supervisor,
                    supervisores.estadocivil_supervisor,
                    supervisores.hijos_supervisor,

                    supervisores.profesion_supervisor,

                    paises.codigo3_pais,
                    paises.nombre_pais
                
                    from contratos_supervisores 
                            left join contratos ON contratos_supervisores.contrato_supervisor = contratos.id_contrato
                            left join supervisores ON contratos_supervisores.supervisor_supervisor = supervisores.id_supervisor
                            left join paises on supervisores.pais_supervisor = paises.id_pais       

                    
                    where contratos_supervisores.contrato_supervisor='".$contrato_supervisor."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    
    function getTodosCorreosxContrato($contrato_supervisor) {
        
        $query = "select 

                    supervisores.correo_supervisor
                
                    from contratos_supervisores 
                            left join contratos ON contratos_supervisores.contrato_supervisor = contratos.id_contrato
                            left join supervisores ON contratos_supervisores.supervisor_supervisor = supervisores.id_supervisor     

                    
                    where contratos_supervisores.contrato_supervisor='".$contrato_supervisor."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  



    function getDatos($id_supervisor) {
       
        $query = "select 

                    contratos_supervisores.id_supervisor, 
                    contratos_supervisores.contrato_supervisor, 
                    contratos_supervisores.supervisor_supervisor, 

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

                    supervisores.tipo_supervisor,
                    supervisores.tipodocumento_supervisor,
                    supervisores.documento_supervisor,
                    supervisores.nombres_supervisor,
                    supervisores.apellidos_supervisor,

                    concat( supervisores.nombres_supervisor,' ',supervisores.apellidos_supervisor) as nombre_supervisor,

                    supervisores.dirresidencia_supervisor,
                    supervisores.dircorrespondencia_supervisor,
                    supervisores.telefono_supervisor,
                    supervisores.celular_supervisor,
                    supervisores.correo_supervisor,
                    supervisores.paginaweb_supervisor,

                    supervisores.pais_supervisor,
                    supervisores.departamento_supervisor,
                    supervisores.municipio_supervisor,

                    supervisores.fechanacimiento_supervisor,

                    supervisores.genero_supervisor,
                    supervisores.estadocivil_supervisor,
                    supervisores.hijos_supervisor,

                    supervisores.profesion_supervisor
                
                    from contratos_supervisores 
                            left join contratos ON contratos_supervisores.contrato_supervisor = contratos.id_contrato
                            left join supervisores ON contratos_supervisores.supervisor_supervisor = supervisores.id_supervisor
                    
                    where contratos_supervisores.id_supervisor='".$id_supervisor."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    

    function insertar(      
        $supervisor_supervisor,
        $contrato_supervisor
    ){
                
        $query = "INSERT INTO contratos_supervisores (
                        supervisor_supervisor,
                        contrato_supervisor
                            )
                    VALUES(
                        '".$supervisor_supervisor."',
                        '".$contrato_supervisor."'
                    );";
       
        return $this->crear_ultimo_id($query);
        
    }
    
    
    function eliminar($id_supervisor) {
        
        $query = "DELETE FROM contratos_supervisores WHERE id_supervisor = '". $id_supervisor ."'";    

        $this->modificarRegistros($query);
        
    }



}

?>