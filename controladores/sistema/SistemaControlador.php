<?php

class SistemaControlador extends ControllerBase {

    public function validar() {
                
        $documento = preg_replace("[^A-Za-z0-9]", "", $_POST['documento']);
        $password = preg_replace("[^A-Za-z0-9]", "", $_POST['password']);

        $this->model->cargar("UsuariosModel.php", "configuracion");
        $UsuariosModel = new UsuariosModel();                

        $this->model->cargar("LoginModel.php", "configuracion");
        $LoginModel = new LoginModel();                

        $this->model->cargar("PerfilesModel.php", "configuracion");
        $PerfilesModel = new PerfilesModel();                

        $resp1 = $LoginModel->validarDocumento($documento);

        if($resp1 != 1){

            echo $resp1;
            return;

        }

        $resp2 = $LoginModel->validarPassword($documento, $password);

        if($resp2 != 1){

            echo $resp2;
            return;

        }

        $resp3 = $LoginModel->validarEstado($documento);

        if($resp3 != 1){

            echo $resp3;
            return;

        }

        $params = new Parametros();
        
        $fecha_ultima_alerta = $params->valor("fecha_ultima_alerta");
        
        if($fecha_ultima_alerta != date("Y-m-d")){

            include("controladores/alertas/AlertasControlador.php");
            $AlertasControlador = new AlertasControlador();

            $AlertasControlador->contratosxFinalizar();
            $AlertasControlador->contratosMitadEjecucion();
            $AlertasControlador->procesosxAdjudicar();
            $AlertasControlador->procesosxCerrar();
            $AlertasControlador->procesosxEvaluar();

            $params->set("fecha_ultima_alerta", date("Y-m-d"));

        }

        $datos_usuario = $UsuariosModel->getDatosxDocumento($documento);

        $perfiles = $PerfilesModel->getTodos($datos_usuario['id_usuario']);

        $_SESSION['rol'] = $perfiles[0]['id_rol'];
        $_SESSION['perfiles'] = $perfiles;
        $_SESSION['id_usuario'] = $datos_usuario['id_usuario'];
        $_SESSION['documento_usuario'] = $datos_usuario['documento_usuario'];
        $_SESSION['correo_usuario'] = $datos_usuario['correo_usuario'];

        $Logs = new Logs();
        $Logs->insertarLog("SUCCESS", "Inicio de Sesión correcto.");        
        echo 1;

    }

    public function Inicio(){
		
	    $plantilla = $this->config->get('plantillas').$this->params->valor('TEMPLATE');
        $vistas = $this->config->get('vistas');

        if ( !isset($_SESSION['id_usuario']) ) {
            
            session_destroy();
            $this->plantilla->index();           
                
        } else {
            
            $this->model->cargar("UsuariosModel.php", "configuracion");
            $UsuariosModel = new UsuariosModel();
       
            $data['usuario'] = $UsuariosModel->getDatos($_SESSION['id_usuario']);
            $data['datos_usuario'] = $UsuariosModel->getDatos($_SESSION['id_usuario']); 
            $data['usuarios'] = $UsuariosModel->getTodos();	
            
            $this->plantilla->index($data);
            
        }
    }

    public function session() {
        $params = Parametros::singleton();
        if (isset($_SESSION['id_usuario'])) {
            $id_usuario = $_SESSION['id_usuario'];
            $this->model->cargar("UsuariosModel.php");
            $UsuariosModel = new UsuariosModel();
            $data['usuario'] = $UsuariosModel->getDatos($id_usuario);

            $this->view->vista("../plantillas/".$params->valor('TEMPLATE')."/session.php", $data);
        }
    }

    public function cargaInicial() {
	$params = Parametros::singleton();
        if (isset($_SESSION['id_usuario'])) {
            $this->view->vista( "inicio/cargaInicial.php", array(), $_POST['modulo']);
        }
    }
 
    public function cerrar(){

        $Logs = new Logs();
        $Logs->insertarLog("SUCCESS", "Se cerró la Sesión de forma correcta.");        
        
    	$_SESSION = array();
    	session_unset();
        session_destroy();   
		
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); 
        echo "http://".$host.$uri."/";        
        
    }

    
    function EnviarCorreo($mensaje, $asunto, $correo1='', $nombre1=''){
                         
        $mails = new Correos();
        
        $mails->AddBCC( $correo1, $nombre1 );                
                        
        $mails->Subject = $asunto;          
        $mails->Body = $mensaje;              
                 
        $enviado = $mails->Send();         
            
        if($enviado){
            return   "EL MENSAJE FUE ENVIADO ".$mails->ErrorInfo;                     
        }else{
            return "NO FUE POSIBLE ENVIAR EL MENSAJE ".$mails->ErrorInfo;             
        }  
        
    }
    
}

?>