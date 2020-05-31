<?php

class ContratosControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodos();        
        
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel = new SupervisoresModel();
        $supervisores_select = $SupervisoresModel->getTodos();
        
        $this->model->cargar("ContratistasModel.php", "actores");
        $ContratistasModel = new ContratistasModel();
        $contratistas_select = $ContratistasModel->getTodos();
        
        $this->model->cargar("TipospagoModel.php", "administracion");
        $TipospagoModel = new TipospagoModel();
        $tipospago_select = $TipospagoModel->getTodos();      
        
        $this->model->cargar("TiposajustesModel.php", "administracion");
        $TiposajustesModel = new TiposajustescontratoModel();
        $tiposajustes_select = $TiposajustesModel->getTodos();     
          
        include 'vistas/contratos/contratos/default.php';
                        
    }    


    public function indexFinanciera() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodosxEstado(3);        
        
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel = new SupervisoresModel();
        $supervisores_select = $SupervisoresModel->getTodos();
        
        $this->model->cargar("ContratistasModel.php", "actores");
        $ContratistasModel = new ContratistasModel();
        $contratistas_select = $ContratistasModel->getTodos();
        
        $this->model->cargar("TipospagoModel.php", "administracion");
        $TipospagoModel = new TipospagoModel();
        $tipospago_select = $TipospagoModel->getTodos();      
        
        $this->model->cargar("TiposajustesModel.php", "administracion");
        $TiposajustesModel = new TiposajustescontratoModel();
        $tiposajustes_select = $TiposajustesModel->getTodos();     
          
        include 'vistas/contratos/contratos/default_financiera.php';
                        
    }    
    
    public function index_x_estado() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodosxEstado($_POST['estado']);        
        
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel = new SupervisoresModel();
        $supervisores_select = $SupervisoresModel->getTodos();
        
        $this->model->cargar("ContratistasModel.php", "actores");
        $ContratistasModel = new ContratistasModel();
        $contratistas_select = $ContratistasModel->getTodos();
        
        $this->model->cargar("TipospagoModel.php", "administracion");
        $TipospagoModel = new TipospagoModel();
        $tipospago_select = $TipospagoModel->getTodos();      
        
        $this->model->cargar("TiposajustesModel.php", "administracion");
        $TiposajustesModel = new TiposajustescontratoModel();
        $tiposajustes_select = $TiposajustesModel->getTodos();     
        
          
        include 'vistas/contratos/contratos/default.php';
                        
    }    

    
    public function index_fila() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contrato = $ContratosModel->getDatos($_POST['id_contrato']);    
          
        include 'vistas/contratos/contratos/fila_contratos.php';
                        
    }    

    
    public function busquedaAvanzada(){
        
        $this->model->cargar("ModalidadesModel.php", "administracion");
        $ModalidadesModel = new ModalidadesModel();
        $modalidades = $ModalidadesModel->getTodos();

        $this->model->cargar("TiposcontratoModel.php", "administracion");
        $Tiposcontrato = new TiposcontratoModel();
        $tiposcontrato = $Tiposcontrato->getTodos();
        
        include 'vistas/contratos/contratos/busqueda_avanzada.php';
        
    }  


    public function busquedaAvanzadaFinanciera(){
        
        $this->model->cargar("ModalidadesModel.php", "administracion");
        $ModalidadesModel = new ModalidadesModel();
        $modalidades = $ModalidadesModel->getTodos();

        $this->model->cargar("TiposcontratoModel.php", "administracion");
        $Tiposcontrato = new TiposcontratoModel();
        $tiposcontrato = $Tiposcontrato->getTodos();
        
        include 'vistas/contratos/contratos/busqueda_avanzada_financiera.php';
        
    }  

    
    public function realizarBusquedaAvanzada() {
        
        $array_rango = explode(";", $_POST['range_1']);

        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodosAvanzada(
                                            $_POST['modalidad_busqueda'], 
                                            $_POST['tipocontrato_busqueda'],
                                            $_POST['fechainicio_busqueda'],
                                            $_POST['fechafinal_busqueda'],
                                            $array_rango
                                        );        
        
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel = new SupervisoresModel();
        $supervisores_select = $SupervisoresModel->getTodos();
        
        $this->model->cargar("ContratistasModel.php", "actores");
        $ContratistasModel = new ContratistasModel();
        $contratistas_select = $ContratistasModel->getTodos();
        
        $this->model->cargar("TipospagoModel.php", "administracion");
        $TipospagoModel = new TipospagoModel();
        $tipospago_select = $TipospagoModel->getTodos();      
        
        $this->model->cargar("TiposajustesModel.php", "administracion");
        $TiposajustesModel = new TiposajustescontratoModel();
        $tiposajustes_select = $TiposajustesModel->getTodos();     
                  
        include 'vistas/contratos/contratos/default.php';
                        
    }    

    
    public function realizarBusquedaAvanzadaFinanciera() {
        
        $array_rango = explode(";", $_POST['range_1']);

        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodosAvanzadaFinanciera(
                                            $_POST['modalidad_busqueda'], 
                                            $_POST['tipocontrato_busqueda'],
                                            $_POST['fechainicio_busqueda'],
                                            $_POST['fechafinal_busqueda'],
                                            $array_rango
                                        );        
        
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel = new SupervisoresModel();
        $supervisores_select = $SupervisoresModel->getTodos();
        
        $this->model->cargar("ContratistasModel.php", "actores");
        $ContratistasModel = new ContratistasModel();
        $contratistas_select = $ContratistasModel->getTodos();
        
        $this->model->cargar("TipospagoModel.php", "administracion");
        $TipospagoModel = new TipospagoModel();
        $tipospago_select = $TipospagoModel->getTodos();      
        
        $this->model->cargar("TiposajustesModel.php", "administracion");
        $TiposajustesModel = new TiposajustescontratoModel();
        $tiposajustes_select = $TiposajustesModel->getTodos();     
                  
        include 'vistas/contratos/contratos/default_financiera.php';
                        
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
        $SupervisoresModel = new SupervisoresContratosModel();
        $supervisores = $SupervisoresModel->getTodosxContrato($_POST['id_contrato']);

        $this->model->cargar("CdpsModel.php", "contratos");
        $CdpsModel = new CdpsContratosModel();
        $cdps = $CdpsModel->getTodosxContrato($_POST['id_contrato']);
        
        $this->model->cargar("RpsModel.php", "contratos");
        $RpsModel = new RpsContratosModel();
        $rps = $RpsModel->getTodosxContrato($_POST['id_contrato']);
        
        $this->model->cargar("PagosModel.php", "contratos");
        $PagosModel = new pagosContratosModel();
        $pagos = $PagosModel->getTodosxContrato($_POST['id_contrato']);
        
        $this->model->cargar("AjustesModel.php", "contratos");
        $AjustesModel = new AjustesContratosModel();
        $ajustes = $AjustesModel->getTodosxContrato($_POST['id_contrato']);
        
        $this->model->cargar("ProrrogasModel.php", "contratos");
        $ProrrogasModel = new ProrrogasContratosModel();
        $prorrogas = $ProrrogasModel->getTodosxContrato($_POST['id_contrato']);
        
        $this->model->cargar("TrazabilidadModel.php", "contratos");
        $TrazabilidadModel = new TrazabilidadModel();
        $trazabilidad = $TrazabilidadModel->getTodosxContrato($_POST['id_contrato']);

        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel2 = new SupervisoresModel();
        $supervisores_select = $SupervisoresModel2->getTodos();
        
        $this->model->cargar("TipospagoModel.php", "administracion");
        $TipospagoModel = new TipospagoModel();
        $tipospago_select = $TipospagoModel->getTodos();      
        
        $this->model->cargar("TiposajustesModel.php", "administracion");
        $TiposajustesModel = new TiposajustescontratoModel();
        $tiposajustes_select = $TiposajustesModel->getTodos();            
       
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contrato = $ContratosModel->getDatos($_POST['id_contrato']);        

        $this->model->cargar("DocumentosModel.php", "administracion");
        $DocumentosModel = new DocumentosModel();
        $documentos = $DocumentosModel->getTodosxModalidad($contrato['modalidad_contrato']); 

        include 'vistas/contratos/contratos/editar.php';
               
    }       
    

    public function editarFinanciera(){
       
        $this->model->cargar("ModalidadesModel.php", "administracion");
        $ModalidadesModel = new ModalidadesModel();
        $modalidades = $ModalidadesModel->getTodos();

        $this->model->cargar("TiposcontratoModel.php", "administracion");
        $Tiposcontrato = new TiposcontratoModel();
        $tiposcontrato = $Tiposcontrato->getTodos();
        
        $this->model->cargar("SupervisoresModel.php", "contratos");
        $SupervisoresModel = new SupervisoresContratosModel();
        $supervisores = $SupervisoresModel->getTodosxContrato($_POST['id_contrato']);

        $this->model->cargar("CdpsModel.php", "contratos");
        $CdpsModel = new CdpsContratosModel();
        $cdps = $CdpsModel->getTodosxContrato($_POST['id_contrato']);
        
        $this->model->cargar("RpsModel.php", "contratos");
        $RpsModel = new RpsContratosModel();
        $rps = $RpsModel->getTodosxContrato($_POST['id_contrato']);
        
        $this->model->cargar("PagosModel.php", "contratos");
        $PagosModel = new pagosContratosModel();
        $pagos = $PagosModel->getTodosxContrato($_POST['id_contrato']);
        
        $this->model->cargar("AjustesModel.php", "contratos");
        $AjustesModel = new AjustesContratosModel();
        $ajustes = $AjustesModel->getTodosxContrato($_POST['id_contrato']);
        
        $this->model->cargar("ProrrogasModel.php", "contratos");
        $ProrrogasModel = new ProrrogasContratosModel();
        $prorrogas = $ProrrogasModel->getTodosxContrato($_POST['id_contrato']);
        
        $this->model->cargar("TrazabilidadModel.php", "contratos");
        $TrazabilidadModel = new TrazabilidadModel();
        $trazabilidad = $TrazabilidadModel->getTodosxContrato($_POST['id_contrato']);

        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel2 = new SupervisoresModel();
        $supervisores_select = $SupervisoresModel2->getTodos();
        
        $this->model->cargar("TipospagoModel.php", "administracion");
        $TipospagoModel = new TipospagoModel();
        $tipospago_select = $TipospagoModel->getTodos();      
        
        $this->model->cargar("TiposajustesModel.php", "administracion");
        $TiposajustesModel = new TiposajustescontratoModel();
        $tiposajustes_select = $TiposajustesModel->getTodos();            
       
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contrato = $ContratosModel->getDatos($_POST['id_contrato']);        

        $this->model->cargar("DocumentosModel.php", "administracion");
        $DocumentosModel = new DocumentosModel();
        $documentos = $DocumentosModel->getTodosxModalidad($contrato['modalidad_contrato']); 

        include 'vistas/contratos/contratos/editar_financiera.php';
               
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

            require_once("controladores/contratos/TrazabilidadControlador.php");
            $TrazabilidadControlador = new TrazabilidadControlador();      

            $TrazabilidadControlador->insertarExterno($resp, "Registró un nuevo contrato");

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
    
    public function guardar() {
        
        $this->model->cargar("ContratosModel.php", 'contratos');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->editar(
                $_POST["id_contrato"], 
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
            $ContratosModel->insertar_trazabilidad(
                $_POST["id_contrato"],
                "Modificó la información del radicado"
            );  
            */

             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        /*
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
   
    
    public function descartar() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        
        $ContratosModel->descartar($_POST["id_contrato"]);
        
        echo "1";        
        
    }
   

    
    public function adjudicar() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        
        $ContratosModel->adjudicar(
            $_POST["id_contrato"], 
            $_POST["contratista_adjudicar"]
        );
        
        echo "1";        
        
    }

      
    public function celebrar() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        
        $ContratosModel->celebrar(
            $_POST["id_contrato"], 
            $_POST["numero_contra"],
            $_POST["fechainicio_contra"],
            $_POST["fechafinal_contra"],
            $_POST["valor_contra"]
        );
        
        echo "1";        
        
    }

    
    public function liquidar() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        
        $ContratosModel->liquidar($_POST["id_contrato"]);
        
        echo "1";        
        
    }
   

    
    public function eliminarDocumento() {
        
        unlink($_POST['archivo']);

        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        
        $contratos = $ContratosModel->getTodos($_POST['id_contrato']);

        include("vistas/contratos/contratos/tabla_contratos.php");             
        
    }

    public function actualizarDocumento() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();        
        
        $contratos = $ContratosModel->getTodos($_POST['id_contrato']);

        include("vistas/contratos/contratos/tabla_contratos.php");                  
        
    }


             
 }