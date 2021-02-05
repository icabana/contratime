<?php

class PagosControlador extends ControllerBase {

    
    public function insertar() {
        
        $this->model->cargar("PagosModel.php", "contratos");
        $PagosModel = new PagosContratosModel();  
        
        $this->model->cargar("TipospagoModel.php", "administracion");
        $TipospagoModel = new TipospagoModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    
 
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        $tipopago = $TipospagoModel->getDatos($_POST["tipo_pago"]);

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
    
            if($array != 0){

                $PagosModel->insertar(
                    $array,
                    $_POST["tipo_pago"],
                    $_POST["fecha_pago"],
                    $_POST["valor_pago"]
                );        
              
                $accion = "Se ha regitrado un pago a este contrato: Tipo de pago: ".$tipopago["nombre_tipopago"].", Valor: $".number_format($_POST["valor_pago"], 0, ',', '.');

                $TrazabilidadControlador->insertarExterno($array, $accion);   

            }

        }
        
    }
    
    public function insertarEditar() {
        
        $this->model->cargar("PagosModel.php", "contratos");
        $PagosModel = new PagosContratosModel();  
        
        $this->model->cargar("TipospagoModel.php", "administracion");
        $TipospagoModel = new TipospagoModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();  

        $datos_contrato = $ContratosModel->getDatos($_POST['id_contrato']);

        $total_pagos = $PagosModel->getTotalPagos($_POST['id_contrato']) + $_POST["valor_pago"];

        if($total_pagos > $datos_contrato['valor_contrato']){
            echo "error";
            return;
        }
         
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   
  
        $PagosModel->insertar(
            $_POST['id_contrato'],
            $_POST["tipo_pago"],
            $_POST["fecha_pago"],
            $_POST["valor_pago"]
        );   
        
        $tipopago = $TipospagoModel->getDatos($_POST["tipo_pago"]);

        $accion = "Se ha regitrado un pago a este contrato: Tipo de pago: ".$tipopago["nombre_tipopago"].", Valor: $".number_format($_POST["valor_pago"], 0, ',', '.');

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);   

        $pagos = $PagosModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/pagos/lista_pagos.php");
        
            
    }
       

    
    public function insertar_correo() {
        
        $this->model->cargar("PagosModel.php", "contratos");
        $PagosModel = new PagosContratosModel();  
        
        $this->model->cargar("TipospagoModel.php", "administracion");
        $TipospagoModel = new TipospagoModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    
 
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        $tipopago = $TipospagoModel->getDatos($_POST["tipo_pago"]);

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
    
            if($array != 0){

                $id_pago = $PagosModel->insertar(
                    $array,
                    $_POST["tipo_pago"],
                    $_POST["fecha_pago"],
                    $_POST["valor_pago"]
                );        
              
                $datos_pago = $PagosModel->getDatos($id_pago);
                
                $correo = new Correos();
                $param = new Parametros();

                $array_correos = array();
        
                $array_correos[] = $param->valor('correoalertas1');
                $array_correos[] = $param->valor('correoalertas2');
                $array_correos[] = $datos_contrato['correo_contratista'];
        
                $mensaje = file_get_contents("plantillas/correos/plantilla_pagos/index.html");
        
                $mensaje = str_replace("#nombre#", $datos_contrato['nombres_contrato']." ".$datos_contrato['apellidos_contrato'], $mensaje);
                $mensaje = str_replace("#numproceso#", $datos_contrato['numero_contrato'], $mensaje);
                $mensaje = str_replace("#modalidad#", $datos_contrato['nombre_modalidad'], $mensaje);
                $mensaje = str_replace("#tipocontrato#", $datos_contrato['nombre_tipocontrato'], $mensaje);
                $mensaje = str_replace("#fecha_adjudicacion#", $datos_contrato['fadjudicacionproceso_contrato'], $mensaje);
                $mensaje = str_replace("#fecha_cierre#", $datos_contrato['fcierreproceso_contrato'], $mensaje);
                $mensaje = str_replace("#valor#", "$".number_format($datos_contrato['valproceso_contrato'],0,',','.'), $mensaje);
        
                $mensaje = str_replace("#tipo_pago#", $datos_pago['nombre_tipopago'], $mensaje);
                $mensaje = str_replace("#fecha_pago#", $datos_pago['fecha_pago'], $mensaje);
                $mensaje = str_replace("#valor_pago#", "$".number_format($datos_pago['valor_pago'],0,',','.'), $mensaje);
        
                $mensaje = str_replace("#nombre_empresa#",  $param->valor('empresa'), $mensaje);
                $mensaje = str_replace("#direccion#", $param->valor('direccion'), $mensaje);
                $mensaje = str_replace("#telefono#", $param->valor('telefono'), $mensaje);
                $mensaje = str_replace("#correo#", $param->valor('correo'), $mensaje);
                $mensaje = str_replace("#paginaweb#", $param->valor('paginaweb'), $mensaje);
                $mensaje = str_replace("#facebook#", $param->valor('facebook'), $mensaje);
                $mensaje = str_replace("#twitter#", $param->valor('twitter'), $mensaje);
                
                echo $correo->EnviarCorreo($mensaje, "Pago Realizado y Registrado", $array_correos);

                $accion = "Se ha regitrado un pago a este contrato: Tipo de pago: ".$tipopago["nombre_tipopago"].", Valor: $".number_format($_POST["valor_pago"], 0, ',', '.');

                $TrazabilidadControlador->insertarExterno($array, $accion);   

            }

        }
        
    }
    
    public function insertarEditar_correo() {
        
        $this->model->cargar("PagosModel.php", "contratos");
        $PagosModel = new PagosContratosModel();  
        
        $this->model->cargar("TipospagoModel.php", "administracion");
        $TipospagoModel = new TipospagoModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();  

        $datos_contrato = $ContratosModel->getDatos($_POST['id_contrato']);

        $total_pagos = $PagosModel->getTotalPagos($_POST['id_contrato']) + $_POST["valor_pago"];

        if($total_pagos > $datos_contrato['valor_contrato']){
            echo "error";
            return;
        }
         
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   
  
        $id_pago = $PagosModel->insertar(
            $_POST['id_contrato'],
            $_POST["tipo_pago"],
            $_POST["fecha_pago"],
            $_POST["valor_pago"]
        );   
        
        $datos_pago = $PagosModel->getDatos($id_pago);
        $tipopago = $TipospagoModel->getDatos($_POST["tipo_pago"]);

        $accion = "Se ha regitrado un pago a este contrato: Tipo de pago: ".$tipopago["nombre_tipopago"].", Valor: $".number_format($_POST["valor_pago"], 0, ',', '.');

        $correo = new Correos();
        $param = new Parametros();

        $array_correos = array();
        
        $array_correos[] = $param->valor('correoalertas1');
        $array_correos[] = $param->valor('correoalertas2');
        $array_correos[] = $datos_contrato['correo_contratista'];

        $mensaje = file_get_contents("plantillas/correos/plantilla_pagos/index.html");

        $mensaje = str_replace("#nombre#", $datos_contrato['nombres_contrato']." ".$datos_contrato['apellidos_contrato'], $mensaje);
        $mensaje = str_replace("#numproceso#", $datos_contrato['numero_contrato'], $mensaje);
        $mensaje = str_replace("#modalidad#", $datos_contrato['nombre_modalidad'], $mensaje);
        $mensaje = str_replace("#tipocontrato#", $datos_contrato['nombre_tipocontrato'], $mensaje);
        $mensaje = str_replace("#fecha_adjudicacion#", $datos_contrato['fadjudicacionproceso_contrato'], $mensaje);
        $mensaje = str_replace("#fecha_cierre#", $datos_contrato['fcierreproceso_contrato'], $mensaje);
        $mensaje = str_replace("#valor#", "$".number_format($datos_contrato['valproceso_contrato'],0,',','.'), $mensaje);

        $mensaje = str_replace("#tipo_pago#", $datos_pago['nombre_tipopago'], $mensaje);
        $mensaje = str_replace("#fecha_pago#", $datos_pago['fecha_pago'], $mensaje);
        $mensaje = str_replace("#valor_pago#", "$".number_format($datos_pago['valor_pago'],0,',','.'), $mensaje);

        $mensaje = str_replace("#nombre_empresa#",  $param->valor('empresa'), $mensaje);
        $mensaje = str_replace("#direccion#", $param->valor('direccion'), $mensaje);
        $mensaje = str_replace("#telefono#", $param->valor('telefono'), $mensaje);
        $mensaje = str_replace("#correo#", $param->valor('correo'), $mensaje);
        $mensaje = str_replace("#paginaweb#", $param->valor('paginaweb'), $mensaje);
        $mensaje = str_replace("#facebook#", $param->valor('facebook'), $mensaje);
        $mensaje = str_replace("#twitter#", $param->valor('twitter'), $mensaje);
        
        $correo->EnviarCorreo($mensaje, "Pago Realizado y Registrado", $array_correos);



        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);   

        $pagos = $PagosModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/pagos/lista_pagos.php");
        
            
    }
       


    public function eliminar() {
        
        $this->model->cargar("PagosModel.php", "contratos");
        $PagosModel = new PagosContratosModel();  

        $datos = $PagosModel->getDatos($_POST["id_pago"]);
         
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        $PagosModel->eliminar($_POST["id_pago"], $_POST['id_contrato']);

        
        $accion = "Se ha eliminado un pago en este contrato por valor de : $".number_format($datos["valor_pago"], 0, ',', '.');

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion); 
        
        $pagos = $PagosModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/pagos/lista_pagos.php");
             
        
    }

             
 }