<?php

class EvaluadoresControlador extends ControllerBase {

    
    public function insertar() {
        
        $this->model->cargar("EvaluadoresModel.php", "contratos");
        $EvaluadoresModel = new EvaluadoresContratosModel();  
        
        $this->model->cargar("EvaluadoresModel.php", "actores");
        $EvaluadoresModel2 = new EvaluadoresModel();  
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    

        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();      
        
        $datos_evaluador = $EvaluadoresModel2->getDatos($_POST["evaluador_evaluador"]);

        $nombre_evaluador = $datos_evaluador['nombres_evaluador']." ".$datos_evaluador['apellidos_evaluador'];

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
            
            $numero = $EvaluadoresModel->existeEvaluadorenContrato($array, $_POST["evaluador_evaluador"]);
    
            if($array != 0 && $numero <= 0){

                $datos_contrato = $ContratosModel->getDatos($array);

                $EvaluadoresModel->insertar(
                    $_POST["evaluador_evaluador"],
                    $array
                ); 

                $accion = "Se Asoció a ".$nombre_evaluador." cómo Evaluador de éste Proceso";

                $TrazabilidadControlador->insertarExterno($array, $accion);   
              
            }  

        }                  

    }

    
    
    public function insertarEditar() {
        
        $this->model->cargar("EvaluadoresModel.php", "contratos");
        $EvaluadoresModel = new EvaluadoresContratosModel();  
        
        $this->model->cargar("EvaluadoresModel.php", "actores");
        $EvaluadoresModel2 = new EvaluadoresModel();  
                
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    
        
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        $numero = $EvaluadoresModel->existeEvaluadorenContrato($_POST['id_contrato'], $_POST["evaluador_evaluador"]);

        if($numero <= 0 ){

            $datos_evaluador = $EvaluadoresModel2->getDatos($_POST["evaluador_evaluador"]);
        
            $nombre_evaluador = $datos_evaluador['nombres_evaluador']." ".$datos_evaluador['apellidos_evaluador'];

            $contrato = $ContratosModel->getDatos($_POST['id_contrato']);

            $EvaluadoresModel->insertar(
                $_POST["evaluador_evaluador"],
                $_POST['id_contrato']
            );     

            $accion = "Se Asoció a ".$nombre_evaluador." cómo Evaluador de éste Proceso";

            $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);   
                
            $evaluadores = $EvaluadoresModel->getTodosxContrato($_POST['id_contrato']);

            include("vistas/contratos/evaluadores/lista_evaluadores.php");

        }else{

            echo "error";

        }
        
    }

    
    
    public function insertar_correo() {
        
        $this->model->cargar("EvaluadoresModel.php", "contratos");
        $EvaluadoresModel = new EvaluadoresContratosModel();  
        
        $this->model->cargar("EvaluadoresModel.php", "actores");
        $EvaluadoresModel2 = new EvaluadoresModel();  
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    

        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();      
        
        $correo = new Correos();
        $param = new Parametros();

        $datos_evaluador = $EvaluadoresModel2->getDatos($_POST["evaluador_evaluador"]);

        $array_correos = array();
        
        $array_correos[] = $param->valor('correoalertas1');
        $array_correos[] = $param->valor('correoalertas2');
        $array_correos[] = $datos_evaluador['correo_evaluador'];

        $nombre_evaluador = $datos_evaluador['nombres_evaluador']." ".$datos_evaluador['apellidos_evaluador'];

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
            
            $numero = $EvaluadoresModel->existeEvaluadorenContrato($array, $_POST["evaluador_evaluador"]);
    
            if($array != 0 && $numero <= 0){

                $datos_contrato = $ContratosModel->getDatos($array);

                $EvaluadoresModel->insertar(
                    $_POST["evaluador_evaluador"],
                    $array
                );          

                $accion = "Se ha Asignado cómo Evaluador de éste proceso a ".$nombre_evaluador;

                $TrazabilidadControlador->insertarExterno($array, $accion);   

    
                $mensaje = file_get_contents("plantillas/correos/plantilla2/index.html");
        
                $mensaje = str_replace("#nombre#", $datos_evaluador['nombre_evaluador'], $mensaje);
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
        
                echo $correo->EnviarCorreo($mensaje, "Usted ha sido asignado como Evaluador", $array_correos);

                $accion = "Se Asoció a ".$nombre_evaluador." cómo Evaluador de éste Proceso y 
                se le envio un correo de Notificación";

                $TrazabilidadControlador->insertarExterno($array, $accion);   
              
            }  

        }        
           
          

    }

    
    
    public function insertarEditar_correo() {
        
        $this->model->cargar("EvaluadoresModel.php", "contratos");
        $EvaluadoresModel = new EvaluadoresContratosModel();  
        
        $this->model->cargar("EvaluadoresModel.php", "actores");
        $EvaluadoresModel2 = new EvaluadoresModel();  
                
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    
        
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        $numero = $EvaluadoresModel->existeEvaluadorenContrato($_POST['id_contrato'], $_POST["evaluador_evaluador"]);

        if($numero <= 0 ){

            $correo = new Correos();
            $param = new Parametros();

            $datos_evaluador = $EvaluadoresModel2->getDatos($_POST["evaluador_evaluador"]);
        
            $array_correos = array();
            
            $array_correos[] = $param->valor('correoalertas1');
            $array_correos[] = $param->valor('correoalertas2');
            $array_correos[] = $datos_evaluador['correo_evaluador'];

            $nombre_evaluador = $datos_evaluador['nombres_evaluador']." ".$datos_evaluador['apellidos_evaluador'];

            $contrato = $ContratosModel->getDatos($_POST['id_contrato']);

            $EvaluadoresModel->insertar(
                $_POST["evaluador_evaluador"],
                $_POST['id_contrato']
            );                    

            $accion = "Se Asoció a ".$nombre_evaluador." cómo Evaluador de éste Proceso y se le envio un correo de Notificación";

            $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);   

            $mensaje = file_get_contents("plantillas/correos/plantilla_evaluadores/index.html");

            $mensaje = str_replace("#nombre#", $datos_evaluador['nombre_evaluador'], $mensaje);
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
            
            $correo->EnviarCorreo($mensaje, "Usted ha sido asignado como Evaluador", $array_correos);
                
            $evaluadores = $EvaluadoresModel->getTodosxContrato($_POST['id_contrato']);

            include("vistas/contratos/evaluadores/lista_evaluadores.php");

        }else{

            echo "error";

        }
        
    }

    
   

   
    public function eliminar() {
        
        $this->model->cargar("EvaluadoresModel.php", "contratos");
        $EvaluadoresModel = new EvaluadoresContratosModel();

        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   
        
        $datos_evaluador = $EvaluadoresModel->getDatos($_POST["id_evaluador"]);

        $EvaluadoresModel->eliminar($_POST["id_evaluador"], $_POST['id_contrato']);
        
        $evaluadores = $EvaluadoresModel->getTodosxContrato($_POST['id_contrato']);
        
        $nombre_evaluador = $datos_evaluador['nombres_evaluador']." ".$datos_evaluador['apellidos_evaluador'];

        $accion = "Se Desasoció a ".$nombre_evaluador." cómo Evaluador de éste Proceso";

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);  

        include("vistas/contratos/evaluadores/lista_evaluadores.php");
             
        
    }

             
 }