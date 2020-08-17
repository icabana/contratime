<?php

class ProrrogasControlador extends ControllerBase {

    
    public function insertar() {
        
        $fechas = new Fechas();
        
        $this->model->cargar("ProrrogasModel.php", "contratos");
        $ProrrogasModel = new ProrrogasContratosModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
    
            if($array != 0){

                $ProrrogasModel->insertar(
                    $array,
                    $_POST["dias_prorroga"]
                );        
              
            }

        }
        
    }
    

    public function insertarEditar() {
        
        $fechas = new Fechas();

        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();  

        $this->model->cargar("ProrrogasModel.php", "contratos");
        $ProrrogasModel = new ProrrogasContratosModel();  

        $dias = $ProrrogasModel->getDiasProrrogas($_POST['id_contrato']) + $_POST["dias_prorroga"];

        $datos_contrato = $ContratosModel->getDatos($_POST['id_contrato']);

        $fecha_actual = date("Y-m-d");

        $nueva_fecha = $fechas->sumardias2($datos_contrato['fechafinal_contrato'], $dias);
                        
        $ProrrogasModel->insertar(
            $_POST['id_contrato'],
            $_POST["dias_prorroga"]
        );        
                
        $prorrogas = $ProrrogasModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/prorrogas/lista_prorrogas.php");           
        
    }
    
   
    public function eliminar() {
        
        $this->model->cargar("ProrrogasModel.php", "contratos");
        $ProrrogasModel = new ProrrogasContratosModel();  

        $ProrrogasModel->eliminar($_POST["id_prorroga"], $_POST['id_contrato']);
        
        $prorrogas = $ProrrogasModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/prorrogas/lista_prorrogas.php");
             
        
    }   
    
    public function eliminarDocumento() {
        
        unlink($_POST['archivo']);

        $this->model->cargar("ProrrogasModel.php", "contratos");
        $ProrrogasModel = new ProrrogasContratosModel();  
        
        $prorrogas = $ProrrogasModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/prorrogas/tabla_prorrogas.php");             
        
    }

    public function actualizarDocumento() {
        
        $this->model->cargar("ProrrogasModel.php", "contratos");
        $ProrrogasModel = new ProrrogasContratosModel();  
        
        $prorrogas = $ProrrogasModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/prorrogas/tabla_prorrogas.php");             
        
    }
            
             
 }