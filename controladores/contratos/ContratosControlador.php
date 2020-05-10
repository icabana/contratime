<?php

class ContratosControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodos();        
        
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel = new SupervisoresModel();
        $supervisores = $SupervisoresModel->getTodos();
          
        include 'vistas/contratos/contratos/default.php';
                        
    }    


    public function nuevo(){

        $this->model->cargar("ModalidadesModel.php", "administracion");
        $ModalidadesModel = new ModalidadesModel();
        $modalidades = $ModalidadesModel->getTodos();

        $this->model->cargar("TiposcontratoModel.php", "administracion");
        $Tiposcontrato = new TiposcontratoModel();
        $tiposcontrato = $Tiposcontrato->getTodos();

        include 'vistas/contratos/contratos/insertar.php';
        
    }  
       
    
    public function editar(){

        $this->model->cargar("ModalidadesModel.php", "administracion");
        $ModalidadesModel = new ModalidadesModel();
        $modalidades = $ModalidadesModel->getTodos();

        $this->model->cargar("TiposcontratoModel.php", "administracion");
        $Tiposcontrato = new TiposcontratoModel();
        $tiposcontrato = $Tiposcontrato->getTodos();
        
        $this->model->cargar("SupervisoresModel.php", "contratos");
        $SupervisoresModel = new SupervisoresModel();
        $supervisores = $SupervisoresModel->getTodosxContrato($_POST['id_contrato']);

        include 'vistas/contratos/contratos/editar_convocado.php';
               
    }       
    
    public function editarConvocado(){

        $this->model->cargar("ModalidadesModel.php", "administracion");
        $ModalidadesModel = new ModalidadesModel();
        $modalidades = $ModalidadesModel->getTodos();

        $this->model->cargar("TiposcontratoModel.php", "administracion");
        $Tiposcontrato = new TiposcontratoModel();
        $tiposcontrato = $Tiposcontrato->getTodos();
        
        $this->model->cargar("SupervisoresModel.php", "contratos");
        $SupervisoresModel = new SupervisoresModel();
        $supervisores = $SupervisoresModel->getTodosxContrato($_POST['id_contrato']);

        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contrato = $ContratosModel->getDatos($_POST['id_contrato']);

        include 'vistas/contratos/contratos/editar_convocado.php';
               
    }       



    public function insertar() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();                 

        $resp = $ContratosModel->insertar(
            $_POST["numproceso_contrato"],
            $_POST["valproceso_contrato"],
            $_POST["fadjudicacionproceso_contrato"],
            $_POST["fcierreproceso_contrato"],
            $_POST["modalidad_contrato"],
            $_POST["tipo_contrato"],
            $_POST["objeto_contrato"]
        );        
        
        if( $resp != 0 ){
            /*
            mkdir('archivos/uploads/contratos/'.$resp);

            $ContratosModel->insertar_trazabilidad(
                $resp,
                "Registró el Radicado No. ".$numero_contrato
            );    

            $radicado = $ContratosModel->getDatos($resp);

            
            $mensaje = "Se le ha asignado un nuevo radicado, el cual se detalla a continuación: <br><br>";             



            $mensaje .= "Radicado No.: ". $radicado['numero_radicado']."<br>";
            $mensaje .= "Remitente: ".$radicado['nombre_tercero']."<br>";
            $mensaje .= "Destinatario: ". $radicado['nombres_contratista']." ".$radicado['apellidos_contratista']."<br>";
         
            
            $mensaje .= "<br><br><br><br>"; 

          

            
            $mensaje .= "<center>Sistema Estratégico de Transporte Público de Santa Marta S.A.S.</center><br>";      
            $mensaje .= "<center>PBX. (57-5) 4317777 </center><br>";      
            $mensaje .= "<center>Cl. 24 No. 3-99, Edificio Banco de Bogotá – Oficina 1202</center><br>";      
            $mensaje .= "<center>www.setpsantamarta.gov.co</center><br>";    



            $correo1 = "icabana@solati.com.co";
            $nombre1 = "Ismael";



            //echo $this->EnviarCorreo($mensaje, $asunto, $correo1, $nombre1);
            
  

            echo $resp;
*/
        }else{

            echo 0;			

        }      
        
    }
    /*
    public function guardar() {
        
        $this->model->cargar("ContratosModel.php", 'contratos');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->editar(
                                    $_POST["id_contrato"], 
                                    $_POST["numero_contrato"],
                                    $_POST["remitente_contrato"],
                                    $_POST["enviadopor_contrato"],
                                    $_POST["destinatario_contrato"],
                                    $_POST["fecharadicado_contrato"],
                                    $_POST["fechamaxima_contrato"],
                                    $_POST["prioridad_contrato"],
                                    $_POST["numerofolios_contrato"],
                                    $_POST["descripcionfolios_contrato"],
                                    $_POST["asunto_contrato"],
                                    $_POST["tiporadicado_contrato"],
                                    $_POST["responsable_contrato"],
                                    $_POST["serie_contrato"],
                                    $_POST["subserie_contrato"],
                                    $_POST["tipodocumental_contrato"],
                                    $_POST["tieneanexos_contrato"]
                                );        
      
        if( $resp != 0 ){

            $ContratosModel->insertar_trazabilidad(
                $_POST["id_contrato"],
                "Modificó la información del radicado"
            );  

             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        
    public function guardarDatosArchivo() {
        
        $this->model->cargar("ContratosModel.php", 'contratos');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->guardarDatosArchivo(
                                    $_POST["contrato_archivo"], 
                                    $_POST["archivador_archivo"],
                                    $_POST["fechainicio_archivo"],
                                    $_POST["fechafinal_archivo"],
                                    $_POST["unidad_archivo"],
                                    $_POST["codigo_archivo"],
                                    $_POST["folios_archivo"],
                                    $_POST["anexos_archivo"]
                                );        
      
        if( $resp != 0 ){

            $ContratosModel->insertar_trazabilidad(
                $_POST["id_contrato"],
                "Se Modificó la información de Archivo"
            );  

             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        

    public function mover() {
        
        $this->model->cargar("ContratosModel.php", 'contratos');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->mover(
                                    $_POST["id_contrato"], 
                                    $_POST["carpeta_contrato"]
                                );        
      
        if( $resp != 0 ){

            $ContratosModel->insertar_trazabilidad(
                $_POST["id_contrato"],
                "Movió el radicado de carpeta"
            ); 

             echo 1;             
        }else{
            echo 0;		
        }
        
    }    


    public function nuevoDocumento() {
        
        $this->model->cargar("ContratosModel.php", 'contratos');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->nuevoDocumento(
                                    $_POST["id_contrato"], 
                                    $_POST["documento"]
                                );        
      
        if( $resp != 0 ){

            $ContratosModel->insertar_trazabilidad(
                $_POST["id_contrato"],
                "Agregó un nuevo documento"
            ); 

             echo 1; 

        }else{
            echo 0;		
        }
        
    }    


    public function cambiar() {
        
        $this->model->cargar("ContratosModel.php", 'contratos');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->cambiar(
                                    $_POST["id_contrato"], 
                                    $_POST["responsable_contrato"]
                                );        
      
       

            $ContratosModel->insertar_trazabilidad(
                $_POST["id_contrato"],
                "Cambió el responsable del radicado"
            ); 

        
    }    

*/

    public function eliminar() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        
        $ContratosModel->eliminar($_POST["id_contrato"]);
        
        echo "1";        
        
    }
   



             
 }