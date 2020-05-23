<?php

class LoginModel extends ModelBase {  
        
    function validarDocumento($documento_usuario) {
      
        $query = "  SELECT count(usuarios.id_usuario) as valor
                
                    FROM usuarios
        
                    WHERE  documento_usuario = '". $documento_usuario . "'";

        $consulta = $this->consulta($query);
           
        if ($consulta[0]['valor'] > 0) {
            return 1;
        }else{
            return "Su Documento no se encuentra registrado en el Sistema, intente con otro Documento";
        }

    }
    
    function validarPassword($documento_usuario, $password_usuario) {
      
        $query = "  SELECT count(usuarios.id_usuario) as valor
                
                    from usuarios
        
                    WHERE   documento_usuario = '". $documento_usuario . "' AND 
                            usuarios.password_usuario = '" . $password_usuario . "'";

        $consulta = $this->consulta($query);
           
        if ($consulta[0]['valor'] > 0) {
            return 1;
        }else{
            return "La Contraseña ingresada es Incorrecta, por favor, verifique su contraseña y vuelva a intentarlo";
        }

    }
    
    function validarEstado($documento_usuario) {
      
        $query = "  SELECT count(usuarios.id_usuario) as valor
                
                    from usuarios
        
                    WHERE   documento_usuario = '". $documento_usuario . "' AND 
                            usuarios.estado_usuario = '1'";

        $consulta = $this->consulta($query);
           
        if ($consulta[0]['valor'] > 0) {
            return 1;
        }else{
            return "No puede Iniciar Sesión, Debido a que su cuenta se encuentra Inactiva ";
        }

    }

    
    function modificarPassword(
        $id_usuario, 
        $password_usuario
    ) {

        $query = "  UPDATE usuarios SET password_usuario = '". md5 ($password_usuario) ."'

                    WHERE id_usuario = '" . $id_usuario . "'";       

        return $this->modificarRegistros($query);

    }



}

?>