<?php

class ModalidadesControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("ModalidadesModel.php", "administracion");
        $ModalidadesModel = new ModalidadesModel();

        $modalidades = $ModalidadesModel->getTodos();

        include 'vistas/administracion/modalidades/default.php';
                        
    }    
    
    public function nuevo(){
        
        include 'vistas/administracion/modalidades/insertar.php';
        
    }

         
    public function editar(){
    
        $this->model->cargar("ModalidadesModel.php");
        $ModalidadesModel = new ModalidadesModel();    
    
        $datos = $ModalidadesModel->getDatos($_POST['id_modalidad']);
            
        include 'vistas/administracion/modalidades/editar.php';
               
    }
    
         
    public function documentos(){
    
        $this->model->cargar("ModalidadesModel.php");
        $ModalidadesModel = new ModalidadesModel();    
        
        $this->model->cargar("DocumentosModel.php");
        $DocumentosModel = new DocumentosModel();    
    
        $datos = $ModalidadesModel->getDatos($_POST['id_modalidad']);
        $documentos = $DocumentosModel->getTodosxModalidad($_POST['id_modalidad']);
            
        include 'vistas/administracion/documentos/default.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("ModalidadesModel.php", "administracion");
        $ModalidadesModel = new ModalidadesModel();            
        
        $resp = $ModalidadesModel->insertar(
            $_POST["nombre_modalidad"],
            $_POST["tipo_modalidad"]
        );        
        
        if( $resp != 0 ){

            echo 1;

        }else{

            echo 0;	

        }
        
    }
    
    public function guardar() {
        
        $this->model->cargar("ModalidadesModel.php", 'administracion');
        $ModalidadesModel = new ModalidadesModel();
                    
        $ModalidadesModel->editar(
            $_POST["id_modalidad"], 
            $_POST["nombre_modalidad"],
            $_POST["tipo_modalidad"]
        );              
            
        echo 1;
        
    }   
        
    public function eliminar() {
        
        $this->model->cargar("ModalidadesModel.php", "administracion");
        $ModalidadesModel = new ModalidadesModel();
        
        $ModalidadesModel->eliminar($_POST["id_modalidad"]);
        
        echo "1";        
        
    }    
    
    public function generarPdf(){
         
        $this->model->cargar("ModalidadesModel.php", "administracion");
        $ModalidadesModel = new ModalidadesModel();

        $modalidades = $ModalidadesModel->getTodos();
                 
        include("vistas/administracion/modalidades/reportes/pdf.php");   
       
        $dirPdf = "archivos/reportes/modalidades/modalidades.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    
    public function generarExcel(){
         
        $this->model->cargar("ModalidadesModel.php", "administracion");
        $ModalidadesModel = new ModalidadesModel();

        $modalidades = $ModalidadesModel->getTodos();
                        
        $nombre_archivo = "modalidades_".date('Y-m-d_H-i-s').".xls";        

        $ruta = dirname(__FILE__, 3).DIRECTORY_SEPARATOR."archivos".DIRECTORY_SEPARATOR."reportes".DIRECTORY_SEPARATOR."modalidades".DIRECTORY_SEPARATOR.$nombre_archivo;        

        include("vistas/administracion/modalidades/reportes/excel.php");        
           
        echo "archivos/reportes/modalidades/".$nombre_archivo;

    }
    
    
 }