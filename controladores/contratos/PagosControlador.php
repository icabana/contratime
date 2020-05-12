<?php

class PagosControlador extends ControllerBase {

    
    public function insertar() {
        
        $this->model->cargar("PagosModel.php", "contratos");
        $PagosModel = new PagosContratosModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
    
            if($array[0] != 0){

                $PagosModel->insertar(
                    $array[0],
                    $_POST["tipo_pago"],
                    $_POST["fecha_pago"],
                    $_POST["valor_pago"]
                );        
              
            }

        }
        
    }
    
    public function insertarEditar() {
        
        $this->model->cargar("PagosModel.php", "contratos");
        $PagosModel = new PagosContratosModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    

        $PagosModel->insertar(
            $_POST['id_contrato'],
            $_POST["tipo_pago"],
            $_POST["fecha_pago"],
            $_POST["valor_pago"]
        );   

        $pagos = $PagosModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/pagos/lista_pagos.php");
        
            
    }
       
    public function eliminar() {
        
        $this->model->cargar("PagosModel.php", "contratos");
        $PagosModel = new PagosContratosModel();  

        $PagosModel->eliminar($_POST["id_pago"], $_POST['id_contrato']);
        
        $pagos = $PagosModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/pagos/lista_pagos.php");
             
        
    }

             
 }