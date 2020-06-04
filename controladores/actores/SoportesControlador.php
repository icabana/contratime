<?php

class SoportesControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("SoportesModel.php", "actores");
        $SoportesModel = new SoportesModel();

        $soportes = $SoportesModel->getTodos();

        include 'vistas/actores/soportes/default.php';
                        
    }    
    
    public function nuevo(){
        
        $this->model->cargar("TipospersonaModel.php", "maestras");
        $TipospersonaModel = new TipospersonaModel();
        $tipos = $TipospersonaModel->getTodos();

        include 'vistas/actores/soportes/insertar.php';
        
    }

         
    public function editar(){
    
        $this->model->cargar("TipospersonaModel.php", "maestras");
        $TipospersonaModel = new TipospersonaModel();
        $tipos = $TipospersonaModel->getTodos();

        $this->model->cargar("SoportesModel.php");
        $SoportesModel = new SoportesModel();    
    
        $datos = $SoportesModel->getDatos($_POST['id_soporte']);
            
        include 'vistas/actores/soportes/editar.php';
               
    }
    
         
    public function insertar() {
      
        $this->model->cargar("SoportesModel.php", "actores");
        $SoportesModel = new SoportesModel();            
        
        $resp = $SoportesModel->insertar(
            $_POST["tipo_soporte"],
            $_POST["nombre_soporte"],
            $_POST["descripcion_soporte"]
        );        
        
        if( $resp != 0 ){

            echo 1;

        }else{

            echo 0;	

        }
        
    }
    
    public function guardar() {
        
        $this->model->cargar("SoportesModel.php", 'actores');
        $SoportesModel = new SoportesModel();
                    
        $SoportesModel->editar(
            $_POST["id_soporte"], 
            $_POST["tipo_soporte"],
            $_POST["nombre_soporte"],
            $_POST["descripcion_soporte"]
        );              
            
        echo 1;
        
    }   
        
    public function eliminar() {
        
        $this->model->cargar("SoportesModel.php", "actores");
        $SoportesModel = new SoportesModel();
        
        $SoportesModel->eliminar($_POST["id_soporte"]);
        
        echo "1";        
        
    }    
    
    public function generarPdf(){
         
        $this->model->cargar("SoportesModel.php", "actores");
        $SoportesModel = new SoportesModel();

        $soportes = $SoportesModel->getTodos();
                 
        include("vistas/actores/soportes/reportes/pdf.php");   
       
        $dirPdf = "archivos/reportes/soportes/soportes.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    
    public function generarExcel(){
         
        $this->model->cargar("SoportesModel.php", "actores");
        $SoportesModel = new SoportesModel();

        $soportes = $SoportesModel->getTodos();
                        
        $nombre_archivo = "soportes_".date('Y-m-d_H-i-s').".xls";        

        $ruta = dirname(__FILE__, 3).DIRECTORY_SEPARATOR."archivos".DIRECTORY_SEPARATOR."reportes".DIRECTORY_SEPARATOR."soportes".DIRECTORY_SEPARATOR.$nombre_archivo;        

        include("vistas/actores/soportes/reportes/excel.php");        
           
        echo "archivos/reportes/soportes/".$nombre_archivo;

    }

    
    public function eliminarSoporte() {
        
        unlink($_POST['archivo']);

        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        
        $contratos = $ContratosModel->getTodos($_POST['id_contrato']);

        include("vistas/actores/contratistas/soportes/tabla_contratos.php");             
        
    }

    public function actualizarSoporte() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();        
        
        $contratista = $ContratosModel->getDatos($_POST['id_contratista_upload']);
        
        $this->model->cargar("SoportesModel.php", "actores");
        $SoportesModel = new SoportesModel();
        $soportes = $SoportesModel->getTodosxTipo($contratista['tipo_contratista']);
        
        include("vistas/actores/contratistas/soportes/tabla_soportes.php");                  

        echo $tabla_soportes;
        
    }

    
 }