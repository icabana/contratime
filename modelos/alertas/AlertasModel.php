<?php

class AlertasModel extends ModelBase {
  
    
    function getContratosxFinalizar() {
        
        $params = new Parametros();

        $dias = $params->valor("diasantesdefinalizarcontrato");

        $fecha_actual = date("Y-m-d");

        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.favisoproceso_contrato,
                    contratos.fpresentacionproceso_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    concat( contratistas.nombres_contratista,' ',contratistas.apellidos_contratista) as nombre_contratista,

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
                    estadoscontrato.nombre_estado
                
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


                    WHERE DATEDIFF(contratos.fechafinal_contrato, '".$fecha_actual."') < ".$dias." and 
                            contratos.fechafinal_contrato >= '".$fecha_actual."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    
    function getContratosMitadEjecucion() {
        
        $fecha_actual = date("Y-m-d");

        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.favisoproceso_contrato,
                    contratos.fpresentacionproceso_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    concat( contratistas.nombres_contratista,' ',contratistas.apellidos_contratista) as nombre_contratista,

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
                    estadoscontrato.nombre_estado
                
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


                    WHERE (    (DATEDIFF(contratos.fechafinal_contrato, contratos.fechainicio_contrato) DIV 2) = DATEDIFF(contratos.fechafinal_contrato, '".$fecha_actual."')    ) and 
                            contratos.fechafinal_contrato >= '".$fecha_actual."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    
    function getProcesosxAdjudicar() {
        
        $params = new Parametros();

        $dias = $params->valor("diasantesdeadjudicarproceso");

        $fecha_actual = date("Y-m-d");

        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.favisoproceso_contrato,
                    contratos.fpresentacionproceso_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    concat( contratistas.nombres_contratista,' ',contratistas.apellidos_contratista) as nombre_contratista,

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
                    estadoscontrato.nombre_estado
                
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


                    WHERE DATEDIFF(contratos.fadjudicacionproceso_contrato, '".$fecha_actual."') < ".$dias." and 
                            contratos.fadjudicacionproceso_contrato >= '".$fecha_actual."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    
    
    function getProcesosxAvisar() {
        
        $params = new Parametros();

        $dias = $params->valor("diasantesdeavisarproceso");

        $fecha_actual = date("Y-m-d");

        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.favisoproceso_contrato,
                    contratos.fpresentacionproceso_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    concat( contratistas.nombres_contratista,' ',contratistas.apellidos_contratista) as nombre_contratista,

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
                    estadoscontrato.nombre_estado
                
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


                    WHERE DATEDIFF(contratos.fevaluacionproceso_contrato, '".$fecha_actual."') < ".$dias." and 
                            contratos.fevaluacionproceso_contrato >= '".$fecha_actual."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  
    
    
    function getProcesosxPresentar() {
        
        $params = new Parametros();

        $dias = $params->valor("diasantesdepresentarproceso");

        $fecha_actual = date("Y-m-d");

        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.favisoproceso_contrato,
                    contratos.fpresentacionproceso_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    concat( contratistas.nombres_contratista,' ',contratistas.apellidos_contratista) as nombre_contratista,

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
                    estadoscontrato.nombre_estado
                
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


                    WHERE DATEDIFF(contratos.fevaluacionproceso_contrato, '".$fecha_actual."') < ".$dias." and 
                            contratos.fevaluacionproceso_contrato >= '".$fecha_actual."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getProcesosxEvaluar() {
        
        $params = new Parametros();

        $dias = $params->valor("diasantesdeadjudicarproceso");

        $fecha_actual = date("Y-m-d");

        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.favisoproceso_contrato,
                    contratos.fpresentacionproceso_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    concat( contratistas.nombres_contratista,' ',contratistas.apellidos_contratista) as nombre_contratista,

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
                    estadoscontrato.nombre_estado
                
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


                    WHERE DATEDIFF(contratos.fevaluacionproceso_contrato, '".$fecha_actual."') < ".$dias." and 
                            contratos.fevaluacionproceso_contrato >= '".$fecha_actual."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  



    
    function getProcesosxCerrar() {
        
        $params = new Parametros();

        $dias = $params->valor("diasantesdecerrarproceso");

        $fecha_actual = date("Y-m-d");

        $query = "SELECT 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.favisoproceso_contrato,
                    contratos.fpresentacionproceso_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    concat( contratistas.nombres_contratista,' ',contratistas.apellidos_contratista) as nombre_contratista,

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
                    estadoscontrato.nombre_estado
                
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


                    WHERE DATEDIFF(contratos.fcierreproceso_contrato, '".$fecha_actual."') < ".$dias." and 
                            contratos.fcierreproceso_contrato >= '".$fecha_actual."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

  
    
}

?>