<?php

class PolizasControlador extends ControllerBase {

    
    public function insertar() {
        
        $this->model->cargar("PolizasModel.php", "contratos");
        $PolizasModel = new PolizasContratosModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    

        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();  

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
    
            if($array[0] != 0){

                $PolizasModel->insertar(
                    $array[0],
                    $_POST["numero_poliza"],
                    $_POST["fechaexp_poliza"],
                    $_POST["fechainicio_poliza"],
                    $_POST["fechafinal_poliza"]
                );    
                
                $accion = "Se ha asociado la Poliza de Garantía No. ".$_POST["numero_poliza"]." a éste contrato";

                $TrazabilidadControlador->insertarExterno($array[0], $accion);     
              
            }

        }
        
    }
    
    public function insertarEditar() {
        
        $this->model->cargar("PolizasModel.php", "contratos");
        $PolizasModel = new PolizasContratosModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    

        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();  
        
        $PolizasModel->insertar(
            $_POST['id_contrato'],
            $_POST["numero_poliza"],
            $_POST["fechaexp_poliza"],
            $_POST["fechainicio_poliza"],
            $_POST["fechafinal_poliza"]
        );   
        
        $accion = "Se ha asociado la Poliza de Garantía No. ".$_POST["numero_poliza"]." a éste contrato";

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);     

        $polizas = $PolizasModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/polizas/lista_polizas.php");
            
    }
       
    public function eliminar() {
        
        $this->model->cargar("PolizasModel.php", "contratos");
        $PolizasModel = new PolizasContratosModel();  

        $datos = $PolizasModel->getDatos($_POST["id_poliza"]);

        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();  
        
        $PolizasModel->eliminar($_POST["id_poliza"], $_POST['id_contrato']);
        
        $accion = "Se ha eliminado la asociacion de la Poliza de Garantía No. ".$datos["numero_poliza"]." en éste contrato";

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);    

        $polizas = $PolizasModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/polizas/lista_polizas.php");
             
        
    }

    
    
    public function eliminarDocumento() {
        
        unlink($_POST['archivo']);

        $this->model->cargar("PolizasModel.php", "contratos");
        $PolizasModel = new PolizasContratosModel();  
        
        $polizas = $PolizasModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/polizas/lista_polizas.php");             
        
    }

    public function actualizarDocumento() {
        
        $this->model->cargar("PolizasModel.php", "contratos");
        $PolizasModel = new PolizasContratosModel();  
        
        $polizas = $PolizasModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/polizas/lista_polizas.php");             
        
    }

           

             
 }