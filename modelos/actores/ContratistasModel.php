<?php

class ContratistasModel extends ModelBase {  

    function getTodos() {        

        $query = "

            select 	
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

                estados.nombre_estado

            from contratistas
                    
                left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                left join paises on contratistas.pais_contratista = paises.id_pais       
                left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                left join generos on contratistas.genero_contratista = generos.id_genero
                left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                left join estados on contratistas.estado_contratista = estados.id_estado";

        $consulta = $this->consulta($query);
        return $consulta;                    

    }  
  

    function getLIKE($texto) {       

        $query = "

        select 	
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

                paises.nombre_pais,

                generos.nombre_genero,

                estadoscivil.nombre_estadocivil,

                profesiones.nombre_profesion,

                tipospersona.nombre_tipopersona,

                estados.nombre_estado

            from contratistas
                    
                left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                left join paises on contratistas.pais_contratista = paises.id_pais       
                left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                left join generos on contratistas.genero_contratista = generos.id_genero
                left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                left join estados on contratistas.estado_contratista = estados.id_estado

                    where contratistas.NOMBRE_contratista LIKE '%".$texto."%'" ;        

        $consulta = $this->consulta($query);
        return $consulta;                     

    }  
  

    function getDatos($id_contratista) {       

     $query = "
     select 	
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

     paises.nombre_pais,

     generos.nombre_genero,

     estadoscivil.nombre_estadocivil,

     profesiones.nombre_profesion,

     tipospersona.nombre_tipopersona,

     estados.nombre_estado

 from contratistas
         
     left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
     left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
     left join paises on contratistas.pais_contratista = paises.id_pais       
     left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
     left join municipios on contratistas.municipio_contratista = municipios.id_municipio
     left join generos on contratistas.genero_contratista = generos.id_genero
     left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
     left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
     left join estados on contratistas.estado_contratista = estados.id_estado

            where contratistas.id_contratista='".$id_contratista."'";        

        $consulta = $this->consulta($query);
        return $consulta[0];            

    }   

    
    function getDatosPorCampo($campo, $valor) {       

        $query = "
        select 	
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

        paises.nombre_pais,

        generos.nombre_genero,

        estadoscivil.nombre_estadocivil,

        profesiones.nombre_profesion,

        tipospersona.nombre_tipopersona,

        estados.nombre_estado

    from contratistas
            
        left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
        left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
        left join paises on contratistas.pais_contratista = paises.id_pais       
        left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
        left join municipios on contratistas.municipio_contratista = municipios.id_municipio
        left join generos on contratistas.genero_contratista = generos.id_genero
        left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
        left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
        left join estados on contratistas.estado_contratista = estados.id_estado
                
               where contratistas.".$campo."='".$valor."'";        
   
           $consulta = $this->consulta($query);
           return $consulta;            
   
       }   
   
   

    function insertar(
        $tipo_contratista,    
        $tipodocumento_contratista,
        $documento_contratista,
        $nombres_contratista,
        $apellidos_contratista,

        $dirresidencia_contratista,
        $dircorrespondencia_contratista,
        $telefono_contratista,
        $celular_contratista,
        $correo_contratista,
        $paginaweb_contratista,

        $pais_contratista,
        $departamento_contratista,
        $municipio_contratista,

        $fechanacimiento_contratista,

        $genero_contratista,
        $estadocivil_contratista,
        $hijos_contratista,        

        $profesion_contratista
    ) {
               
    $query = "
        INSERT INTO contratistas (

            tipo_contratista,
            tipodocumento_contratista,
            documento_contratista,
            nombres_contratista,
            apellidos_contratista,

            dirresidencia_contratista,
            dircorrespondencia_contratista,                            
            telefono_contratista,
            celular_contratista,
            correo_contratista,
            paginaweb_contratista,

            pais_contratista,
            departamento_contratista,
            municipio_contratista,

            fechanacimiento_contratista,

            genero_contratista,
            estadocivil_contratista,
            hijos_contratista,

            profesion_contratista
        )

        VALUES(
            '". $tipo_contratista."',
            '". $tipodocumento_contratista."', 
            '". $documento_contratista."',
            '". $nombres_contratista."', 
            '". $apellidos_contratista."', 

            '". $dirresidencia_contratista."', 
            '". $dircorrespondencia_contratista."', 
            '". $telefono_contratista."', 
            '". $celular_contratista."',
            '". $correo_contratista."', 
            '". $paginaweb_contratista."',

            '". $pais_contratista."', 
            '". $departamento_contratista."', 
            '". $municipio_contratista."', 

            '". $fechanacimiento_contratista."',

            '". $genero_contratista."',
            '". $estadocivil_contratista."',
            '". $hijos_contratista."',

            '". $profesion_contratista."'

        );";


        return $this->crear_ultimo_id($query);


    }


    function editar(

        $id_contratista,

        $tipo_contratista,    
        $tipodocumento_contratista,
        $documento_contratista,
        $nombres_contratista,
        $apellidos_contratista,

        $dirresidencia_contratista,
        $dircorrespondencia_contratista,
        $telefono_contratista,
        $celular_contratista,
        $correo_contratista,
        $paginaweb_contratista,

        $pais_contratista,
        $departamento_contratista,
        $municipio_contratista,

        $fechanacimiento_contratista,
        
        $genero_contratista,
        $estadocivil_contratista,
        $hijos_contratista,

        $profesion_contratista

    ) {

    $query = "  
        UPDATE contratistas  
               
        SET 
        
        tipo_contratista = '".$tipo_contratista."',
        tipodocumento_contratista = '".$tipodocumento_contratista."', 
        documento_contratista = '".$documento_contratista."', 
        nombres_contratista = '".$nombres_contratista."',
        apellidos_contratista = '".$apellidos_contratista."', 

        dirresidencia_contratista = '".$dirresidencia_contratista."', 
        dircorrespondencia_contratista = '".$dircorrespondencia_contratista."', 
        telefono_contratista = '".$telefono_contratista."', 
        celular_contratista = '".$celular_contratista."', 
        correo_contratista = '".$correo_contratista."', 
        paginaweb_contratista = '".$paginaweb_contratista."',

        pais_contratista = '".$pais_contratista."', 
        departamento_contratista = '".$departamento_contratista."', 
        municipio_contratista = '".$municipio_contratista."', 

        fechanacimiento_contratista = '".$fechanacimiento_contratista."', 

        genero_contratista = '".$genero_contratista."', 
        estadocivil_contratista = '".$estadocivil_contratista."', 
        hijos_contratista = '".$hijos_contratista."', 
        
        profesion_contratista = '".$profesion_contratista."'

        WHERE id_contratista = '" . $id_contratista . "'";

       return $this->modificarRegistros($query);       
      
    }


    function eliminar($id_contratista) {

        $query = "DELETE FROM contratistas WHERE id_contratista = '". $id_contratista ."'";

        $this->modificarRegistros($query);

    }

}







?>