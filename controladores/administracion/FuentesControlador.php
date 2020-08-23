<?php

class FuentesControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("FuentesModel.php", "administracion");
        $FuentesModel = new FuentesModel();

        $fuentes = $FuentesModel->getTodos();

        include 'vistas/administracion/fuentes/default.php';
                        
    }    
    
    public function nuevo(){
        
        include 'vistas/administracion/fuentes/insertar.php';
        
    }

         
    public function editar(){
    
        $this->model->cargar("FuentesModel.php");
        $FuentesModel = new FuentesModel();    
    
        $datos = $FuentesModel->getDatos($_POST['id_fuente']);
            
        include 'vistas/administracion/fuentes/editar.php';
               
    }
    
         
    public function documentos(){
    
        $this->model->cargar("FuentesModel.php");
        $FuentesModel = new FuentesModel();    
        
        $this->model->cargar("DocumentosModel.php");
        $DocumentosModel = new DocumentosModel();    
    
        $datos = $FuentesModel->getDatos($_POST['id_fuente']);
        $documentos = $DocumentosModel->getTodosxFuente($_POST['id_fuente']);
            
        include 'vistas/administracion/documentos/default.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("FuentesModel.php", "administracion");
        $FuentesModel = new FuentesModel();            
        
        $resp = $FuentesModel->insertar(
            $_POST["nombre_fuente"]
        );        
        
        if( $resp != 0 ){

            echo 1;

        }else{

            echo 0;	

        }
        
    }
    
    public function guardar() {
        
        $this->model->cargar("FuentesModel.php", 'administracion');
        $FuentesModel = new FuentesModel();
                    
        $FuentesModel->editar(
            $_POST["id_fuente"], 
            $_POST["nombre_fuente"]
        );              
            
        echo 1;
        
    }   
        
    public function eliminar() {
        
        $this->model->cargar("FuentesModel.php", "administracion");
        $FuentesModel = new FuentesModel();
        
        $FuentesModel->eliminar($_POST["id_fuente"]);
        
        echo "1";        
        
    }    
    
    public function generarPdf(){
         
        $this->model->cargar("FuentesModel.php", "administracion");
        $FuentesModel = new FuentesModel();

        $fuentes = $FuentesModel->getTodos();
                 
        include("vistas/administracion/fuentes/reportes/pdf.php");   
       
        $dirPdf = "archivos/reportes/fuentes/fuentes.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    
    public function generarExcel(){
         
        $this->model->cargar("FuentesModel.php", "administracion");
        $FuentesModel = new FuentesModel();

        $fuentes = $FuentesModel->getTodos();
                        
        $nombre_archivo = "fuentes_".date('Y-m-d_H-i-s').".xls";        

        $ruta = dirname(__FILE__, 3).DIRECTORY_SEPARATOR."archivos".DIRECTORY_SEPARATOR."reportes".DIRECTORY_SEPARATOR."fuentes".DIRECTORY_SEPARATOR.$nombre_archivo;        

        include("vistas/administracion/fuentes/reportes/excel.php");        
           
        echo "archivos/reportes/fuentes/".$nombre_archivo;

    }
    
    
 }