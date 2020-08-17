<?php

class SupervisoresControlador extends ControllerBase {

    
    public function insertar() {
        
        $this->model->cargar("SupervisoresModel.php", "contratos");
        $SupervisoresModel = new SupervisoresContratosModel();  
        
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel2 = new SupervisoresModel();  
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    

        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();      
        
        $correo = new Correos();
        $param = new Parametros();

        $datos_supervisor = $SupervisoresModel2->getDatos($_POST["supervisor_supervisor"]);

        $nombre_supervisor = $datos_supervisor['nombres_supervisor']." ".$datos_supervisor['apellidos_supervisor'];

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
            
            $numero = $SupervisoresModel->existeSupervisorenContrato($array, $_POST["supervisor_supervisor"]);
    
            if($array != 0 && $numero <= 0){

                $datos_contrato = $ContratosModel->getDatos($array);

                $SupervisoresModel->insertar(
                    $_POST["supervisor_supervisor"],
                    $array
                );                    

                $accion = "Se Asoció a ".$nombre_supervisor." cómo Supervisor de éste Contrato";
                
                $TrazabilidadControlador->insertarExterno($array, $accion);   
              
            }  

        }        
           
          

    }

    
    
    public function insertarEditar() {
        
        $this->model->cargar("SupervisoresModel.php", "contratos");
        $SupervisoresModel = new SupervisoresContratosModel();  
        
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel2 = new SupervisoresModel();  
                
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    
        
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        $numero = $SupervisoresModel->existeSupervisorenContrato($_POST['id_contrato'], $_POST["supervisor_supervisor"]);

        if($numero <= 0 ){

            $correo = new Correos();
            $param = new Parametros();

            $datos_supervisor = $SupervisoresModel2->getDatos($_POST["supervisor_supervisor"]);
        
            $nombre_supervisor = $datos_supervisor['nombres_supervisor']." ".$datos_supervisor['apellidos_supervisor'];

            $datos_contrato = $ContratosModel->getDatos($_POST['id_contrato']);

            $SupervisoresModel->insertar(
                $_POST["supervisor_supervisor"],
                $_POST['id_contrato']
            );                    

            $accion = "Se Asoció a ".$nombre_supervisor." cómo Supervisor de éste Contrato";

            $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);   
                
            $supervisores = $SupervisoresModel->getTodosxContrato($_POST['id_contrato']);

            include("vistas/contratos/supervisores/lista_supervisores.php");

        }else{

            echo "error";

        }
        
    }

    
    
    public function insertar_correo() {
        
        $this->model->cargar("SupervisoresModel.php", "contratos");
        $SupervisoresModel = new SupervisoresContratosModel();  
        
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel2 = new SupervisoresModel();  
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    

        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();      
        
        $correo = new Correos();
        $param = new Parametros();

        $datos_supervisor = $SupervisoresModel2->getDatos($_POST["supervisor_supervisor"]);

        $nombre_supervisor = $datos_supervisor['nombres_supervisor']." ".$datos_supervisor['apellidos_supervisor'];

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
            
            $numero = $SupervisoresModel->existeSupervisorenContrato($array, $_POST["supervisor_supervisor"]);
    
            if($array != 0 && $numero <= 0){

                $datos_contrato = $ContratosModel->getDatos($array);

                $SupervisoresModel->insertar(
                    $_POST["supervisor_supervisor"],
                    $array
                );                    

    
                $mensaje = file_get_contents("plantillas/correos/plantilla_supervisores/index.html");
        
                $mensaje = str_replace("#nombre#", $datos_supervisor['nombre_supervisor'], $mensaje);
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
        
                echo $correo->EnviarCorreo($mensaje, "Usted ha sido asignado como Supervisor", array($datos_supervisor['correo_supervisor']));

                
                $accion = "Se Asoció a ".$nombre_supervisor." cómo Supervisor de éste Contrato y 
                se le envio un correo de Notificación";

                $TrazabilidadControlador->insertarExterno($array, $accion);   
              
            }  

        }        
           
          

    }

    
    
    public function insertarEditar_correo() {
        
        $this->model->cargar("SupervisoresModel.php", "contratos");
        $SupervisoresModel = new SupervisoresContratosModel();  
        
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel2 = new SupervisoresModel();  
                
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    
        
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        $numero = $SupervisoresModel->existeSupervisorenContrato($_POST['id_contrato'], $_POST["supervisor_supervisor"]);

        if($numero <= 0 ){

            $correo = new Correos();
            $param = new Parametros();

            $datos_supervisor = $SupervisoresModel2->getDatos($_POST["supervisor_supervisor"]);
        
            $nombre_supervisor = $datos_supervisor['nombres_supervisor']." ".$datos_supervisor['apellidos_supervisor'];

            $datos_contrato = $ContratosModel->getDatos($_POST['id_contrato']);

            $SupervisoresModel->insertar(
                $_POST["supervisor_supervisor"],
                $_POST['id_contrato']
            );                    
           

            $mensaje = file_get_contents("plantillas/correos/plantilla2/index.html");

            $mensaje = str_replace("#nombre#", $datos_supervisor['nombre_supervisor'], $mensaje);
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
            
            $correo->EnviarCorreo($mensaje, "asunto", array($datos_supervisor['correo_supervisor']));
                
            $supervisores = $SupervisoresModel->getTodosxContrato($_POST['id_contrato']);
                 
            $accion = "Se Asoció a ".$nombre_supervisor." cómo Supervisor de éste Contrato y 
            se le envio un correo de Notificación";
            
            $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);   

            include("vistas/contratos/supervisores/lista_supervisores.php");

        }else{

            echo "error";

        }
        
    }

    
   
    public function eliminar() {
        
        $this->model->cargar("SupervisoresModel.php", "contratos");
        $SupervisoresModel = new SupervisoresContratosModel();

        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   
        
        $datos_supervisor = $SupervisoresModel->getDatos($_POST["id_supervisor"]);

        $SupervisoresModel->eliminar($_POST["id_supervisor"], $_POST['id_contrato']);
        
        $supervisores = $SupervisoresModel->getTodosxContrato($_POST['id_contrato']);
        
        $nombre_supervisor = $datos_supervisor['nombres_supervisor']." ".$datos_supervisor['apellidos_supervisor'];

        $accion = "Se Desasoció a ".$nombre_supervisor." cómo Supervisor de éste Contrato";

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);  

        include("vistas/contratos/supervisores/lista_supervisores.php");
             
        
    }

             
 }