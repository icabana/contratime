<?php

class SupervisoresModel extends ModelBase {  

    function getTodos() {        

        $query = "

            select 	
                supervisores.id_supervisor, 

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

                estados.nombre_estado

            from supervisores
                    
                left join tipospersona on supervisores.tipo_supervisor = tipospersona.id_tipopersona
                left join tiposdocumento on supervisores.tipodocumento_supervisor = tiposdocumento.id_tipodocumento
                left join paises on supervisores.pais_supervisor = paises.id_pais       
                left join departamentos on supervisores.departamento_supervisor = departamentos.id_departamento
                left join municipios on supervisores.municipio_supervisor = municipios.id_municipio
                left join generos on supervisores.genero_supervisor = generos.id_genero
                left join estadoscivil on supervisores.estadocivil_supervisor = estadoscivil.id_estadocivil
                left join profesiones on supervisores.profesion_supervisor = profesiones.id_profesion
                left join estados on supervisores.estado_supervisor = estados.id_estado";

        $consulta = $this->consulta($query);
        return $consulta;                    

    }  
  

    function getLIKE($texto) {       

        $query = "

        select 	
                supervisores.id_supervisor, 

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
            
                tiposdocumento.codigo_tipodocumento,
                tiposdocumento.nombre_tipodocumento,

                paises.nombre_pais,

                generos.nombre_genero,

                estadoscivil.nombre_estadocivil,

                profesiones.nombre_profesion,

                tipospersona.nombre_tipopersona,

                estados.nombre_estado

            from supervisores
                    
                left join tipospersona on supervisores.tipo_supervisor = tipospersona.id_tipopersona
                left join tiposdocumento on supervisores.tipodocumento_supervisor = tiposdocumento.id_tipodocumento
                left join paises on supervisores.pais_supervisor = paises.id_pais       
                left join departamentos on supervisores.departamento_supervisor = departamentos.id_departamento
                left join municipios on supervisores.municipio_supervisor = municipios.id_municipio
                left join generos on supervisores.genero_supervisor = generos.id_genero
                left join estadoscivil on supervisores.estadocivil_supervisor = estadoscivil.id_estadocivil
                left join profesiones on supervisores.profesion_supervisor = profesiones.id_profesion
                left join estados on supervisores.estado_supervisor = estados.id_estado

                    where supervisores.NOMBRE_supervisor LIKE '%".$texto."%'" ;        

        $consulta = $this->consulta($query);
        return $consulta;                     

    }  
  

    function getDatos($id_supervisor) {       

     $query = "
                select 	
                supervisores.id_supervisor, 

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
            
                tiposdocumento.codigo_tipodocumento,
                tiposdocumento.nombre_tipodocumento,

                paises.nombre_pais,

                generos.nombre_genero,

                estadoscivil.nombre_estadocivil,

                profesiones.nombre_profesion,

                tipospersona.nombre_tipopersona,

                estados.nombre_estado

            from supervisores
                    
                left join tipospersona on supervisores.tipo_supervisor = tipospersona.id_tipopersona
                left join tiposdocumento on supervisores.tipodocumento_supervisor = tiposdocumento.id_tipodocumento
                left join paises on supervisores.pais_supervisor = paises.id_pais       
                left join departamentos on supervisores.departamento_supervisor = departamentos.id_departamento
                left join municipios on supervisores.municipio_supervisor = municipios.id_municipio
                left join generos on supervisores.genero_supervisor = generos.id_genero
                left join estadoscivil on supervisores.estadocivil_supervisor = estadoscivil.id_estadocivil
                left join profesiones on supervisores.profesion_supervisor = profesiones.id_profesion
                left join estados on supervisores.estado_supervisor = estados.id_estado

            where supervisores.id_supervisor='".$id_supervisor."'";        

        $consulta = $this->consulta($query);
        return $consulta[0];            

    }   

    
    function getDatosPorCampo($campo, $valor) {       

        $query = "
        select 	
        supervisores.id_supervisor, 

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
    
        tiposdocumento.codigo_tipodocumento,
        tiposdocumento.nombre_tipodocumento,

        paises.nombre_pais,

        generos.nombre_genero,

        estadoscivil.nombre_estadocivil,

        profesiones.nombre_profesion,

        tipospersona.nombre_tipopersona,

        estados.nombre_estado

    from supervisores
            
        left join tipospersona on supervisores.tipo_supervisor = tipospersona.id_tipopersona
        left join tiposdocumento on supervisores.tipodocumento_supervisor = tiposdocumento.id_tipodocumento
        left join paises on supervisores.pais_supervisor = paises.id_pais       
        left join departamentos on supervisores.departamento_supervisor = departamentos.id_departamento
        left join municipios on supervisores.municipio_supervisor = municipios.id_municipio
        left join generos on supervisores.genero_supervisor = generos.id_genero
        left join estadoscivil on supervisores.estadocivil_supervisor = estadoscivil.id_estadocivil
        left join profesiones on supervisores.profesion_supervisor = profesiones.id_profesion
        left join estados on supervisores.estado_supervisor = estados.id_estado
                
               where supervisores.".$campo."='".$valor."'";        
   
           $consulta = $this->consulta($query);
           return $consulta;            
   
       }   
   
   

    function insertar(
        $tipo_supervisor,    
        $tipodocumento_supervisor,
        $documento_supervisor,
        $nombres_supervisor,
        $apellidos_supervisor,

        $dirresidencia_supervisor,
        $dircorrespondencia_supervisor,
        $telefono_supervisor,
        $celular_supervisor,
        $correo_supervisor,
        $paginaweb_supervisor,

        $pais_supervisor,
        $departamento_supervisor,
        $municipio_supervisor,

        $fechanacimiento_supervisor,

        $genero_supervisor,
        $estadocivil_supervisor,
        $hijos_supervisor,        

        $profesion_supervisor
    ) {
               
    $query = "
        INSERT INTO supervisores (

            tipo_supervisor,
            tipodocumento_supervisor,
            documento_supervisor,
            nombres_supervisor,
            apellidos_supervisor,

            dirresidencia_supervisor,
            dircorrespondencia_supervisor,                            
            telefono_supervisor,
            celular_supervisor,
            correo_supervisor,
            paginaweb_supervisor,

            pais_supervisor,
            departamento_supervisor,
            municipio_supervisor,

            fechanacimiento_supervisor,

            genero_supervisor,
            estadocivil_supervisor,
            hijos_supervisor,

            profesion_supervisor
        )

        VALUES(
            '". $tipo_supervisor."',
            '". $tipodocumento_supervisor."', 
            '". $documento_supervisor."',
            '". utf8_decode($nombres_supervisor)."', 
            '". utf8_decode($apellidos_supervisor)."', 

            '". utf8_decode($dirresidencia_supervisor)."', 
            '". utf8_decode($dircorrespondencia_supervisor)."', 
            '". $telefono_supervisor."', 
            '". $celular_supervisor."',
            '". $correo_supervisor."', 
            '". $paginaweb_supervisor."',

            '". $pais_supervisor."', 
            '". $departamento_supervisor."', 
            '". $municipio_supervisor."', 

            '". $fechanacimiento_supervisor."',

            '". $genero_supervisor."',
            '". $estadocivil_supervisor."',
            '". $hijos_supervisor."',

            '". $profesion_supervisor."'

        );";


        return $this->crear_ultimo_id($query);


    }


    function editar(

        $id_supervisor,

        $tipo_supervisor,    
        $tipodocumento_supervisor,
        $documento_supervisor,
        $nombres_supervisor,
        $apellidos_supervisor,

        $dirresidencia_supervisor,
        $dircorrespondencia_supervisor,
        $telefono_supervisor,
        $celular_supervisor,
        $correo_supervisor,
        $paginaweb_supervisor,

        $pais_supervisor,
        $departamento_supervisor,
        $municipio_supervisor,

        $fechanacimiento_supervisor,
        
        $genero_supervisor,
        $estadocivil_supervisor,
        $hijos_supervisor,

        $profesion_supervisor

    ) {

    $query = "  
        UPDATE supervisores  
               
        SET 
        
        tipo_supervisor = '".$tipo_supervisor."',
        tipodocumento_supervisor = '".$tipodocumento_supervisor."', 
        documento_supervisor = '".$documento_supervisor."', 
        nombres_supervisor = '".utf8_decode($nombres_supervisor)."',
        apellidos_supervisor = '".utf8_decode($apellidos_supervisor)."', 

        dirresidencia_supervisor = '".utf8_decode($dirresidencia_supervisor)."', 
        dircorrespondencia_supervisor = '".utf8_decode($dircorrespondencia_supervisor)."', 
        telefono_supervisor = '".$telefono_supervisor."', 
        celular_supervisor = '".$celular_supervisor."', 
        correo_supervisor = '".$correo_supervisor."', 
        paginaweb_supervisor = '".$paginaweb_supervisor."',

        pais_supervisor = '".$pais_supervisor."', 
        departamento_supervisor = '".$departamento_supervisor."', 
        municipio_supervisor = '".$municipio_supervisor."', 

        fechanacimiento_supervisor = '".$fechanacimiento_supervisor."', 

        genero_supervisor = '".$genero_supervisor."', 
        estadocivil_supervisor = '".$estadocivil_supervisor."', 
        hijos_supervisor = '".$hijos_supervisor."', 
        
        profesion_supervisor = '".$profesion_supervisor."'

        WHERE id_supervisor = '" . $id_supervisor . "'";

       return $this->modificarRegistros($query);       
      
    }


    function eliminar($id_supervisor) {

        $query = "DELETE FROM supervisores WHERE id_supervisor = '". $id_supervisor ."'";

        $this->modificarRegistros($query);

    }

}







?>