<?php

class LoginControlador extends ControllerBase {

    public function recuperarContrasena() {
        
        $this->model->cargar("UsuariosModel.php", "configuracion");
        $UsuariosModel = new UsuariosModel();
        
        $this->model->cargar("LoginModel.php", "configuracion");
        $LoginModel = new LoginModel();

        $this->model->cargar("ParametrosModel.php", "configuracion");
        $ParametrosModel = new ParametrosModel();

        $parametros = $ParametrosModel->getTodos();

        $datos_usuario = $UsuariosModel->getDatosxDocumento($_POST['documento']);

        $LoginModel->modificarPassword($datos_usuario['id_usuario'], $datos_usuario['password_usuario']);

        $correo = new Correos();

        $mensaje = file_get_contents("plantillas/correos/plantilla1/index.html");

        $mensaje = str_replace("#password#", $datos_usuario['password_usuario'], $mensaje);

        echo $correo->EnviarCorreo($mensaje, "asunto", "icabana@solati.com.co", "Ismael Cabana");

    }    

    
    public function cambiarContrasena() {
        
        $sms = new SMS();
        echo $sms->enviarSMS("3043881447", "Mensaje de prueba");


        
    }    

        
 }