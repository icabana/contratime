<?php

class EncargadosControlador extends ControllerBase {

    
    public function insertar() {
        
        $this->model->cargar("EncargadosModel.php", "contratos");
        $EncargadosModel = new EncargadosContratosModel();  
        
        $this->model->cargar("EncargadosModel.php", "actores");
        $EncargadosModel2 = new EncargadosModel();  
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    

        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();      
        
        $correo = new Correos();
        $param = new Parametros();

        $datos_encargado = $EncargadosModel2->getDatos($_POST["encargado_encargado"]);

        $nombre_encargado = $datos_encargado['nombres_encargado']." ".$datos_encargado['apellidos_encargado'];

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
            
            $numero = $EncargadosModel->existeEncargadoenContrato($array[0], $_POST["encargado_encargado"]);
    
            if($array[0] != 0 && $numero <= 0){

                $datos_contrato = $ContratosModel->getDatos($array[0]);

                $EncargadosModel->insertar(
                    $_POST["encargado_encargado"],
                    $array[0],
                );                    


                $accion = "Se ha Asignado cómo encargado de éste contrato a ".$nombre_encargado;

                $TrazabilidadControlador->insertarExterno($array[0], $accion);   

    
                $mensaje = file_get_contents("plantillas/correos/plantilla2/index.html");
        
                $mensaje = str_replace("#nombre#", $datos_encargado['nombre_encargado'], $mensaje);
                $mensaje = str_replace("#numproceso#", $datos_contrato['numproceso_contrato'], $mensaje);
                $mensaje = str_replace("#modalidad#", $datos_contrato['nombre_modalidad'], $mensaje);
                $mensaje = str_replace("#tipocontrato#", $datos_contrato['nombre_tipocontrato'], $mensaje);
                $mensaje = str_replace("#fecha_adjudicacion#", $datos_contrato['fadjudicacionproceso_contrato'], $mensaje);
                $mensaje = str_replace("#fecha_cierre#", $datos_contrato['fcierreproceso_contrato'], $mensaje);
                $mensaje = str_replace("#valor#", "$".number_format($datos_contrato['valproceso_contrato'],0,',','.'), $mensaje);

                $mensaje = str_replace("#nombre_empresa#",  $param->valor('empresa'), $mensaje);
                $mensaje = str_replace("#direccion#", $param->valor('direccion'), $mensaje);
                $mensaje = str_replace("#telefono#", $param->valor('telefono'), $mensaje);
                $mensaje = str_replace("#correo#", $param->valor('correo'), $mensaje);
                $mensaje = str_replace("#paginaweb#", $param->valor('paginaweb'), $mensaje);
                $mensaje = str_replace("#facebook#", $param->valor('facebook'), $mensaje);
                $mensaje = str_replace("#twitter#", $param->valor('twitter'), $mensaje);
        
               // echo $correo->EnviarCorreo($mensaje, "Usted ha sido asignado como Encargado", array($datos_encargado['correo_encargado']));

                $accion = "Se ha enviado un correo de Notificación a ".$nombre_encargado." Informando que ha sido Asignado cómo encargado de éste contrato";

                $TrazabilidadControlador->insertarExterno($array[0], $accion);   
              
            }  

        }        
           
          

    }

    
    
    public function insertarEditar() {
        
        $this->model->cargar("EncargadosModel.php", "contratos");
        $EncargadosModel = new EncargadosContratosModel();  
        
        $this->model->cargar("EncargadosModel.php", "actores");
        $EncargadosModel2 = new EncargadosModel();  
                
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    
        
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        $correo = new Correos();
        $param = new Parametros();

        $datos_encargado = $EncargadosModel2->getDatos($_POST["encargado_encargado"]);
    
        $nombre_encargado = $datos_encargado['nombres_encargado']." ".$datos_encargado['apellidos_encargado'];

        $datos_contrato = $ContratosModel->getDatos($_POST['id_contrato']);

        $EncargadosModel->insertar(
            $_POST["encargado_encargado"],
            $_POST['id_contrato']
        );                    

        $accion = "Se ha Asignado cómo encargado de éste contrato a ".$nombre_encargado;

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);   

        $accion = "Se ha enviado un correo de Notificación a ".$nombre_encargado." Informando que ha sido Asignado cómo encargado de éste contrato";

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);   

        $mensaje = file_get_contents("plantillas/correos/plantilla2/index.html");

        $mensaje = str_replace("#nombre#", $datos_encargado['nombre_encargado'], $mensaje);
        $mensaje = str_replace("#numproceso#", $datos_contrato['numproceso_contrato'], $mensaje);
        $mensaje = str_replace("#modalidad#", $datos_contrato['nombre_modalidad'], $mensaje);
        $mensaje = str_replace("#tipocontrato#", $datos_contrato['nombre_tipocontrato'], $mensaje);
        $mensaje = str_replace("#fecha_adjudicacion#", $datos_contrato['fadjudicacionproceso_contrato'], $mensaje);
        $mensaje = str_replace("#fecha_cierre#", $datos_contrato['fcierreproceso_contrato'], $mensaje);
        $mensaje = str_replace("#valor#", "$".number_format($datos_contrato['valproceso_contrato'],0,',','.'), $mensaje);

        $mensaje = str_replace("#nombre_empresa#",  $param->valor('empresa'), $mensaje);
        $mensaje = str_replace("#direccion#", $param->valor('direccion'), $mensaje);
        $mensaje = str_replace("#telefono#", $param->valor('telefono'), $mensaje);
        $mensaje = str_replace("#correo#", $param->valor('correo'), $mensaje);
        $mensaje = str_replace("#paginaweb#", $param->valor('paginaweb'), $mensaje);
        $mensaje = str_replace("#facebook#", $param->valor('facebook'), $mensaje);
        $mensaje = str_replace("#twitter#", $param->valor('twitter'), $mensaje);
        
        //$correo->EnviarCorreo($mensaje, "asunto", array($datos_encargado['correo_encargado']));
            
        $encargados = $EncargadosModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/encargados/lista_encargados.php");
        
    }

    
   
    public function eliminar() {
        
        $this->model->cargar("EncargadosModel.php", "contratos");
        $EncargadosModel = new EncargadosContratosModel();

        $EncargadosModel->eliminar($_POST["id_encargado"], $_POST['id_contrato']);
        
        $encargados = $EncargadosModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/encargados/lista_encargados.php");
             
        
    }

             
 }