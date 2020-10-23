<?php

class ContratosModel extends ModelBase {

  
    function getTodos() {
        
        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fecha_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fechaliquidacion_contrato,
                    contratos.favisoproceso_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fevaluacionproceso2_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.hcierreproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado2_contrato,
                    contratos.estado_contrato,
                    contratos.agncon,
                    contratos.concon,
                    contratos.conpro,
                    contratos.plan_contrato,

                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    contratistas.dirresidencia_contratista,
                    contratistas.dircorrespondencia_contratista,
                    contratistas.telefono_contratista,
                    contratistas.celular_contratista,
                    contratistas.correo_contratista,
                    contratistas.paginaweb_contratista,

                    contratistas.pais_contratista,
                    contratistas.departamento_contratista,
                    contratistas.municipio_contratista,

                    contratistas.fechanacimiento_contratista,

                    contratistas.genero_contratista,
                    contratistas.estadocivil_contratista,
                    contratistas.hijos_contratista,

                    contratistas.profesion_contratista,
            
                    tiposdocumento.codigo_tipodocumento,
                    tiposdocumento.nombre_tipodocumento,
    
                    paises.codigo3_pais,
                    paises.nombre_pais,
                    departamentos.nombre_departamento,
                    municipios.nombre_municipio,
    
                    generos.nombre_genero,
    
                    estadoscivil.nombre_estadocivil,
    
                    profesiones.nombre_profesion,
    
                    tipospersona.nombre_tipopersona,
    
                    estados.nombre_estado,

                    modalidades.id_modalidad, 
                    modalidades.nombre_modalidad,

                    tiposcontrato.id_tipocontrato, 
                    tiposcontrato.nombre_tipocontrato,

                    estadoscontrato.id_estado, 
                    estadoscontrato.nombre_estado as nombreestado_contrato
                
                    FROM contratos 
                            left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                            left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                            left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista 
                            left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                            left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                            left join paises on contratistas.pais_contratista = paises.id_pais       
                            left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                            left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                            left join generos on contratistas.genero_contratista = generos.id_genero
                            left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                            left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                            left join estados on contratistas.estado_contratista = estados.id_estado
                            left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado
                        
                    WHERE contratos.estado_contrato != '6' && contratos.estado_contrato != '5'
                    
                    ORDER BY contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getTodosContratos() {
        
        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fecha_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fechaliquidacion_contrato,
                    contratos.favisoproceso_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fevaluacionproceso2_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.hcierreproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado2_contrato,
                    contratos.estado_contrato,
                    contratos.agncon,
                    contratos.concon,
                    contratos.conpro,
                    contratos.plan_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    contratistas.dirresidencia_contratista,
                    contratistas.dircorrespondencia_contratista,
                    contratistas.telefono_contratista,
                    contratistas.celular_contratista,
                    contratistas.correo_contratista,
                    contratistas.paginaweb_contratista,

                    contratistas.pais_contratista,
                    contratistas.departamento_contratista,
                    contratistas.municipio_contratista,

                    contratistas.fechanacimiento_contratista,

                    contratistas.genero_contratista,
                    contratistas.estadocivil_contratista,
                    contratistas.hijos_contratista,

                    contratistas.profesion_contratista,
            
                    tiposdocumento.codigo_tipodocumento,
                    tiposdocumento.nombre_tipodocumento,
    
                    paises.codigo3_pais,
                    paises.nombre_pais,
                    departamentos.nombre_departamento,
                    municipios.nombre_municipio,
    
                    generos.nombre_genero,
    
                    estadoscivil.nombre_estadocivil,
    
                    profesiones.nombre_profesion,
    
                    tipospersona.nombre_tipopersona,
    
                    estados.nombre_estado,

                    modalidades.id_modalidad, 
                    modalidades.nombre_modalidad,

                    tiposcontrato.id_tipocontrato, 
                    tiposcontrato.nombre_tipocontrato,

                    estadoscontrato.id_estado, 
                    estadoscontrato.nombre_estado as nombreestado_contrato
                
                    FROM contratos 
                            left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                            left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                            left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                            left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                            left join paises on contratistas.pais_contratista = paises.id_pais       
                            left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                            left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                            left join generos on contratistas.genero_contratista = generos.id_genero
                            left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                            left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                            left join estados on contratistas.estado_contratista = estados.id_estado
                            left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado
                        
                    WHERE contratos.estado_contrato = '3' || contratos.estado_contrato = '4'
                    
                    ORDER BY contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getTodosProcesos() {
        
        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fecha_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fechaliquidacion_contrato,
                    contratos.favisoproceso_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fevaluacionproceso2_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.hcierreproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado2_contrato,
                    contratos.estado_contrato,
                    contratos.agncon,
                    contratos.concon,
                    contratos.conpro,
                    contratos.plan_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    contratistas.dirresidencia_contratista,
                    contratistas.dircorrespondencia_contratista,
                    contratistas.telefono_contratista,
                    contratistas.celular_contratista,
                    contratistas.correo_contratista,
                    contratistas.paginaweb_contratista,

                    contratistas.pais_contratista,
                    contratistas.departamento_contratista,
                    contratistas.municipio_contratista,

                    contratistas.fechanacimiento_contratista,

                    contratistas.genero_contratista,
                    contratistas.estadocivil_contratista,
                    contratistas.hijos_contratista,

                    contratistas.profesion_contratista,
            
                    tiposdocumento.codigo_tipodocumento,
                    tiposdocumento.nombre_tipodocumento,
    
                    paises.codigo3_pais,
                    paises.nombre_pais,
                    departamentos.nombre_departamento,
                    municipios.nombre_municipio,
    
                    generos.nombre_genero,
    
                    estadoscivil.nombre_estadocivil,
    
                    profesiones.nombre_profesion,
    
                    tipospersona.nombre_tipopersona,
    
                    estados.nombre_estado,

                    modalidades.id_modalidad, 
                    modalidades.nombre_modalidad,

                    tiposcontrato.id_tipocontrato, 
                    tiposcontrato.nombre_tipocontrato,

                    estadoscontrato.id_estado, 
                    estadoscontrato.nombre_estado as nombreestado_contrato
                
                    FROM contratos 
                            left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                            left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                            left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                            left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                            left join paises on contratistas.pais_contratista = paises.id_pais       
                            left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                            left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                            left join generos on contratistas.genero_contratista = generos.id_genero
                            left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                            left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                            left join estados on contratistas.estado_contratista = estados.id_estado
                            left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado
                        
                    WHERE contratos.estado_contrato = '1' || contratos.estado_contrato = '2'
                    
                    ORDER BY contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    function getTodosReporte($modalidad_contrato, $tipo_contrato, $estado_contrato) {
        
        $where = "";

        if($modalidad_contrato != "0" && $modalidad_contrato != ""){
            $where .= " and modalidad_contrato = ".$modalidad_contrato;
        }
        
        if($tipo_contrato != "0" && $modalidad_contrato != ""){
            $where .= " and tipo_contrato = ".$tipo_contrato;
        }
        
        if($estado_contrato != "0" && $modalidad_contrato != ""){
            $where .= " and estado_contrato = ".$estado_contrato;
        }

        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fecha_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fechaliquidacion_contrato,
                    contratos.favisoproceso_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fevaluacionproceso2_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.hcierreproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado2_contrato,
                    contratos.estado_contrato,
                    contratos.agncon,
                    contratos.concon,
                    contratos.conpro,
                    contratos.plan_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    contratistas.dirresidencia_contratista,
                    contratistas.dircorrespondencia_contratista,
                    contratistas.telefono_contratista,
                    contratistas.celular_contratista,
                    contratistas.correo_contratista,
                    contratistas.paginaweb_contratista,

                    contratistas.pais_contratista,
                    contratistas.departamento_contratista,
                    contratistas.municipio_contratista,

                    contratistas.fechanacimiento_contratista,

                    contratistas.genero_contratista,
                    contratistas.estadocivil_contratista,
                    contratistas.hijos_contratista,

                    contratistas.profesion_contratista,
            
                    tiposdocumento.codigo_tipodocumento,
                    tiposdocumento.nombre_tipodocumento,
    
                    paises.codigo3_pais,
                    paises.nombre_pais,
                    departamentos.nombre_departamento,
                    municipios.nombre_municipio,
    
                    generos.nombre_genero,
    
                    estadoscivil.nombre_estadocivil,
    
                    profesiones.nombre_profesion,
    
                    tipospersona.nombre_tipopersona,
    
                    estados.nombre_estado,

                    modalidades.id_modalidad, 
                    modalidades.nombre_modalidad,

                    tiposcontrato.id_tipocontrato, 
                    tiposcontrato.nombre_tipocontrato,

                    estadoscontrato.id_estado, 
                    estadoscontrato.nombre_estado as nombreestado_contrato
                
                    FROM contratos 
                            left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                            left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                            left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                            left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                            left join paises on contratistas.pais_contratista = paises.id_pais       
                            left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                            left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                            left join generos on contratistas.genero_contratista = generos.id_genero
                            left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                            left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                            left join estados on contratistas.estado_contratista = estados.id_estado
                            left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado
                        
                    WHERE contratos.estado_contrato != '6' && contratos.estado_contrato != '5' ".$where."
                    
                    ORDER BY contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    
    function getTodosxEstado($estado_contrato) {
        
        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fecha_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fechaliquidacion_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fevaluacionproceso2_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.hcierreproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado2_contrato,
                    contratos.estado_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    contratistas.dirresidencia_contratista,
                    contratistas.dircorrespondencia_contratista,
                    contratistas.telefono_contratista,
                    contratistas.celular_contratista,
                    contratistas.correo_contratista,
                    contratistas.paginaweb_contratista,

                    contratistas.pais_contratista,
                    contratistas.departamento_contratista,
                    contratistas.municipio_contratista,

                    contratistas.fechanacimiento_contratista,

                    contratistas.genero_contratista,
                    contratistas.estadocivil_contratista,
                    contratistas.hijos_contratista,

                    contratistas.profesion_contratista,
            
                    tiposdocumento.codigo_tipodocumento,
                    tiposdocumento.nombre_tipodocumento,
    
                    paises.codigo3_pais,
                    paises.nombre_pais,
                    departamentos.nombre_departamento,
                    municipios.nombre_municipio,
    
                    generos.nombre_genero,
    
                    estadoscivil.nombre_estadocivil,
    
                    profesiones.nombre_profesion,
    
                    tipospersona.nombre_tipopersona,
    
                    estados.nombre_estado,

                    modalidades.id_modalidad, 
                    modalidades.nombre_modalidad,

                    tiposcontrato.id_tipocontrato, 
                    tiposcontrato.nombre_tipocontrato,

                    estadoscontrato.id_estado, 
                    estadoscontrato.nombre_estado as nombreestado_contrato
                
                    FROM contratos 
                            left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                            left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                            left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                            left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                            left join paises on contratistas.pais_contratista = paises.id_pais       
                            left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                            left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                            left join generos on contratistas.genero_contratista = generos.id_genero
                            left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                            left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                            left join estados on contratistas.estado_contratista = estados.id_estado
                            left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado

                    WHERE estado_contrato = '".$estado_contrato."' 
                    
                    ORDER BY contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    
    function getTodosxSupervisor() {
        
        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fecha_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fechaliquidacion_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fevaluacionproceso2_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.hcierreproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado2_contrato,
                    contratos.estado_contrato,
                    contratos.agncon,
                    contratos.concon,
                    contratos.conpro,
                    contratos.plan_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    contratistas.dirresidencia_contratista,
                    contratistas.dircorrespondencia_contratista,
                    contratistas.telefono_contratista,
                    contratistas.celular_contratista,
                    contratistas.correo_contratista,
                    contratistas.paginaweb_contratista,

                    contratistas.pais_contratista,
                    contratistas.departamento_contratista,
                    contratistas.municipio_contratista,

                    contratistas.fechanacimiento_contratista,

                    contratistas.genero_contratista,
                    contratistas.estadocivil_contratista,
                    contratistas.hijos_contratista,

                    contratistas.profesion_contratista,
            
                    tiposdocumento.codigo_tipodocumento,
                    tiposdocumento.nombre_tipodocumento,
    
                    paises.codigo3_pais,
                    paises.nombre_pais,
                    departamentos.nombre_departamento,
                    municipios.nombre_municipio,
    
                    generos.nombre_genero,
    
                    estadoscivil.nombre_estadocivil,
    
                    profesiones.nombre_profesion,
    
                    tipospersona.nombre_tipopersona,
    
                    estados.nombre_estado,

                    modalidades.id_modalidad, 
                    modalidades.nombre_modalidad,

                    tiposcontrato.id_tipocontrato, 
                    tiposcontrato.nombre_tipocontrato,

                    estadoscontrato.id_estado, 
                    estadoscontrato.nombre_estado as nombreestado_contrato
                
                    FROM contratos 
                            left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                            left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                            left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                            left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                            left join paises on contratistas.pais_contratista = paises.id_pais       
                            left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                            left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                            left join generos on contratistas.genero_contratista = generos.id_genero
                            left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                            left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                            left join estados on contratistas.estado_contratista = estados.id_estado
                            left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado

                    WHERE id_contrato in (select contrato_supervisor 
                                            from contratos_supervisores left join supervisores 
                                                on contratos_supervisores.supervisor_supervisor = supervisores.id_supervisor
                                            where supervisores.documento_supervisor = '".$_SESSION['documento_usuario']."')
                    
                    ORDER BY contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    
    function getTodosxEncargado() {
        
        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fecha_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fechaliquidacion_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fevaluacionproceso2_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.hcierreproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado2_contrato,
                    contratos.estado_contrato,
                    contratos.agncon,
                    contratos.concon,
                    contratos.conpro,
                    contratos.plan_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    contratistas.dirresidencia_contratista,
                    contratistas.dircorrespondencia_contratista,
                    contratistas.telefono_contratista,
                    contratistas.celular_contratista,
                    contratistas.correo_contratista,
                    contratistas.paginaweb_contratista,

                    contratistas.pais_contratista,
                    contratistas.departamento_contratista,
                    contratistas.municipio_contratista,

                    contratistas.fechanacimiento_contratista,

                    contratistas.genero_contratista,
                    contratistas.estadocivil_contratista,
                    contratistas.hijos_contratista,

                    contratistas.profesion_contratista,
            
                    tiposdocumento.codigo_tipodocumento,
                    tiposdocumento.nombre_tipodocumento,
    
                    paises.codigo3_pais,
                    paises.nombre_pais,
                    departamentos.nombre_departamento,
                    municipios.nombre_municipio,
    
                    generos.nombre_genero,
    
                    estadoscivil.nombre_estadocivil,
    
                    profesiones.nombre_profesion,
    
                    tipospersona.nombre_tipopersona,
    
                    estados.nombre_estado,

                    modalidades.id_modalidad, 
                    modalidades.nombre_modalidad,

                    tiposcontrato.id_tipocontrato, 
                    tiposcontrato.nombre_tipocontrato,

                    estadoscontrato.id_estado, 
                    estadoscontrato.nombre_estado as nombreestado_contrato
                
                    FROM contratos 
                            left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                            left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                            left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                            left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                            left join paises on contratistas.pais_contratista = paises.id_pais       
                            left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                            left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                            left join generos on contratistas.genero_contratista = generos.id_genero
                            left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                            left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                            left join estados on contratistas.estado_contratista = estados.id_estado
                            left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado

                    WHERE  id_contrato in (select contrato_encargado 
                        from contratos_encargados left join encargados on contratos_encargados.encargado_encargado = encargados.id_encargado
                        where encargados.documento_encargado = '".$_SESSION['documento_usuario']."')
                    
                    ORDER BY contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  



    
    function getTodosxContratista() {
        
        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fecha_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fechaliquidacion_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fevaluacionproceso2_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.hcierreproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado2_contrato,
                    contratos.estado_contrato,
                    contratos.agncon,
                    contratos.concon,
                    contratos.conpro,
                    contratos.plan_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    contratistas.dirresidencia_contratista,
                    contratistas.dircorrespondencia_contratista,
                    contratistas.telefono_contratista,
                    contratistas.celular_contratista,
                    contratistas.correo_contratista,
                    contratistas.paginaweb_contratista,

                    contratistas.pais_contratista,
                    contratistas.departamento_contratista,
                    contratistas.municipio_contratista,

                    contratistas.fechanacimiento_contratista,

                    contratistas.genero_contratista,
                    contratistas.estadocivil_contratista,
                    contratistas.hijos_contratista,

                    contratistas.profesion_contratista,
            
                    tiposdocumento.codigo_tipodocumento,
                    tiposdocumento.nombre_tipodocumento,
    
                    paises.codigo3_pais,
                    paises.nombre_pais,
                    departamentos.nombre_departamento,
                    municipios.nombre_municipio,
    
                    generos.nombre_genero,
    
                    estadoscivil.nombre_estadocivil,
    
                    profesiones.nombre_profesion,
    
                    tipospersona.nombre_tipopersona,
    
                    estados.nombre_estado,

                    modalidades.id_modalidad, 
                    modalidades.nombre_modalidad,

                    tiposcontrato.id_tipocontrato, 
                    tiposcontrato.nombre_tipocontrato,

                    estadoscontrato.id_estado, 
                    estadoscontrato.nombre_estado as nombreestado_contrato
                
                    FROM contratos 
                            left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                            left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                            left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                            left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                            left join paises on contratistas.pais_contratista = paises.id_pais       
                            left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                            left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                            left join generos on contratistas.genero_contratista = generos.id_genero
                            left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                            left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                            left join estados on contratistas.estado_contratista = estados.id_estado
                            left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado

                    WHERE  contratistas.documento_contratista = '".$_SESSION['documento_usuario']."' and
                           contratos.estado_contrato in (3,4)

                    
                    ORDER BY contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  
    
    
    
    function getTodosxContratistaxEstado($estado) {
        
        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fecha_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fechaliquidacion_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fevaluacionproceso2_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.hcierreproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado2_contrato,
                    contratos.estado_contrato,
                    contratos.agncon,
                    contratos.concon,
                    contratos.conpro,
                    contratos.plan_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    contratistas.dirresidencia_contratista,
                    contratistas.dircorrespondencia_contratista,
                    contratistas.telefono_contratista,
                    contratistas.celular_contratista,
                    contratistas.correo_contratista,
                    contratistas.paginaweb_contratista,

                    contratistas.pais_contratista,
                    contratistas.departamento_contratista,
                    contratistas.municipio_contratista,

                    contratistas.fechanacimiento_contratista,

                    contratistas.genero_contratista,
                    contratistas.estadocivil_contratista,
                    contratistas.hijos_contratista,

                    contratistas.profesion_contratista,
            
                    tiposdocumento.codigo_tipodocumento,
                    tiposdocumento.nombre_tipodocumento,
    
                    paises.codigo3_pais,
                    paises.nombre_pais,
                    departamentos.nombre_departamento,
                    municipios.nombre_municipio,
    
                    generos.nombre_genero,
    
                    estadoscivil.nombre_estadocivil,
    
                    profesiones.nombre_profesion,
    
                    tipospersona.nombre_tipopersona,
    
                    estados.nombre_estado,

                    modalidades.id_modalidad, 
                    modalidades.nombre_modalidad,

                    tiposcontrato.id_tipocontrato, 
                    tiposcontrato.nombre_tipocontrato,

                    estadoscontrato.id_estado, 
                    estadoscontrato.nombre_estado as nombreestado_contrato
                
                    FROM contratos 
                            left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                            left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                            left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                            left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                            left join paises on contratistas.pais_contratista = paises.id_pais       
                            left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                            left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                            left join generos on contratistas.genero_contratista = generos.id_genero
                            left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                            left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                            left join estados on contratistas.estado_contratista = estados.id_estado
                            left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado

                    WHERE  contratistas.documento_contratista = '".$_SESSION['documento_usuario']."' and 
                            contratos.estado_contrato = '".$estado."'
                    
                    ORDER BY contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  
    
    
    
    function getTodosxEncargadoxEstado($estado) {
        
        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fecha_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fechaliquidacion_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fevaluacionproceso2_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.hcierreproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado2_contrato,
                    contratos.estado_contrato,
                    contratos.agncon,
                    contratos.concon,
                    contratos.conpro,
                    contratos.plan_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    contratistas.dirresidencia_contratista,
                    contratistas.dircorrespondencia_contratista,
                    contratistas.telefono_contratista,
                    contratistas.celular_contratista,
                    contratistas.correo_contratista,
                    contratistas.paginaweb_contratista,

                    contratistas.pais_contratista,
                    contratistas.departamento_contratista,
                    contratistas.municipio_contratista,

                    contratistas.fechanacimiento_contratista,

                    contratistas.genero_contratista,
                    contratistas.estadocivil_contratista,
                    contratistas.hijos_contratista,

                    contratistas.profesion_contratista,
            
                    tiposdocumento.codigo_tipodocumento,
                    tiposdocumento.nombre_tipodocumento,
    
                    paises.codigo3_pais,
                    paises.nombre_pais,
                    departamentos.nombre_departamento,
                    municipios.nombre_municipio,
    
                    generos.nombre_genero,
    
                    estadoscivil.nombre_estadocivil,
    
                    profesiones.nombre_profesion,
    
                    tipospersona.nombre_tipopersona,
    
                    estados.nombre_estado,

                    modalidades.id_modalidad, 
                    modalidades.nombre_modalidad,

                    tiposcontrato.id_tipocontrato, 
                    tiposcontrato.nombre_tipocontrato,

                    estadoscontrato.id_estado, 
                    estadoscontrato.nombre_estado as nombreestado_contrato
                
                    FROM contratos 
                            left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                            left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                            left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                            left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                            left join paises on contratistas.pais_contratista = paises.id_pais       
                            left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                            left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                            left join generos on contratistas.genero_contratista = generos.id_genero
                            left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                            left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                            left join estados on contratistas.estado_contratista = estados.id_estado
                            left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado

                    WHERE  contratos.estado_contrato = '".$estado."' and 
                         id_contrato in (select contrato_encargado 
                        from contratos_encargados left join encargados on contratos_encargados.encargado_encargado = encargados.id_encargado
                        where encargados.documento_encargado = '".$_SESSION['documento_usuario']."')
                    
                    ORDER BY contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  
    
     
    function getTodosxSupervisorxEstado($estado) {
        
        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fecha_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fechaliquidacion_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fevaluacionproceso2_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.hcierreproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado2_contrato,
                    contratos.estado_contrato,
                    contratos.agncon,
                    contratos.concon,
                    contratos.conpro,
                    contratos.plan_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    contratistas.dirresidencia_contratista,
                    contratistas.dircorrespondencia_contratista,
                    contratistas.telefono_contratista,
                    contratistas.celular_contratista,
                    contratistas.correo_contratista,
                    contratistas.paginaweb_contratista,

                    contratistas.pais_contratista,
                    contratistas.departamento_contratista,
                    contratistas.municipio_contratista,

                    contratistas.fechanacimiento_contratista,

                    contratistas.genero_contratista,
                    contratistas.estadocivil_contratista,
                    contratistas.hijos_contratista,

                    contratistas.profesion_contratista,
            
                    tiposdocumento.codigo_tipodocumento,
                    tiposdocumento.nombre_tipodocumento,
    
                    paises.codigo3_pais,
                    paises.nombre_pais,
                    departamentos.nombre_departamento,
                    municipios.nombre_municipio,
    
                    generos.nombre_genero,
    
                    estadoscivil.nombre_estadocivil,
    
                    profesiones.nombre_profesion,
    
                    tipospersona.nombre_tipopersona,
    
                    estados.nombre_estado,

                    modalidades.id_modalidad, 
                    modalidades.nombre_modalidad,

                    tiposcontrato.id_tipocontrato, 
                    tiposcontrato.nombre_tipocontrato,

                    estadoscontrato.id_estado, 
                    estadoscontrato.nombre_estado as nombreestado_contrato
                
                    FROM contratos 
                            left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                            left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                            left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                            left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                            left join paises on contratistas.pais_contratista = paises.id_pais       
                            left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                            left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                            left join generos on contratistas.genero_contratista = generos.id_genero
                            left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                            left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                            left join estados on contratistas.estado_contratista = estados.id_estado
                            left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado

                    WHERE  contratos.estado_contrato = '".$estado."' and 
                            id_contrato in (select contrato_supervisor 
                                from contratos_supervisores left join supervisores 
                                    on contratos_supervisores.supervisor_supervisor = supervisores.id_supervisor
                                where supervisores.documento_supervisor = '".$_SESSION['documento_usuario']."')
                    
                    ORDER BY contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getTodosAvanzada($modalidad, $tipocontrato, $estado, $fechainicio, $fechafinal, $array_rango) {

        $where = "WHERE valor_contrato between '".$array_rango[0]."' and '".$array_rango[1]."' ";

        if($estado != 0){
            $where .= " and estado_contrato = '".$estado."' ";
        }
        if($modalidad != 0){
            $where .= " and modalidad_contrato = '".$modalidad."' ";
        }
        if($tipocontrato != 0){          
            $where .= " and tipo_contrato = '".$tipocontrato."' ";           
        }
        if($fechainicio != "" && $fechafinal != ""){           
                $where .= " AND  (fechainicio_contrato BETWEEN '".$fechainicio."' AND '".$fechafinal."')";            
        }
        
        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fecha_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fechaliquidacion_contrato,
                    contratos.favisoproceso_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fevaluacionproceso2_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.hcierreproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado2_contrato,
                    contratos.estado_contrato,
                    contratos.agncon,
                    contratos.concon,
                    contratos.conpro,
                    contratos.plan_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    contratistas.dirresidencia_contratista,
                    contratistas.dircorrespondencia_contratista,
                    contratistas.telefono_contratista,
                    contratistas.celular_contratista,
                    contratistas.correo_contratista,
                    contratistas.paginaweb_contratista,

                    contratistas.pais_contratista,
                    contratistas.departamento_contratista,
                    contratistas.municipio_contratista,

                    contratistas.fechanacimiento_contratista,

                    contratistas.genero_contratista,
                    contratistas.estadocivil_contratista,
                    contratistas.hijos_contratista,

                    contratistas.profesion_contratista,
            
                    tiposdocumento.codigo_tipodocumento,
                    tiposdocumento.nombre_tipodocumento,
    
                    paises.codigo3_pais,
                    paises.nombre_pais,
                    departamentos.nombre_departamento,
                    municipios.nombre_municipio,
    
                    generos.nombre_genero,
    
                    estadoscivil.nombre_estadocivil,
    
                    profesiones.nombre_profesion,
    
                    tipospersona.nombre_tipopersona,
    
                    estados.nombre_estado,

                    modalidades.id_modalidad, 
                    modalidades.nombre_modalidad,

                    tiposcontrato.id_tipocontrato, 
                    tiposcontrato.nombre_tipocontrato,

                    estadoscontrato.id_estado, 
                    estadoscontrato.nombre_estado as nombreestado_contrato
                
                    FROM contratos 
                            left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                            left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                            left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                            left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                            left join paises on contratistas.pais_contratista = paises.id_pais       
                            left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                            left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                            left join generos on contratistas.genero_contratista = generos.id_genero
                            left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                            left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                            left join estados on contratistas.estado_contratista = estados.id_estado
                            left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado

                     ".$where."
                    
                    ORDER BY contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    
    function getContratosFinalizadosSinPagar() {
        
        $params = new Parametros();

        $fecha_actual = date("Y-m-d");

        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fecha_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fechaliquidacion_contrato,
                    contratos.favisoproceso_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fevaluacionproceso2_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.hcierreproceso_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado2_contrato,
                    contratos.estado_contrato,
                    contratos.agncon,
                    contratos.concon,
                    contratos.conpro,
                    contratos.plan_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    contratistas.dirresidencia_contratista,
                    contratistas.dircorrespondencia_contratista,
                    contratistas.telefono_contratista,
                    contratistas.celular_contratista,
                    contratistas.correo_contratista,
                    contratistas.paginaweb_contratista,

                    contratistas.pais_contratista,
                    contratistas.departamento_contratista,
                    contratistas.municipio_contratista,

                    contratistas.fechanacimiento_contratista,

                    contratistas.genero_contratista,
                    contratistas.estadocivil_contratista,
                    contratistas.hijos_contratista,

                    contratistas.profesion_contratista,

                    tiposdocumento.codigo_tipodocumento,
                    tiposdocumento.nombre_tipodocumento,

                    paises.codigo3_pais,
                    paises.nombre_pais,
                    departamentos.nombre_departamento,
                    municipios.nombre_municipio,

                    generos.nombre_genero,

                    estadoscivil.nombre_estadocivil,

                    profesiones.nombre_profesion,

                    tipospersona.nombre_tipopersona,

                    estados.nombre_estado,

                    modalidades.id_modalidad, 
                    modalidades.nombre_modalidad,

                    tiposcontrato.id_tipocontrato, 
                    tiposcontrato.nombre_tipocontrato,

                    estadoscontrato.id_estado, 
                    estadoscontrato.nombre_estado,

                    (select sum(contratos_pagos.valor_pago) from contratos_pagos where contrato_pago = contratos.id_contrato) as saldo
            
                    FROM contratos 
                            left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                            left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                            left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                            left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                            left join paises on contratistas.pais_contratista = paises.id_pais       
                            left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                            left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                            left join generos on contratistas.genero_contratista = generos.id_genero
                            left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                            left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                            left join estados on contratistas.estado_contratista = estados.id_estado
                            left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado

                        WHERE contratos.fechafinal_contrato < '".$fecha_actual."' and 
                        
                        contratos.estado_contrato >= 3 and contratos.estado_contrato != '6' && contratos.estado_contrato != '5'

                        contratos.valor_contrato > (select sum(contratos_pagos.valor_pago) from contratos_pagos where contrato_pago = contratos.id_contrato)

                    ";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    
    function getTodosAvanzadaFinanciera($modalidad, $tipocontrato, $estado, $fechainicio, $fechafinal, $array_rango) {

        $where = "WHERE valor_contrato between '".$array_rango[0]."' and '".$array_rango[1]."' and estado_contrato = '3' ";

        if($estado != 0){
            $where .= " and estado_contrato = '".$estado."' ";
        }
        if($modalidad != 0){
            $where .= " and modalidad_contrato = '".$modalidad."' ";
        }
        if($tipocontrato != 0){          
            $where .= " and tipo_contrato = '".$tipocontrato."' ";           
        }
        if($fechainicio != "" && $fechafinal != ""){           
                $where .= " AND  (fechainicio_contrato BETWEEN '".$fechainicio."' AND '".$fechafinal."')";            
        }
        
        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fecha_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fechaliquidacion_contrato,
                    contratos.favisoproceso_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fevaluacionproceso2_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.hcierreproceso_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado2_contrato,
                    contratos.estado_contrato,
                    contratos.plan_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    contratistas.dirresidencia_contratista,
                    contratistas.dircorrespondencia_contratista,
                    contratistas.telefono_contratista,
                    contratistas.celular_contratista,
                    contratistas.correo_contratista,
                    contratistas.paginaweb_contratista,

                    contratistas.pais_contratista,
                    contratistas.departamento_contratista,
                    contratistas.municipio_contratista,

                    contratistas.fechanacimiento_contratista,

                    contratistas.genero_contratista,
                    contratistas.estadocivil_contratista,
                    contratistas.hijos_contratista,

                    contratistas.profesion_contratista,
            
                    tiposdocumento.codigo_tipodocumento,
                    tiposdocumento.nombre_tipodocumento,
    
                    paises.codigo3_pais,
                    paises.nombre_pais,
                    departamentos.nombre_departamento,
                    municipios.nombre_municipio,
    
                    generos.nombre_genero,
    
                    estadoscivil.nombre_estadocivil,
    
                    profesiones.nombre_profesion,
    
                    tipospersona.nombre_tipopersona,
    
                    estados.nombre_estado,

                    modalidades.id_modalidad, 
                    modalidades.nombre_modalidad,

                    tiposcontrato.id_tipocontrato, 
                    tiposcontrato.nombre_tipocontrato,

                    estadoscontrato.id_estado, 
                    estadoscontrato.nombre_estado as nombreestado_contrato
                
                    FROM contratos 
                            left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                            left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                            left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                            left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                            left join paises on contratistas.pais_contratista = paises.id_pais       
                            left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                            left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                            left join generos on contratistas.genero_contratista = generos.id_genero
                            left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                            left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                            left join estados on contratistas.estado_contratista = estados.id_estado
                            left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado

                     ".$where."
                    
                    ORDER BY contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    function getDatos($id_contrato) {
       
        $query = "select 

        contratos.id_contrato, 
        contratos.tipo_contrato,
        contratos.modalidad_contrato,
        contratos.valor_contrato,
        contratos.valproceso_contrato,
        contratos.contratista_contrato,
        contratos.fecha_contrato,
        contratos.fechainicio_contrato,
        contratos.fechafinal_contrato,
        contratos.fechaliquidacion_contrato,
        contratos.favisoproceso_contrato,
        contratos.fevaluacionproceso_contrato,
        contratos.fevaluacionproceso2_contrato,
        contratos.fcierreproceso_contrato,
        contratos.hcierreproceso_contrato,
        contratos.fadjudicacionproceso_contrato,
        contratos.numero_contrato,
        contratos.numproceso_contrato,
        contratos.objeto_contrato,
        contratos.estado2_contrato,
        contratos.estado_contrato,
        contratos.agncon,
        contratos.concon,
        contratos.conpro,
        contratos.plan_contrato,


        contratistas.id_contratista, 

        contratistas.tipo_contratista,
        contratistas.tipodocumento_contratista,
        contratistas.documento_contratista,
        contratistas.nombres_contratista,
        contratistas.apellidos_contratista,

        contratistas.dirresidencia_contratista,
        contratistas.dircorrespondencia_contratista,
        contratistas.telefono_contratista,
        contratistas.celular_contratista,
        contratistas.correo_contratista,
        contratistas.paginaweb_contratista,

        contratistas.pais_contratista,
        contratistas.departamento_contratista,
        contratistas.municipio_contratista,

        contratistas.fechanacimiento_contratista,

        contratistas.genero_contratista,
        contratistas.estadocivil_contratista,
        contratistas.hijos_contratista,

        contratistas.profesion_contratista,

        tiposdocumento.codigo_tipodocumento,
        tiposdocumento.nombre_tipodocumento,

        paises.codigo3_pais,
        paises.nombre_pais,
        departamentos.nombre_departamento,
        municipios.nombre_municipio,

        generos.nombre_genero,

        estadoscivil.nombre_estadocivil,

        profesiones.nombre_profesion,

        tipospersona.nombre_tipopersona,

        estados.nombre_estado,

        modalidades.id_modalidad, 
        modalidades.nombre_modalidad,

        tiposcontrato.id_tipocontrato, 
        tiposcontrato.nombre_tipocontrato,

        estadoscontrato.id_estado, 
        estadoscontrato.nombre_estado as nombreestado_contrato
    
        from contratos 
                left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                left join paises on contratistas.pais_contratista = paises.id_pais       
                left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                left join generos on contratistas.genero_contratista = generos.id_genero
                left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                left join estados on contratistas.estado_contratista = estados.id_estado
                left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado
                
                where contratos.id_contrato='".$id_contrato."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    

    function insertarContratoDirecto(      
        $numero_contrato,
        $valor_contrato,
        $modalidad_contrato,
        $tipo_contrato,
        $fechainicio_contrato,
        $fechafinal_contrato,
        $fechaliquidacion_contrato,
        $contratista_contrato,
        $objeto_contrato,
        $concon
    ){
        
        $agncon = date('Y');

        $query = "INSERT INTO contratos (
                        numero_contrato,
                        valor_contrato,
                        modalidad_contrato,
                        tipo_contrato,
                        fechainicio_contrato,
                        fechafinal_contrato,
                        fechaliquidacion_contrato,
                        contratista_contrato,
                        objeto_contrato,
                        estado_contrato,
                        agncon,
                        concon
                            )
                    VALUES(
                        '".$numero_contrato."',
                        '".$valor_contrato."',
                        '".$modalidad_contrato."',
                        '".$tipo_contrato."',
                        '".$fechainicio_contrato."',
                        '".$fechafinal_contrato."',
                        '".$fechaliquidacion_contrato."',
                        '".$contratista_contrato."',
                        '".utf8_decode($objeto_contrato)."',
                        '3',
                        '".$agncon."',
                        '".$concon."'
                    );";
  
       
        return $this->crear_ultimo_id($query);
        
    }
    

    function insertarProceso(    
        $objeto_contrato
    ){
        
        $agncon = date('Y');

        $query = "INSERT INTO contratos (                     
                        objeto_contrato,
                        estado_contrato,
                        agncon
                            )
                    VALUES(                      
                        '".utf8_decode($objeto_contrato)."',
                        '1',
                        '".$agncon."'
                    );";
  
       
        return $this->crear_ultimo_id($query);
        
    }
    

    function editar(
                    $id_contrato, 
                    $numproceso_contrato,
                    $valproceso_contrato,
                    $favisoproceso_contrato,
                    $fevaluacionproceso_contrato,
                    $fevaluacionproceso2_contrato,
                    $fadjudicacionproceso_contrato,
                    $fcierreproceso_contrato,
                    $hcierreproceso_contrato,
                    $modalidad_contrato,
                    $contratista_contrato,
                    $tipo_contrato,
                    $objeto_contrato,
                    $estado2_contrato,

                    $numero_contrato,
                    $valor_contrato,
                    $fecha_contrato,
                    $fechainicio_contrato,
                    $fechafinal_contrato,
                    $fechaliquidacion_contrato,
                    $conpro
                ) {

                if($contratista_contrato == ''){
        
            $query = "  UPDATE contratos 

                    SET numproceso_contrato = '". $numproceso_contrato ."',
                        valproceso_contrato = '". $valproceso_contrato ."',
                        favisoproceso_contrato = '". $favisoproceso_contrato ."',
                        fevaluacionproceso_contrato = '". $fevaluacionproceso_contrato ."',
                        fevaluacionproceso2_contrato = '". $fevaluacionproceso2_contrato ."',
                        fadjudicacionproceso_contrato = '". $fadjudicacionproceso_contrato ."',
                        fcierreproceso_contrato = '". $fcierreproceso_contrato ."',
                        hcierreproceso_contrato = '". $hcierreproceso_contrato ."',
                        modalidad_contrato = '". $modalidad_contrato ."',
                        tipo_contrato = '". $tipo_contrato ."',
                        objeto_contrato = '". utf8_decode($objeto_contrato) ."',                        
                        estado2_contrato, = '". $estado2_contrato ."',

                        numero_contrato = '". $numero_contrato ."',
                        valor_contrato = '". $valor_contrato ."',
                        fecha_contrato = '". $fecha_contrato ."',
                        fechainicio_contrato = '". $fechainicio_contrato ."',
                        fechafinal_contrato = '". $fechafinal_contrato ."',
                        fechaliquidacion_contrato = '". $fechaliquidacion_contrato ."',
                        conpro = '". $conpro ."'

                    WHERE id_contrato = '" . $id_contrato . "'";
            }else{
                $query = "  UPDATE contratos 

                SET numproceso_contrato = '". $numproceso_contrato ."',
                    valproceso_contrato = '". $valproceso_contrato ."',
                    favisoproceso_contrato = '". $favisoproceso_contrato ."',
                    fevaluacionproceso_contrato = '". $fevaluacionproceso_contrato ."',
                    fevaluacionproceso2_contrato = '". $fevaluacionproceso2_contrato ."',
                    fadjudicacionproceso_contrato = '". $fadjudicacionproceso_contrato ."',
                    fcierreproceso_contrato = '". $fcierreproceso_contrato ."',
                    hcierreproceso_contrato = '". $hcierreproceso_contrato ."',
                    modalidad_contrato = '". $modalidad_contrato ."',
                    contratista_contrato = '". $contratista_contrato ."',
                    tipo_contrato = '". $tipo_contrato ."',
                    objeto_contrato = '". utf8_decode($objeto_contrato) ."',
                    estado2_contrato = '". $estado2_contrato ."',

                    numero_contrato = '". $numero_contrato ."',
                    valor_contrato = '". $valor_contrato ."',
                    fecha_contrato = '". $fecha_contrato ."',
                    fechainicio_contrato = '". $fechainicio_contrato ."',
                    fechafinal_contrato = '". $fechafinal_contrato ."',
                    fechaliquidacion_contrato = '". $fechaliquidacion_contrato ."',
                    conpro = '". $conpro ."'

                WHERE id_contrato = '" . $id_contrato . "'";
            }
         

        return $this->modificarRegistros($query);
       
    }


    
    function editarInfoProceso(
        $id_contrato, 
        $numproceso_contrato,
        $valproceso_contrato,
        $favisoproceso_contrato,
        $fevaluacionproceso_contrato,
        $fevaluacionproceso2_contrato,
        $fadjudicacionproceso_contrato,
        $fcierreproceso_contrato,
        $hcierreproceso_contrato,
        $modalidad_contrato,
        $tipo_contrato,
        $objeto_contrato,
        $estado2_contrato,
        $conpro
    ) {


$query = "  UPDATE contratos 

        SET numproceso_contrato = '". $numproceso_contrato ."',
            valproceso_contrato = '". $valproceso_contrato ."',
            favisoproceso_contrato = '". $favisoproceso_contrato ."',
            fevaluacionproceso_contrato = '". $fevaluacionproceso_contrato ."',
            fevaluacionproceso2_contrato = '". $fevaluacionproceso2_contrato ."',
            fadjudicacionproceso_contrato = '". $fadjudicacionproceso_contrato ."',
            fcierreproceso_contrato = '". $fcierreproceso_contrato ."',
            hcierreproceso_contrato = '". $hcierreproceso_contrato ."',
            modalidad_contrato = '". $modalidad_contrato ."',
            tipo_contrato = '". $tipo_contrato ."',
            objeto_contrato = '". utf8_decode($objeto_contrato) ."',
            estado2_contrato = '". $estado2_contrato ."',

            conpro = '". $conpro ."'

        WHERE id_contrato = '" . $id_contrato . "'";


return $this->modificarRegistros($query);

}



    function editarProceso(
                    $id_contrato, 
                    $numproceso_contrato,
                    $valproceso_contrato,
                    $favisoproceso_contrato,
                    $fevaluacionproceso_contrato,
                    $fevaluacionproceso2_contrato,
                    $fadjudicacionproceso_contrato,
                    $fcierreproceso_contrato,
                    $hcierreproceso_contrato,
                    $modalidad_contrato,
                    $contratista_contrato,
                    $tipo_contrato,
                    $objeto_contrato,
                    $estado2_contrato,

                    $numero_contrato,
                    $valor_contrato,
                    $fecha_contrato,
                    $fechainicio_contrato,
                    $fechafinal_contrato,
                    $fechaliquidacion_contrato
                ) {

                if($contratista_contrato == ''){
        
            $query = "  UPDATE contratos 

                    SET numproceso_contrato = '". $numproceso_contrato ."',
                        valproceso_contrato = '". $valproceso_contrato ."',
                        favisoproceso_contrato = '". $favisoproceso_contrato ."',
                        fevaluacionproceso_contrato = '". $fevaluacionproceso_contrato ."',
                        fevaluacionproceso2_contrato = '". $fevaluacionproceso2_contrato ."',
                        fadjudicacionproceso_contrato = '". $fadjudicacionproceso_contrato ."',
                        fcierreproceso_contrato = '". $fcierreproceso_contrato ."',
                        hcierreproceso_contrato = '". $hcierreproceso_contrato ."',
                        modalidad_contrato = '". $modalidad_contrato ."',
                        tipo_contrato = '". $tipo_contrato ."',
                        objeto_contrato = '". utf8_decode($objeto_contrato) ."',
                        estado2_contrato = '". $estado2_contrato ."',

                        numero_contrato = '". $numero_contrato ."',
                        valor_contrato = '". $valor_contrato ."',
                        fecha_contrato = '". $fecha_contrato ."',
                        fechainicio_contrato = '". $fechainicio_contrato ."',
                        fechafinal_contrato = '". $fechafinal_contrato ."',
                        fechaliquidacion_contrato = '". $fechaliquidacion_contrato ."'

                    WHERE id_contrato = '" . $id_contrato . "'";
            }else{
                $query = "  UPDATE contratos 

                SET numproceso_contrato = '". $numproceso_contrato ."',
                    valproceso_contrato = '". $valproceso_contrato ."',
                    favisoproceso_contrato = '". $favisoproceso_contrato ."',
                    fevaluacionproceso_contrato = '". $fevaluacionproceso_contrato ."',
                    fevaluacionproceso2_contrato = '". $fevaluacionproceso2_contrato ."',
                    fadjudicacionproceso_contrato = '". $fadjudicacionproceso_contrato ."',
                    fcierreproceso_contrato = '". $fcierreproceso_contrato ."',
                    modalidad_contrato = '". $modalidad_contrato ."',
                    contratista_contrato = '". $contratista_contrato ."',
                    tipo_contrato = '". $tipo_contrato ."',
                    objeto_contrato = '". utf8_decode($objeto_contrato) ."',
                    estado2_contrato = '". $estado2_contrato ."',

                    numero_contrato = '". $numero_contrato ."',
                    valor_contrato = '". $valor_contrato ."',
                    fecha_contrato = '". $fecha_contrato ."',
                    fechainicio_contrato = '". $fechainicio_contrato ."',
                    fechafinal_contrato = '". $fechafinal_contrato ."',
                    fechaliquidacion_contrato = '". $fechaliquidacion_contrato ."'

                WHERE id_contrato = '" . $id_contrato . "'";
            }
         

        return $this->modificarRegistros($query);
       
    }


    function editarDirecto(
        $id_contrato, 
        $contratista_contrato,
        $tipo_contrato,
        $objeto_contrato,
        $estado2_contrato,

        $numero_contrato,
        $valor_contrato,
        $fecha_contrato,
        $fechainicio_contrato,
        $fechafinal_contrato,
        $fechaliquidacion_contrato
    ) {

    if($contratista_contrato == ''){

            $query = "  UPDATE contratos 

                    SET tipo_contrato = '". $tipo_contrato ."',
                        objeto_contrato = '". utf8_decode($objeto_contrato) ."',
                        estado2_contrato = '".$estado2_contrato."',

                        numero_contrato = '". $numero_contrato ."',
                        valor_contrato = '". $valor_contrato ."',
                        fecha_contrato = '". $fecha_contrato ."',
                        fechainicio_contrato = '". $fechainicio_contrato ."',
                        fechafinal_contrato = '". $fechafinal_contrato ."',
                        fechaliquidacion_contrato = '". $fechaliquidacion_contrato ."'

                    WHERE id_contrato = '" . $id_contrato . "'";
            }else{
                $query = "  UPDATE contratos 

                SET contratista_contrato = '". $contratista_contrato ."',
                    tipo_contrato = '". $tipo_contrato ."',
                    objeto_contrato = '". utf8_decode($objeto_contrato) ."',
                    estado2_contrato = '".$estado2_contrato."',

                    numero_contrato = '". $numero_contrato ."',
                    valor_contrato = '". $valor_contrato ."',
                    fecha_contrato = '". $fecha_contrato ."',
                    fechainicio_contrato = '". $fechainicio_contrato ."',
                    fechafinal_contrato = '". $fechafinal_contrato ."',
                    fechaliquidacion_contrato = '". $fechaliquidacion_contrato ."'

                WHERE id_contrato = '" . $id_contrato . "'";
            }


            return $this->modificarRegistros($query);

            }

    
            
    function seleccionarPlan(
        $id_contrato, 
        $plan_contrato
    ) {

            $query = "  UPDATE contratos 

                    SET plan_contrato = '". $plan_contrato ."'

                    WHERE id_contrato = '" . $id_contrato . "'";
         


            return $this->modificarRegistros($query);

        }

    
    
            
    function deseleccionarPlan(
        $id_contrato
    ) {

            $query = "  UPDATE contratos 

                    SET plan_contrato = ''

                    WHERE id_contrato = '" . $id_contrato . "'";
         


            return $this->modificarRegistros($query);

        }

    
    
    function eliminar($id_contrato) {
        
        $query = "UPDATE contratos SET estado_contrato = '6' WHERE id_contrato = '". $id_contrato ."'";    
 
        $this->modificarRegistros($query);
        
    }

    
    function descartar($id_contrato) {
        
        $query = "  UPDATE contratos 
                    SET estado_contrato = '5'
                    WHERE id_contrato = '". $id_contrato ."'";    
     

        $this->modificarRegistros($query);
        
    }

    
    function liquidar($id_contrato) {
        
        $query = "  UPDATE contratos 
                    SET estado_contrato = '4'
                    WHERE id_contrato = '". $id_contrato ."'";    
        

        $this->modificarRegistros($query);
        
    }
    
    function adjudicar($id_contrato, $contratista) {
        
        $query = "  UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '".$contratista."'
                    WHERE id_contrato = '". $id_contrato ."'";    
    

        $this->modificarRegistros($query);
        
    }
    
    function celebrar($id_contrato, $numero, $fecha, $fechainicio, $fechafinal, $fechaliquidacion_contrato, $valor, $concon) {
        
        $query = "  UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = '".$numero."',
                        fecha_contrato = '".$fecha."',
                        fechainicio_contrato = '".$fechainicio."',
                        fechafinal_contrato = '".$fechafinal."',
                        fechaliquidacion_contrato = '".$fechaliquidacion_contrato."',
                        valor_contrato = '".$valor."',
                        concon = '".$concon."'

                    WHERE id_contrato = '". $id_contrato ."'";    
     

        $this->modificarRegistros($query);
        
    }


    
    function getNumConvocados() {
        
        $query = "  SELECT count(*) as numero
                
                    FROM contratos 
                    
                    where estado_contrato = '1'";
        
        $consulta = $this->consulta($query);
  

        return $consulta[0]['numero'];       
               
    }  
    
    
    
    function getConsecutivo($modalidad_contrato) {
        
        $agncon = date("Y");

        $query = "  SELECT concon
                
                    FROM contratos 
                    
                    WHERE modalidad_contrato = '".$modalidad_contrato."'
                            and agncon = '".$agncon."'
                    
                    ORDER BY concon DESC
                    
                    LIMIT 1";
        
        $consulta = $this->consulta($query);  

        return $consulta[0]['concon'];       
               
    }

    function getConsecutivoProceso($modalidad_contrato) {
        
        $agncon = date("Y");

        $query = "  SELECT conpro
                
                    FROM contratos 
                    
                    WHERE modalidad_contrato = '".$modalidad_contrato."'
                            and agncon = '".$agncon."'
                    
                    ORDER BY conpro DESC
                    
                    LIMIT 1";
        
        $consulta = $this->consulta($query);  

        return $consulta[0]['conpro'];       
               
    }  
    
    function getNumConvocadosXEncargado() {
        
        $query = "  SELECT count(*) as numero
                
                    FROM contratos 
                    
                    where estado_contrato = '1' and 
                            id_contrato in (select contrato_encargado 
                            from contratos_encargados left join encargados on contratos_encargados.encargado_encargado = encargados.id_encargado
                            where encargados.documento_encargado = '".$_SESSION['documento_usuario']."')";
        
        $consulta = $this->consulta($query);
  

        return $consulta[0]['numero'];       
               
    }  

    
    
    function getNumAdjudicados() {
        
        $query = "  SELECT count(*) as numero
                
                    FROM contratos 
                    
                    WHERE estado_contrato = '2'";
        
        $consulta = $this->consulta($query);
             

        return $consulta[0]['numero'];       
               
    }  

    
    function getNumAdjudicadosXEncargado() {
        
        $query = "  SELECT count(*) as numero
                
                    FROM contratos 
                    
                    WHERE estado_contrato = '2' and 
                        id_contrato in (select contrato_encargado 
                        from contratos_encargados left join encargados on contratos_encargados.encargado_encargado = encargados.id_encargado
                        where encargados.documento_encargado = '".$_SESSION['documento_usuario']."')";
        
        $consulta = $this->consulta($query);
             

        return $consulta[0]['numero'];       
               
    }  

    
    
    function getNumCelebrados() {
        
        $query = "  SELECT count(*) as numero
                
                    FROM contratos 
                    
                    where estado_contrato = '3'";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0]['numero'];       
               
    }  
  
    
    function getNumCelebradosXEncargado() {
        
        $query = "  SELECT count(*) as numero
                
                    FROM contratos 
                    
                    where estado_contrato = '3' and 
                        id_contrato in (select contrato_encargado 
                        from contratos_encargados left join encargados on contratos_encargados.encargado_encargado = encargados.id_encargado
                        where encargados.documento_encargado = '".$_SESSION['documento_usuario']."')";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0]['numero'];       
               
    }  

    
    function getNumCelebradosSupervisor() {
        
        $query = "  SELECT count(*) as numero
                
                    FROM contratos 
                    
                    where estado_contrato = '3' and 
                            id_contrato in (select contrato_supervisor 
                            from contratos_supervisores left join supervisores on contratos_supervisores.supervisor_supervisor = supervisores.id_supervisor
                            where supervisores.documento_supervisor = '".$_SESSION['documento_usuario']."')";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0]['numero'];       
               
    }  

    
    
    function getNumCelebradosContratista() {
        
        $query = "  SELECT count(*) as numero
                
                    FROM contratos left join contratistas on
                        contratos.contratista_contrato = contratistas.id_contratista
                    
                    where estado_contrato = '3' and 
                        contratistas.documento_contratista = '".$_SESSION['documento_usuario']."'";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0]['numero'];       
               
    }  

    
    
    function getNumLiquidados() {
        
        $query = "  SELECT count(*) as numero
                
                    FROM contratos 
                    
                    where estado_contrato = '4'";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0]['numero'];       
               
    }  

    
    
    function getNumLiquidadosSupervisor() {
        
        $query = "  SELECT count(*) as numero
                
                    FROM contratos 
                    
                    where estado_contrato = '4' and 
                    id_contrato in (select contrato_supervisor 
                    from contratos_supervisores 
                    left join supervisores on contratos_supervisores.supervisor_supervisor = supervisores.id_supervisor                    
                    where supervisores.documento_supervisor = '".$_SESSION['documento_usuario']."')";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0]['numero'];       
               
    }  

       
    function getNumLiquidadosContratista() {
        
        $query = "  SELECT count(*) as numero
                
                    FROM contratos left join contratistas on
                        contratos.contratista_contrato = contratistas.id_contratista
                    
                    where estado_contrato = '4' and 
                        contratistas.documento_contratista = '".$_SESSION['documento_usuario']."'";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0]['numero'];       
               
    }  

    
    function getNumDescartados() {
        
        $query = "  SELECT count(*) as numero
                
                    FROM contratos 
                    
                    where estado_contrato = '5'";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0]['numero'];       
               
    }  


    function getNumDescartadosSupervisor() {
        
        $query = "  SELECT count(*) as numero
                
                    FROM contratos 
                    
                    where estado_contrato = '5' and 
                    id_contrato in (select contrato_supervisor 
                    from contratos_supervisores 
                    left join supervisores on contratos_supervisores.supervisor_supervisor = supervisores.id_supervisor
                    
                    where supervisores.documento_supervisor = '".$_SESSION['documento_usuario']."')";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0]['numero'];       
               
    }  

      
    function getContratoPagado($id_contrato) {
        
        $query = "SELECT 
                      
                    contratos.id_contrato
                    FROM contratos           
                    WHERE contratos.id_contrato = '".$id_contrato."' and
                     (contratos.valor_contrato > (select sum(contratos_pagos.valor_pago) as total from contratos_pagos where contrato_pago = contratos.id_contrato)  or  (select sum(contratos_pagos.valor_pago) as total from contratos_pagos where contrato_pago = contratos.id_contrato) is null)";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  



}

?>