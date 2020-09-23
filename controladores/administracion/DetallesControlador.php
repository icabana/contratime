<?php

class DetallesControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("DetallesModel.php", "administracion");
        $DetallesModel = new DetallesModel();

        $detalles = $DetallesModel->getTodosxPlan($_POST['id_plan']);

        $id_plan = $_POST['id_plan'];

        include 'vistas/administracion/detalles/default.php';
                        
    }    
    
    public function nuevo(){

        $this->model->cargar("ModalidadesModel.php", "administracion");
        $ModalidadesModel = new ModalidadesModel();
        $modalidades = $ModalidadesModel->getTodos();

        $this->model->cargar("FuentesModel.php", "administracion");
        $FuentesModel = new FuentesModel();
        $fuentes = $FuentesModel->getTodos();

        $this->model->cargar("EncargadosModel.php", "actores");
        $EncargadosModel = new EncargadosModel();
        $encargados = $EncargadosModel->getTodos();

        $plan_detalle = $_POST['plan_detalle'];
        
        include 'vistas/administracion/detalles/insertar.php';
        
    }

         
    public function editar(){
    
        $this->model->cargar("ModalidadesModel.php", "administracion");
        $ModalidadesModel = new ModalidadesModel();

        $modalidades = $ModalidadesModel->getTodos();

        $this->model->cargar("FuentesModel.php", "administracion");
        $FuentesModel = new FuentesModel();
        $fuentes = $FuentesModel->getTodos();

        $this->model->cargar("EncargadosModel.php", "actores");
        $EncargadosModel = new EncargadosModel();
        $encargados = $EncargadosModel->getTodos();
        
        $this->model->cargar("DetallesModel.php");
        $DetallesModel = new DetallesModel();        
        $datos = $DetallesModel->getDatos($_POST['id_detalle']);

        $id_detalle = $_POST['id_detalle'];
        $id_plan = $_POST['id_plan'];
            
        include 'vistas/administracion/detalles/editar.php';
               
    }
    
         
    public function documentos(){
    
        $this->model->cargar("DetallesModel.php");
        $DetallesModel = new DetallesModel();    
        
        $this->model->cargar("DocumentosModel.php");
        $DocumentosModel = new DocumentosModel();    
    
        $datos = $DetallesModel->getDatos($_POST['id_detalle']);
        //$documentos = $DocumentosModel->getTodosxDetalle($_POST['id_detalle']);
            
        include 'vistas/administracion/documentos/default.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("DetallesModel.php", "administracion");
        $DetallesModel = new DetallesModel();       

        $this->model->cargar("PlanesModel.php", "administracion");
        $PlanesModel = new PlanesModel();        
       

        $resp = $DetallesModel->insertar(
            $_POST["id_plan_detalle"],
            $_POST["codigos_detalle"],
            $_POST["descripcion_detalle"],
            $_POST["fechainicio_detalle"],
            $_POST["meses_detalle"],
            $_POST["modalidad_detalle"],
            $_POST["fuente_detalle"],
            $_POST["valtotal_detalle"],
            $_POST["valactual_detalle"],
            $_POST["futuras_detalle"],
            $_POST["estadofuturas_detalle"],
            $_POST["contacto_detalle"]
        );        
        
        if( $resp != 0 ){

            $PlanesModel->modificarValorSumar($_POST["id_plan_detalle"]);

            echo 1;

        }else{

            echo 0;	

        }
        
    }
    
    public function guardar() {
        
        $this->model->cargar("DetallesModel.php", 'administracion');
        $DetallesModel = new DetallesModel();
                    
        $this->model->cargar("PlanesModel.php", "administracion");
        $PlanesModel = new PlanesModel();        
       
        $DetallesModel->editar(
            $_POST["id_detalle"], 
            $_POST["codigos_detalle"],
            $_POST["descripcion_detalle"],
            $_POST["fechainicio_detalle"],
            $_POST["meses_detalle"],
            $_POST["modalidad_detalle"],
            $_POST["fuente_detalle"],
            $_POST["valtotal_detalle"],
            $_POST["valactual_detalle"],
            $_POST["futuras_detalle"],
            $_POST["estadofuturas_detalle"],
            $_POST["contacto_detalle"]
        );              
            
        $PlanesModel->modificarValorSumar($_POST["id_plan_detalle_editar"]);

        echo 1;
        
    }   
        
    public function eliminar() {
        
        $this->model->cargar("DetallesModel.php", "administracion");
        $DetallesModel = new DetallesModel();
        
        $this->model->cargar("PlanesModel.php", "administracion");
        $PlanesModel = new PlanesModel();        
       
        $DetallesModel->eliminar($_POST["id_detalle"]);

        $PlanesModel->modificarValorSumar($_POST["id_plan"]);
        
        echo "1";        
        
    }    
    
    public function generarPdf(){
         
        $this->model->cargar("DetallesModel.php", "administracion");
        $DetallesModel = new DetallesModel();

        $detalles = $DetallesModel->getTodos();
                 
        include("vistas/administracion/detalles/reportes/pdf.php");   
       
        $dirPdf = "archivos/reportes/detalles/detalles.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    
    public function generarExcel(){
         
        $this->model->cargar("DetallesModel.php", "administracion");
        $DetallesModel = new DetallesModel();

        $detalles = $DetallesModel->getTodos();
                        
        $nombre_archivo = "detalles_".date('Y-m-d_H-i-s').".xls";        

        $ruta = dirname(__FILE__, 3).DIRECTORY_SEPARATOR."archivos".DIRECTORY_SEPARATOR."reportes".DIRECTORY_SEPARATOR."detalles".DIRECTORY_SEPARATOR.$nombre_archivo;        

        include("vistas/administracion/detalles/reportes/excel.php");        
           
        echo "archivos/reportes/detalles/".$nombre_archivo;

    }
    
    
 }