<?php

class EvaluadoresControlador extends ControllerBase {


    public function index() {        

        $this->model->cargar("EvaluadoresModel.php", "actores");
        $EvaluadoresModel = new EvaluadoresModel();

        $evaluadores = $EvaluadoresModel->getTodos();

        include 'vistas/actores/evaluadores/default.php';                        

    }        


    public function nuevo(){        		

        $this->model->cargar("TipospersonaModel.php", "maestras");
        $TipospersonaModel = new TipospersonaModel();
        $tipos = $TipospersonaModel->getTodos();

        $this->model->cargar("TiposdocumentoModel.php", "maestras");
        $TiposdocumentoModel = new TiposdocumentoModel();
        $tiposdocumento = $TiposdocumentoModel->getTodos();

        $this->model->cargar("PaisesModel.php", "maestras");
        $PaisesModel = new PaisesModel();
        $paises = $PaisesModel->getTodos();

        $this->model->cargar("DepartamentosModel.php", "maestras");
        $DepartamentosModel = new DepartamentosModel();
        $departamentos = $DepartamentosModel->getTodos();

        $this->model->cargar("MunicipiosModel.php", "maestras");
        $MunicipiosModel = new MunicipiosModel();
        $municipios = $MunicipiosModel->getTodos('91'); //Departamento de Amazonas == 5

        $this->model->cargar("GenerosModel.php", "maestras");
        $GenerosModel = new GenerosModel();
        $generos = $GenerosModel->getTodos();

        $this->model->cargar("EstadoscivilModel.php", "maestras");
        $EstadoscivilModel = new EstadoscivilModel();
        $estadoscivil = $EstadoscivilModel->getTodos();

        $this->model->cargar("ProfesionesModel.php", "maestras");
        $ProfesionesModel = new ProfesionesModel();
        $profesiones = $ProfesionesModel->getTodos();

        include 'vistas/actores/evaluadores/insertar.php';        

    } 


    public function editar(){                        

        $this->model->cargar("TipospersonaModel.php", "maestras");
        $TipospersonaModel = new TipospersonaModel();
        $tipos = $TipospersonaModel->getTodos();

        $this->model->cargar("TiposdocumentoModel.php", "maestras");
        $TiposdocumentoModel = new TiposdocumentoModel();
        $tiposdocumento = $TiposdocumentoModel->getTodos();

        $this->model->cargar("PaisesModel.php", "maestras");
        $PaisesModel = new PaisesModel();
        $paises = $PaisesModel->getTodos();
        
        $this->model->cargar("DepartamentosModel.php", "maestras");
        $DepartamentosModel = new DepartamentosModel();
        $departamentos = $DepartamentosModel->getTodos();

        $this->model->cargar("GenerosModel.php", "maestras");
        $GenerosModel = new GenerosModel();
        $generos = $GenerosModel->getTodos();

        $this->model->cargar("EstadoscivilModel.php", "maestras");
        $EstadoscivilModel = new EstadoscivilModel();
        $estadoscivil = $EstadoscivilModel->getTodos();

        $this->model->cargar("ProfesionesModel.php", "maestras");
        $ProfesionesModel = new ProfesionesModel();
        $profesiones = $ProfesionesModel->getTodos();

        $this->model->cargar("EvaluadoresModel.php", 'actores');
        $EvaluadoresModel = new EvaluadoresModel();          
        $datos = $EvaluadoresModel->getDatos($_POST['id_evaluador']);       
        
        $this->model->cargar("MunicipiosModel.php", "maestras");
        $MunicipiosModel = new MunicipiosModel();
        $municipios = $MunicipiosModel->getTodos($datos['departamento_evaluador']); //Departamento de Amazonas == 5

        include 'vistas/actores/evaluadores/editar.php';               

    }
    

    public function insertar() {

        $this->model->cargar("EvaluadoresModel.php", 'actores');
        $EvaluadoresModel = new EvaluadoresModel();                      

        $result = $EvaluadoresModel->getDatosPorCampo("documento_evaluador", $_POST["documento_evaluador"]);

        if(count($result) > 0){
            echo "error_documento";
            return;
        }

        $resp = $EvaluadoresModel->insertar(

            $_POST["tipo_evaluador"],
            $_POST["tipodocumento_evaluador"], 
            $_POST["documento_evaluador"], 
            $_POST["nombres_evaluador"], 
            $_POST["apellidos_evaluador"], 

            $_POST["dirresidencia_evaluador"], 
            $_POST["dircorrespondencia_evaluador"],
            $_POST["telefono_evaluador"], 
            $_POST["celular_evaluador"], 
            $_POST["correo_evaluador"], 
            $_POST["paginaweb_evaluador"],

            $_POST["pais_evaluador"],
            $_POST["departamento_evaluador"],
            $_POST["municipio_evaluador"], 

            $_POST["genero_evaluador"],
            $_POST["estadocivil_evaluador"],

            $_POST["profesion_evaluador"]

        );        

        if( $resp != 0 ){
            echo 1;
        }else{
            echo 0;	
        }      
        
    }
        

    public function guardar() {

        $this->model->cargar("EvaluadoresModel.php", 'actores');
        $evaluadoresModel = new EvaluadoresModel();                

        $resp = $evaluadoresModel->editar(

            $_POST["id_evaluador"], 

            $_POST["tipo_evaluador"],
            $_POST["tipodocumento_evaluador"], 
            $_POST["documento_evaluador"], 
            $_POST["nombres_evaluador"], 
            $_POST["apellidos_evaluador"], 

            $_POST["dirresidencia_evaluador"], 
            $_POST["dircorrespondencia_evaluador"],
            $_POST["telefono_evaluador"], 
            $_POST["celular_evaluador"], 
            $_POST["correo_evaluador"], 
            $_POST["paginaweb_evaluador"],

            $_POST["pais_evaluador"],
            $_POST["departamento_evaluador"],
            $_POST["municipio_evaluador"], 


            $_POST["genero_evaluador"],
            $_POST["estadocivil_evaluador"],

            $_POST["profesion_evaluador"]
        );     

         if( $resp != 0 ){			     

             echo 1;             

        }else{			     

            echo 0;	            

        }          

    }         

    public function eliminar() {        

        $this->model->cargar("EvaluadoresModel.php", "actores");
        $evaluadoresModel = new EvaluadoresModel();        

        $evaluadoresModel->eliminar($_POST["id_evaluador"]);        

        echo "1";                

    }           

    
    public function cargarMunicipios() {        

        $froms = new Formularios();

        $this->model->cargar("MunicipiosModel.php", "maestras");
        $MunicipiosModel = new MunicipiosModel();
        $municipios = $MunicipiosModel->getTodos($_POST['id_departamento']); 
        
        echo $froms->Lista_Desplegable(
            $municipios,
            'nombre_municipio',
            'id_municipio',
            'municipio_evaluador',
            '',
            '',
            ''
          );

    }          
    
    public function generarPdf(){
         
        $this->model->cargar("EvaluadoresModel.php", "actores");
        $EvaluadoresModel = new EvaluadoresModel();

        $evaluadores = $EvaluadoresModel->getTodos();
          
        include("vistas/actores/evaluadores/reportes/pdf.php");   
       
        $dirPdf = "archivos/reportes/evaluadores/evaluadores_".date("Y-m-d")."_.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    
    public function generarExcel(){
         
        $this->model->cargar("EvaluadoresModel.php", "actores");
        $EvaluadoresModel = new EvaluadoresModel();

        $evaluadores = $EvaluadoresModel->getTodos();
                        
        $nombre_archivo = "evaluadores_".date('Y-m-d_H-i-s').".xls";        

        $ruta = dirname(__FILE__, 3)."/archivos/reportes/evaluadores/".$nombre_archivo;        

        include("vistas/actores/evaluadores/reportes/excel.php");        
           
        echo "archivos/reportes/evaluadores/".$nombre_archivo;

    }
    
    
 }

?>