<?php

class CdpsControlador extends ControllerBase {

    
    public function insertar() {
        
        $this->model->cargar("CdpsModel.php", "contratos");
        $CdpsModel = new CdpsContratosModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    
        
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
    
            if($array[0] != 0){

                $datos_contrato = $ContratosModel->getDatos($array[0]);

                $CdpsModel->insertar(
                    $array[0],
                    $_POST["numero_cdp"],
                    $_POST["fecha_cdp"],
                    $_POST["valor_cdp"]
                );        
                
                $accion = "Se ha asociado el CDP No. ".$_POST["numero_cdp"]." a éste contrato";

                $TrazabilidadControlador->insertarExterno($array[0], $accion);   
                    
            }  

        }   
        
    }
      
    public function insertarEditar() {
        
        $this->model->cargar("CdpsModel.php", "contratos");
        $CdpsModel = new CdpsContratosModel();  
                        
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        $CdpsModel->insertar(
            $_POST['id_contrato'],
            $_POST["numero_cdp"],
            $_POST["fecha_cdp"],
            $_POST["valor_cdp"]
        );               

        $accion = "Se ha asociado el CDP No. ".$_POST["numero_cdp"]." a éste contrato";

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);  
        
        $cdps = $CdpsModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/cdps/lista_cdps.php");

        
    }
   
    public function eliminar() {
        
        $this->model->cargar("CdpsModel.php", "contratos");
        $CdpsModel = new CdpsContratosModel();      
        
        $datos_cdp = $CdpsModel->getDatos($_POST["id_cdp"]);

        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        $CdpsModel->eliminar($_POST["id_cdp"], $_POST['id_contrato']);

        $accion = "Se ha eliminado la asociación del CDP No. ".$datos_cdp["numero_cdp"]." en éste contrato";

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);  
        
        $cdps = $CdpsModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/cdps/lista_cdps.php");
             
        
    }

    
    public function eliminarDocumento() {
        
        unlink($_POST['archivo']);

        $this->model->cargar("CdpsModel.php", "contratos");
        $CdpsModel = new CdpsContratosModel();  
        
        $cdps = $CdpsModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/cdps/lista_cdps.php");             
        
    }

    public function actualizarDocumento() {
        
        $this->model->cargar("CdpsModel.php", "contratos");
        $CdpsModel = new CdpsContratosModel();  
        
        $cdps = $CdpsModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/cdps/lista_cdps.php");             
        
    }

           
             
 }