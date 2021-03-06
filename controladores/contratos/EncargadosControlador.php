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
        
        $datos_encargado = $EncargadosModel2->getDatos($_POST["encargado_encargado"]);

        $nombre_encargado = $datos_encargado['nombres_encargado']." ".$datos_encargado['apellidos_encargado'];

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
            
            $numero = $EncargadosModel->existeEncargadoenContrato($array, $_POST["encargado_encargado"]);
    
            if($array != 0 && $numero <= 0){

                $datos_contrato = $ContratosModel->getDatos($array);

                $EncargadosModel->insertar(
                    $_POST["encargado_encargado"],
                    $array
                ); 

                $accion = "Se Asoció a ".$nombre_encargado." cómo Encargado de éste Proceso";

                $TrazabilidadControlador->insertarExterno($array, $accion);   
              
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

        $numero = $EncargadosModel->existeEncargadoenContrato($_POST['id_contrato'], $_POST["encargado_encargado"]);

        if($numero <= 0 ){

            $datos_encargado = $EncargadosModel2->getDatos($_POST["encargado_encargado"]);
        
            $nombre_encargado = $datos_encargado['nombres_encargado']." ".$datos_encargado['apellidos_encargado'];

            $contrato = $ContratosModel->getDatos($_POST['id_contrato']);

            $EncargadosModel->insertar(
                $_POST["encargado_encargado"],
                $_POST['id_contrato']
            );     

            $accion = "Se Asoció a ".$nombre_encargado." cómo Encargado de éste Proceso";

            $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);   
                
            $encargados = $EncargadosModel->getTodosxContrato($_POST['id_contrato']);

            include("vistas/contratos/encargados/lista_encargados.php");

        }else{

            echo "error";

        }
        
    }

    
    
    public function insertar_correo() {
        
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

        $array_correos = array();
        
        $array_correos[] = $param->valor('correoalertas1');
        $array_correos[] = $param->valor('correoalertas2');
        $array_correos[] = $datos_encargado['correo_encargado'];

        $nombre_encargado = $datos_encargado['nombres_encargado']." ".$datos_encargado['apellidos_encargado'];

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
            
            $numero = $EncargadosModel->existeEncargadoenContrato($array, $_POST["encargado_encargado"]);
    
            if($array != 0 && $numero <= 0){

                $datos_contrato = $ContratosModel->getDatos($array);

                $EncargadosModel->insertar(
                    $_POST["encargado_encargado"],
                    $array
                );          

                $accion = "Se ha Asignado cómo Encargado de éste proceso a ".$nombre_encargado;

                $TrazabilidadControlador->insertarExterno($array, $accion);   

    
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
        
                echo $correo->EnviarCorreo($mensaje, "Usted ha sido asignado como Encargado", $array_correos);

                $accion = "Se Asoció a ".$nombre_encargado." cómo Encargado de éste Proceso y 
                se le envio un correo de Notificación";

                $TrazabilidadControlador->insertarExterno($array, $accion);   
              
            }  

        }        
           
          

    }

    
    
    public function insertarEditar_correo() {
        
        $this->model->cargar("EncargadosModel.php", "contratos");
        $EncargadosModel = new EncargadosContratosModel();  
        
        $this->model->cargar("EncargadosModel.php", "actores");
        $EncargadosModel2 = new EncargadosModel();  
                
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    
        
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        $numero = $EncargadosModel->existeEncargadoenContrato($_POST['id_contrato'], $_POST["encargado_encargado"]);

        if($numero <= 0 ){

            $correo = new Correos();
            $param = new Parametros();

            $datos_encargado = $EncargadosModel2->getDatos($_POST["encargado_encargado"]);
        
            $array_correos = array();
            
            $array_correos[] = $param->valor('correoalertas1');
            $array_correos[] = $param->valor('correoalertas2');
            $array_correos[] = $datos_encargado['correo_encargado'];

            $nombre_encargado = $datos_encargado['nombres_encargado']." ".$datos_encargado['apellidos_encargado'];

            $contrato = $ContratosModel->getDatos($_POST['id_contrato']);

            $EncargadosModel->insertar(
                $_POST["encargado_encargado"],
                $_POST['id_contrato']
            );                    

            $accion = "Se Asoció a ".$nombre_encargado." cómo Encargado de éste Proceso y se le envio un correo de Notificación";

            $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);   

            $mensaje = file_get_contents("plantillas/correos/plantilla_encargados/index.html");

            $mensaje = str_replace("#nombre#", $datos_encargado['nombre_encargado'], $mensaje);
            $mensaje = str_replace("#numproceso_contrato#", $contrato['numproceso_contrato'], $mensaje);
            $mensaje = str_replace("#nombre_modalidad#", $contrato['nombre_modalidad'], $mensaje);
            $mensaje = str_replace("#nombre_tipocontrato#", $contrato['nombre_tipocontrato'], $mensaje);
            $mensaje = str_replace("#favisoproceso_contrato#", $contrato['favisoproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fpresentacionproceso_contrato#", $contrato['fpresentacionproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fevaluacionproceso_contrato#", $contrato['fevaluacionproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fadjudicacionproceso_contrato#", $contrato['fadjudicacionproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fcierreproceso_contrato#", $contrato['fcierreproceso_contrato'], $mensaje);
            $mensaje = str_replace("#valproceso_contrato#", "$".number_format($contrato['valproceso_contrato'],0,',','.'), $mensaje);
            $mensaje = str_replace("#objeto_contrato#", $contrato['objeto_contrato'], $mensaje);


            $mensaje = str_replace("#nombre_empresa#",  $param->valor('empresa'), $mensaje);
            $mensaje = str_replace("#direccion#", $param->valor('direccion'), $mensaje);
            $mensaje = str_replace("#telefono#", $param->valor('telefono'), $mensaje);
            $mensaje = str_replace("#correo#", $param->valor('correo'), $mensaje);
            $mensaje = str_replace("#paginaweb#", $param->valor('paginaweb'), $mensaje);
            $mensaje = str_replace("#facebook#", $param->valor('facebook'), $mensaje);
            $mensaje = str_replace("#twitter#", $param->valor('twitter'), $mensaje);
            
            $correo->EnviarCorreo($mensaje, "Usted ha sido asignado como Encargado", $array_correos);
                
            $encargados = $EncargadosModel->getTodosxContrato($_POST['id_contrato']);

            include("vistas/contratos/encargados/lista_encargados.php");

        }else{

            echo "error";

        }
        
    }

    
   

   
    public function eliminar() {
        
        $this->model->cargar("EncargadosModel.php", "contratos");
        $EncargadosModel = new EncargadosContratosModel();

        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   
        
        $datos_encargado = $EncargadosModel->getDatos($_POST["id_encargado"]);

        $EncargadosModel->eliminar($_POST["id_encargado"], $_POST['id_contrato']);
        
        $encargados = $EncargadosModel->getTodosxContrato($_POST['id_contrato']);
        
        $nombre_encargado = $datos_encargado['nombres_encargado']." ".$datos_encargado['apellidos_encargado'];

        $accion = "Se Desasoció a ".$nombre_encargado." cómo Encargado de éste Proceso";

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);  

        include("vistas/contratos/encargados/lista_encargados.php");
             
        
    }

             
 }