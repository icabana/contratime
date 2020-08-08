<?php

class ContratosControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodos();        
        
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel = new SupervisoresModel();
        $supervisores_select = $SupervisoresModel->getTodos();
        
        $this->model->cargar("EncargadosModel.php", "actores");
        $EncargadosModel = new EncargadosModel();
        $encargados_select = $EncargadosModel->getTodos();
        
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
        
        $this->model->cargar("EncargadosModel.php", "actores");
        $EncargadosModel = new EncargadosModel();
        $encargados_select = $EncargadosModel->getTodos();

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
    

    public function indexSupervisor() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodosxSupervisor($_POST['estado']);        
        
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel = new SupervisoresModel();
        $supervisores_select = $SupervisoresModel->getTodos();
        
        $this->model->cargar("EncargadosModel.php", "actores");
        $EncargadosModel = new EncargadosModel();
        $encargados_select = $EncargadosModel->getTodos();

        $this->model->cargar("ContratistasModel.php", "actores");
        $ContratistasModel = new ContratistasModel();
        $contratistas_select = $ContratistasModel->getTodos();
        
        $this->model->cargar("TipospagoModel.php", "administracion");
        $TipospagoModel = new TipospagoModel();
        $tipospago_select = $TipospagoModel->getTodos();      
        
        $this->model->cargar("TiposajustesModel.php", "administracion");
        $TiposajustesModel = new TiposajustescontratoModel();
        $tiposajustes_select = $TiposajustesModel->getTodos();     
          
        include 'vistas/contratos/contratos/default_supervisor.php';
                        
    }    


    public function indexEncargado() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodosxEncargado($_POST['estados']);        
        
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel = new SupervisoresModel();
        $supervisores_select = $SupervisoresModel->getTodos();
        
        $this->model->cargar("EncargadosModel.php", "actores");
        $EncargadosModel = new EncargadosModel();
        $encargados_select = $EncargadosModel->getTodos();

        $this->model->cargar("ContratistasModel.php", "actores");
        $ContratistasModel = new ContratistasModel();
        $contratistas_select = $ContratistasModel->getTodos();
        
        $this->model->cargar("TipospagoModel.php", "administracion");
        $TipospagoModel = new TipospagoModel();
        $tipospago_select = $TipospagoModel->getTodos();      
        
        $this->model->cargar("TiposajustesModel.php", "administracion");
        $TiposajustesModel = new TiposajustescontratoModel();
        $tiposajustes_select = $TiposajustesModel->getTodos();     
          
        include 'vistas/contratos/contratos/default_encargado.php';
                        
    }    

    

    public function indexContratista() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodosxContratista();        
        
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel = new SupervisoresModel();
        $supervisores_select = $SupervisoresModel->getTodos();
        
        $this->model->cargar("EncargadosModel.php", "actores");
        $EncargadosModel = new EncargadosModel();
        $encargados_select = $EncargadosModel->getTodos();

        $this->model->cargar("ContratistasModel.php", "actores");
        $ContratistasModel = new ContratistasModel();
        $contratistas_select = $ContratistasModel->getTodos();
        
        $this->model->cargar("TipospagoModel.php", "administracion");
        $TipospagoModel = new TipospagoModel();
        $tipospago_select = $TipospagoModel->getTodos();      
        
        $this->model->cargar("TiposajustesModel.php", "administracion");
        $TiposajustesModel = new TiposajustescontratoModel();
        $tiposajustes_select = $TiposajustesModel->getTodos();     
          
        include 'vistas/contratos/contratos/default_contratista.php';
                        
    }    


    public function index_x_estado() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodosxEstado($_POST['estado']);        
        
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel = new SupervisoresModel();
        $supervisores_select = $SupervisoresModel->getTodos();
        
        $this->model->cargar("EncargadosModel.php", "actores");
        $EncargadosModel = new EncargadosModel();
        $encargados_select = $EncargadosModel->getTodos();

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
        
        $this->model->cargar("EstadoscontratosModel.php", "maestras");
        $EstadosContratosModel = new EstadosContratosModel();
        $estados = $EstadosContratosModel->getTodos();
        
        include 'vistas/contratos/contratos/busqueda_avanzada.php';
        
    }  


    public function busquedaAvanzadaFinanciera(){
        
        $this->model->cargar("ModalidadesModel.php", "administracion");
        $ModalidadesModel = new ModalidadesModel();
        $modalidades = $ModalidadesModel->getTodos();

        $this->model->cargar("TiposcontratoModel.php", "administracion");
        $Tiposcontrato = new TiposcontratoModel();
        $tiposcontrato = $Tiposcontrato->getTodos();
        
        $this->model->cargar("EstadoscontratosModel.php", "maestras");
        $EstadosContratosModel = new EstadosContratosModel();
        $estados = $EstadosContratosModel->getTodos();

        include 'vistas/contratos/contratos/busqueda_avanzada_financiera.php';
        
    }  

    
    public function realizarBusquedaAvanzada() {
        
        $array_rango = explode(";", $_POST['range_1']);

        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodosAvanzada(
            $_POST['modalidad_busqueda'], 
            $_POST['tipocontrato_busqueda'],
            $_POST['estado_busqueda'],
            $_POST['fechainicio_busqueda'],
            $_POST['fechafinal_busqueda'],
            $array_rango
        );        
        
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel = new SupervisoresModel();
        $supervisores_select = $SupervisoresModel->getTodos();
        
        $this->model->cargar("EncargadosModel.php", "actores");
        $EncargadosModel = new EncargadosModel();
        $encargados_select = $EncargadosModel->getTodos();

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
                                            $_POST['estado_busqueda'],
                                            $_POST['fechainicio_busqueda'],
                                            $_POST['fechafinal_busqueda'],
                                            $array_rango
                                        );        
        
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel = new SupervisoresModel();
        $supervisores_select = $SupervisoresModel->getTodos();
        
        $this->model->cargar("EncargadosModel.php", "actores");
        $EncargadosModel = new EncargadosModel();
        $encargados_select = $EncargadosModel->getTodos();

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

        $this->model->cargar("EncargadosModel.php", "contratos");
        $EncargadosModel = new EncargadosContratosModel();
        $encargados = $EncargadosModel->getTodosxContrato($_POST['id_contrato']);

        $this->model->cargar("CdpsModel.php", "contratos");
        $CdpsModel = new CdpsContratosModel();
        $cdps = $CdpsModel->getTodosxContrato($_POST['id_contrato']);
        
        $this->model->cargar("RpsModel.php", "contratos");
        $RpsModel = new RpsContratosModel();
        $rps = $RpsModel->getTodosxContrato($_POST['id_contrato']);
        
        $this->model->cargar("PagosModel.php", "contratos");
        $PagosModel = new pagosContratosModel();
        $pagos = $PagosModel->getTodosxContrato($_POST['id_contrato']);

        $this->model->cargar("PolizasModel.php", "contratos");
        $PolizasModel = new PolizasContratosModel();
        $polizas = $PolizasModel->getTodosxContrato($_POST['id_contrato']);
        
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
        
        $this->model->cargar("EncargadosModel.php", "actores");
        $EncargadosModel2 = new EncargadosModel();
        $encargados_select = $EncargadosModel2->getTodos();
        
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


    public function editarSupervisor(){
       
        $this->model->cargar("ModalidadesModel.php", "administracion");
        $ModalidadesModel = new ModalidadesModel();
        $modalidades = $ModalidadesModel->getTodos();

        $this->model->cargar("TiposcontratoModel.php", "administracion");
        $Tiposcontrato = new TiposcontratoModel();
        $tiposcontrato = $Tiposcontrato->getTodos();
        
        $this->model->cargar("SupervisoresModel.php", "contratos");
        $SupervisoresModel = new SupervisoresContratosModel();
        $supervisores = $SupervisoresModel->getTodosxContrato($_POST['id_contrato']);
    
        $this->model->cargar("EncargadosModel.php", "contratos");
        $EncargadosModel = new EncargadosContratosModel();
        $encargados = $EncargadosModel->getTodosxContrato($_POST['id_contrato']);

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

        include 'vistas/contratos/contratos/editar_supervisor.php';
               
    }       

    

    public function editarEncargado(){
       
        $this->model->cargar("ModalidadesModel.php", "administracion");
        $ModalidadesModel = new ModalidadesModel();
        $modalidades = $ModalidadesModel->getTodos();

        $this->model->cargar("TiposcontratoModel.php", "administracion");
        $Tiposcontrato = new TiposcontratoModel();
        $tiposcontrato = $Tiposcontrato->getTodos();
        
        $this->model->cargar("SupervisoresModel.php", "contratos");
        $SupervisoresModel = new SupervisoresContratosModel();
        $supervisores = $SupervisoresModel->getTodosxContrato($_POST['id_contrato']);

        $this->model->cargar("EncargadosModel.php", "contratos");
        $EncargadosModel = new EncargadosContratosModel();
        $encargados = $EncargadosModel->getTodosxContrato($_POST['id_contrato']);
        
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

        include 'vistas/contratos/contratos/editar_encargado.php';
               
    }       


    public function editarContratista(){
       
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

        include 'vistas/contratos/contratos/editar_contratista.php';
               
    }


    public function insertar() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();                 

        $resp = $ContratosModel->insertar(
            $_POST["numproceso_contrato"],
            $_POST["valproceso_contrato"],
            $_POST["faperturaproceso_contrato"],
            $_POST["favisoproceso_contrato"],
            $_POST["fpresentacionproceso_contrato"],
            $_POST["fevaluacionproceso_contrato"],
            $_POST["fadjudicacionproceso_contrato"],
            $_POST["fcierreproceso_contrato"],
            $_POST["modalidad_contrato"],
            $_POST["tipo_contrato"],
            $_POST["objeto_contrato"]
        );        
        
        if( $resp != 0 ){

            require_once("controladores/contratos/TrazabilidadControlador.php");
            $TrazabilidadControlador = new TrazabilidadControlador();      

            $TrazabilidadControlador->insertarExterno($resp, "Se Registró el contrato por primera vez, con estado Convocado");

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
            $_POST["faperturaproceso_contrato"],
            $_POST["favisoproceso_contrato"],
            $_POST["fpresentacionproceso_contrato"],
            $_POST["fevaluacionproceso_contrato"],
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
   

    public function eliminar() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        
        $ContratosModel->eliminar($_POST["id_contrato"]);
        
        echo "1";        
        
    }
   
    
    public function descartar() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();

        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();           
        
        
        $ContratosModel->descartar($_POST["id_contrato"]);

        $accion = "Se ha descartado este contrato";

       $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);  
        
        echo "1";        
        
    }
   

    
    public function adjudicar() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
         
        $this->model->cargar("ContratistasModel.php", "actores");
        $ContratistasModel = new ContratistasModel();

        $contratista = $ContratistasModel->getDatos($_POST["contratista_adjudicar"]);
        
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   
        
        $ContratosModel->adjudicar(
            $_POST["id_contrato"], 
            $_POST["contratista_adjudicar"]
        );

        $accion = "Se ha realizado la Adjudicación de este contrato al Contratista: ".$contratista["nombres_contratista"]." 
         ".$contratista["apellidos_contratista"].".";

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);  
        
        echo "1";        
        
    }

      
    public function celebrar() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();           
        
        $ContratosModel->celebrar(
            $_POST["id_contrato"], 
            $_POST["numero_contra"],
            $_POST["fechainicio_contra"],
            $_POST["fechafinal_contra"],
            $_POST["valor_contra"]
        );
        
        $accion = "Se ha Celebrado este contrato, y se le ha asignado el No.: ".$_POST["numero_contra"].", cuya vigencia es desde el ".$_POST["fechainicio_contra"]." hasta el ".$_POST["fechafinal_contra"];

       $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);

        echo "1";        
        
    }

    
    public function liquidarContrato() {
        
        //VALIDAR SI TIENE EL CONTRATO ADJUNTO
        $path = 'archivos/uploads/contratos/' . $_POST["id_contrato"] . '/';

        $directorio = dir($path);
        $num_archivos = 0;

        if (file_exists($path)) {

            while ($archivo = $directorio->read()) {

                if ($archivo != "." && $archivo != "..") {

                    $num_archivos++;
                }
            }
        }

        if ($num_archivos ==  0) {
            echo "notienecontratoadjunto";     
            return;
        }

        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();           

        $ContratosModel->liquidar($_POST["id_contrato"]);
        
        $accion = "Se ha Liquidado este contrato con No. de contrato: ".$_POST["numero_contra"].".";

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);
        
        echo "1";        
        
    }

    
    
    public function enviarContrato() {
        
        //VALIDAR SI TIENE EL CONTRATO ADJUNTO
        $path = 'archivos/uploads/contratos/' . $_POST["id_contrato"] . '/';

        $directorio = dir($path);
        $num_archivos = 0;

        if (file_exists($path)) {

            while ($archivo = $directorio->read()) {

                if ($archivo != "." && $archivo != "..") {

                    $num_archivos++;
                    $ruta_archivo = $path . $archivo;

                }
            }
        }

        if ($num_archivos ==  0) {
            echo "notienecontratoadjunto";     
            return;
        }

        //ENVIAR CORREO
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $param = new Parametros();
        $correo = new Correos();
        $datos_contrato = $ContratosModel->getDatos($_POST["id_contrato"]);

        $mensaje = file_get_contents("plantillas/correos/plantilla_contratos/index.html");
        
        $mensaje = str_replace("#nombre#", $datos_contrato['nombres_contratista']." ".$datos_contrato['apellidos_contratista'], $mensaje);
        $mensaje = str_replace("#numcontrato#", $datos_contrato['numproceso_contrato'], $mensaje);
        $mensaje = str_replace("#modalidad#", $datos_contrato['nombre_modalidad'], $mensaje);
        $mensaje = str_replace("#tipocontrato#", $datos_contrato['nombre_tipocontrato'], $mensaje);
        $mensaje = str_replace("#fecha_inicio#", $datos_contrato['fechaoinicio_contrato'], $mensaje);
        $mensaje = str_replace("#fecha_final#", $datos_contrato['fechafinal_contrato'], $mensaje);
        $mensaje = str_replace("#valor#", "$".number_format($datos_contrato['valor_contrato'],0,',','.'), $mensaje);

        $mensaje = str_replace("#nombre_empresa#",  $param->valor('empresa'), $mensaje);
        $mensaje = str_replace("#direccion#", $param->valor('direccion'), $mensaje);
        $mensaje = str_replace("#telefono#", $param->valor('telefono'), $mensaje);
        $mensaje = str_replace("#correo#", $param->valor('correo'), $mensaje);
        $mensaje = str_replace("#paginaweb#", $param->valor('paginaweb'), $mensaje);
        $mensaje = str_replace("#facebook#", $param->valor('facebook'), $mensaje);
        $mensaje = str_replace("#twitter#", $param->valor('twitter'), $mensaje);

        echo $correo->EnviarCorreo($mensaje, "Envío de Copia de Contrato", array($datos_contrato['correo_contratista']), $ruta_archivo);

        //GUARDAR TRAZABILIDAD        
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();           

        $accion = "Se ha Enviado una Copia del Contrato No. : ".$_POST["numero_contra"]." por correo al contratista este contrato con .";

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);
        
        echo "1";        
        
    }
   

    
    public function eliminarDocumento() {
        
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        unlink($_POST['archivo']);

        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        
        $contratos = $ContratosModel->getTodos($_POST['id_contrato']);

        $accion = "Se eliminó el documento (Contrato).";

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);   

        include("vistas/contratos/contratos/tabla_contratos.php");             
        
    }

    public function actualizarDocumento() {
        
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();        
        
        $contratos = $ContratosModel->getTodos($_POST['id_contrato']);

        $accion = "Se adjuntó el contrato (Documento)";

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);   

        include("vistas/contratos/contratos/tabla_contratos.php");                  
        
    }


    public function generarPdf(){
         
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();

        $contratos = $ContratosModel->getTodos();
          
        include("vistas/contratos/contratos/reportes/pdf.php");   
       
        $dirPdf = "archivos/reportes/contratos/contratos_".date("Y-m-d")."_.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    
    public function generarExcel(){
         
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();

        $contratos = $ContratosModel->getTodos();
                        
        $nombre_archivo = "contratos_".date('Y-m-d_H-i-s').".xls";        

        $ruta = dirname(__FILE__, 3)."/archivos/reportes/contratos/".$nombre_archivo;        

        include("vistas/contratos/contratos/reportes/excel.php");        
           
        echo "archivos/reportes/contratos/".$nombre_archivo;

    }
    
             
 }