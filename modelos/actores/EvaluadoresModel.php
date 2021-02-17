<?php

class EvaluadoresModel extends ModelBase {  

    function getTodos() {        

        $query = "

            SELECT 	
                evaluadores.id_evaluador, 

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


                evaluadores.genero_evaluador,
                evaluadores.estadocivil_evaluador,

                evaluadores.profesion_evaluador,
            
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

            FROM evaluadores
                    
                left join tipospersona on evaluadores.tipo_evaluador = tipospersona.id_tipopersona
                left join tiposdocumento on evaluadores.tipodocumento_evaluador = tiposdocumento.id_tipodocumento
                left join paises on evaluadores.pais_evaluador = paises.id_pais       
                left join departamentos on evaluadores.departamento_evaluador = departamentos.id_departamento
                left join municipios on evaluadores.municipio_evaluador = municipios.id_municipio
                left join generos on evaluadores.genero_evaluador = generos.id_genero
                left join estadoscivil on evaluadores.estadocivil_evaluador = estadoscivil.id_estadocivil
                left join profesiones on evaluadores.profesion_evaluador = profesiones.id_profesion
                left join estados on evaluadores.estado_evaluador = estados.id_estado
                
                ORDER BY evaluadores.nombres_evaluador";

        $consulta = $this->consulta($query);
        return $consulta;                    

    }  
  

    function getLIKE($texto) {       

        $query = "

        select 	
                evaluadores.id_evaluador, 

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
                

                evaluadores.genero_evaluador,
                evaluadores.estadocivil_evaluador,
                evaluadores.profesion_evaluador,
            
                tiposdocumento.codigo_tipodocumento,
                tiposdocumento.nombre_tipodocumento,

                paises.nombre_pais,

                generos.nombre_genero,

                estadoscivil.nombre_estadocivil,

                profesiones.nombre_profesion,

                tipospersona.nombre_tipopersona,

                estados.nombre_estado

            from evaluadores
                    
                left join tipospersona on evaluadores.tipo_evaluador = tipospersona.id_tipopersona
                left join tiposdocumento on evaluadores.tipodocumento_evaluador = tiposdocumento.id_tipodocumento
                left join paises on evaluadores.pais_evaluador = paises.id_pais       
                left join departamentos on evaluadores.departamento_evaluador = departamentos.id_departamento
                left join municipios on evaluadores.municipio_evaluador = municipios.id_municipio
                left join generos on evaluadores.genero_evaluador = generos.id_genero
                left join estadoscivil on evaluadores.estadocivil_evaluador = estadoscivil.id_estadocivil
                left join profesiones on evaluadores.profesion_evaluador = profesiones.id_profesion
                left join estados on evaluadores.estado_evaluador = estados.id_estado

                    where evaluadores.NOMBRE_evaluador LIKE '%".$texto."%'" ;        

        $consulta = $this->consulta($query);
        return $consulta;                     

    }  
  

    function getDatos($id_evaluador) {       

     $query = "
                select 	
                evaluadores.id_evaluador, 

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
                

                evaluadores.genero_evaluador,
                evaluadores.estadocivil_evaluador,

                evaluadores.profesion_evaluador,
            
                tiposdocumento.codigo_tipodocumento,
                tiposdocumento.nombre_tipodocumento,

                paises.nombre_pais,

                generos.nombre_genero,

                estadoscivil.nombre_estadocivil,

                profesiones.nombre_profesion,

                tipospersona.nombre_tipopersona,

                estados.nombre_estado

            from evaluadores
                    
                left join tipospersona on evaluadores.tipo_evaluador = tipospersona.id_tipopersona
                left join tiposdocumento on evaluadores.tipodocumento_evaluador = tiposdocumento.id_tipodocumento
                left join paises on evaluadores.pais_evaluador = paises.id_pais       
                left join departamentos on evaluadores.departamento_evaluador = departamentos.id_departamento
                left join municipios on evaluadores.municipio_evaluador = municipios.id_municipio
                left join generos on evaluadores.genero_evaluador = generos.id_genero
                left join estadoscivil on evaluadores.estadocivil_evaluador = estadoscivil.id_estadocivil
                left join profesiones on evaluadores.profesion_evaluador = profesiones.id_profesion
                left join estados on evaluadores.estado_evaluador = estados.id_estado

            where evaluadores.id_evaluador='".$id_evaluador."'";        

        $consulta = $this->consulta($query);
        return $consulta[0];            

    }   

    
    function getDatosxDocumento($documento_evaluador) {       

        $query = "
                   select 	
                   evaluadores.id_evaluador, 
   
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
                   
   
                   evaluadores.genero_evaluador,
                   evaluadores.estadocivil_evaluador,
   
                   evaluadores.profesion_evaluador,
               
                   tiposdocumento.codigo_tipodocumento,
                   tiposdocumento.nombre_tipodocumento,
   
                   paises.nombre_pais,
   
                   generos.nombre_genero,
   
                   estadoscivil.nombre_estadocivil,
   
                   profesiones.nombre_profesion,
   
                   tipospersona.nombre_tipopersona,
   
                   estados.nombre_estado
   
               from evaluadores
                       
                   left join tipospersona on evaluadores.tipo_evaluador = tipospersona.id_tipopersona
                   left join tiposdocumento on evaluadores.tipodocumento_evaluador = tiposdocumento.id_tipodocumento
                   left join paises on evaluadores.pais_evaluador = paises.id_pais       
                   left join departamentos on evaluadores.departamento_evaluador = departamentos.id_departamento
                   left join municipios on evaluadores.municipio_evaluador = municipios.id_municipio
                   left join generos on evaluadores.genero_evaluador = generos.id_genero
                   left join estadoscivil on evaluadores.estadocivil_evaluador = estadoscivil.id_estadocivil
                   left join profesiones on evaluadores.profesion_evaluador = profesiones.id_profesion
                   left join estados on evaluadores.estado_evaluador = estados.id_estado
   
               where evaluadores.documento_evaluador='".$documento_evaluador."'";        
   
           $consulta = $this->consulta($query);
           return $consulta[0];            
   
       }   

    
    function getDatosPorCampo($campo, $valor) {       

        $query = "
        select 	
        evaluadores.id_evaluador, 

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
        

        evaluadores.genero_evaluador,
        evaluadores.estadocivil_evaluador,

        evaluadores.profesion_evaluador,
    
        tiposdocumento.codigo_tipodocumento,
        tiposdocumento.nombre_tipodocumento,

        paises.nombre_pais,

        generos.nombre_genero,

        estadoscivil.nombre_estadocivil,

        profesiones.nombre_profesion,

        tipospersona.nombre_tipopersona,

        estados.nombre_estado

    from evaluadores
            
        left join tipospersona on evaluadores.tipo_evaluador = tipospersona.id_tipopersona
        left join tiposdocumento on evaluadores.tipodocumento_evaluador = tiposdocumento.id_tipodocumento
        left join paises on evaluadores.pais_evaluador = paises.id_pais       
        left join departamentos on evaluadores.departamento_evaluador = departamentos.id_departamento
        left join municipios on evaluadores.municipio_evaluador = municipios.id_municipio
        left join generos on evaluadores.genero_evaluador = generos.id_genero
        left join estadoscivil on evaluadores.estadocivil_evaluador = estadoscivil.id_estadocivil
        left join profesiones on evaluadores.profesion_evaluador = profesiones.id_profesion
        left join estados on evaluadores.estado_evaluador = estados.id_estado
                
               where evaluadores.".$campo."='".$valor."'";        
   
           $consulta = $this->consulta($query);
           return $consulta;            
   
       }   
   
   

    function insertar(
        $tipo_evaluador,    
        $tipodocumento_evaluador,
        $documento_evaluador,
        $nombres_evaluador,
        $apellidos_evaluador,

        $dirresidencia_evaluador,
        $dircorrespondencia_evaluador,
        $telefono_evaluador,
        $celular_evaluador,
        $correo_evaluador,
        $paginaweb_evaluador,

        $pais_evaluador,
        $departamento_evaluador,
        $municipio_evaluador,


        $genero_evaluador,
        $estadocivil_evaluador,

        $profesion_evaluador
    ) {
               
    $query = "
        INSERT INTO evaluadores (

            tipo_evaluador,
            tipodocumento_evaluador,
            documento_evaluador,
            nombres_evaluador,
            apellidos_evaluador,

            dirresidencia_evaluador,
            dircorrespondencia_evaluador,                            
            telefono_evaluador,
            celular_evaluador,
            correo_evaluador,
            paginaweb_evaluador,

            pais_evaluador,
            departamento_evaluador,
            municipio_evaluador,


            genero_evaluador,
            estadocivil_evaluador,

            profesion_evaluador
        )

        VALUES(
            '". $tipo_evaluador."',
            '". $tipodocumento_evaluador."', 
            '". $documento_evaluador."',
            '". strtoupper(utf8_decode($nombres_evaluador))."', 
            '". strtoupper(utf8_decode($apellidos_evaluador))."', 

            '". utf8_decode($dirresidencia_evaluador)."', 
            '". utf8_decode($dircorrespondencia_evaluador)."', 
            '". $telefono_evaluador."', 
            '". $celular_evaluador."',
            '". $correo_evaluador."', 
            '". $paginaweb_evaluador."',

            '". $pais_evaluador."', 
            '". $departamento_evaluador."', 
            '". $municipio_evaluador."', 

            '". $genero_evaluador."',
            '". $estadocivil_evaluador."',

            '". $profesion_evaluador."'

        );";


        return $this->crear_ultimo_id($query);


    }


    function editar(

        $id_evaluador,

        $tipo_evaluador,    
        $tipodocumento_evaluador,
        $documento_evaluador,
        $nombres_evaluador,
        $apellidos_evaluador,

        $dirresidencia_evaluador,
        $dircorrespondencia_evaluador,
        $telefono_evaluador,
        $celular_evaluador,
        $correo_evaluador,
        $paginaweb_evaluador,

        $pais_evaluador,
        $departamento_evaluador,
        $municipio_evaluador,

        
        $genero_evaluador,
        $estadocivil_evaluador,

        $profesion_evaluador

    ) {

    $query = "  
        UPDATE evaluadores  
               
        SET 
        
        tipo_evaluador = '".$tipo_evaluador."',
        tipodocumento_evaluador = '".$tipodocumento_evaluador."', 
        documento_evaluador = '".$documento_evaluador."', 
        nombres_evaluador = '".strtoupper(utf8_decode($nombres_evaluador))."',
        apellidos_evaluador = '".strtoupper(utf8_decode($apellidos_evaluador))."', 

        dirresidencia_evaluador = '".utf8_decode($dirresidencia_evaluador)."', 
        dircorrespondencia_evaluador = '".utf8_decode($dircorrespondencia_evaluador)."', 
        telefono_evaluador = '".$telefono_evaluador."', 
        celular_evaluador = '".$celular_evaluador."', 
        correo_evaluador = '".$correo_evaluador."', 
        paginaweb_evaluador = '".$paginaweb_evaluador."',

        pais_evaluador = '".$pais_evaluador."', 
        departamento_evaluador = '".$departamento_evaluador."', 
        municipio_evaluador = '".$municipio_evaluador."', 


        genero_evaluador = '".$genero_evaluador."', 
        estadocivil_evaluador = '".$estadocivil_evaluador."', 
        
        profesion_evaluador = '".$profesion_evaluador."'

        WHERE id_evaluador = '" . $id_evaluador . "'";

       return $this->modificarRegistros($query);       
      
    }


    function eliminar($id_evaluador) {

        $query = "DELETE FROM evaluadores WHERE id_evaluador = '". $id_evaluador ."'";

        $this->modificarRegistros($query);

    }

}







?>