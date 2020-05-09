<?php

class ContratosControlador extends ControllerBase {


    public function index() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodos();

        include 'vistas/contratos/contratos/default.php';
                        
    }    



    public function nuevo(){


        include 'vistas/radicados/contratos/insertar.php';
        
    }

         


    public function nuevo_finalizados(){

        include 'vistas/radicados/contratos/insertar_finalizados.php';
        
    }

         

   
    
    
    public function editar(){

        include 'vistas/radicados/contratos/editar.php';
               
    }
         

    
    
    public function editarDatosArchivo(){

        

        include 'vistas/radicados/contratos/editar_archivo.php';
               
    }
         



    public function eliminarArchivo(){
        
        unlink($_POST['archivo']);

        $id_contrato = $_POST['id_contrato'];
        include 'vistas/radicados/contratos/tabla_documentos.php';
        echo $tabla_documentos;
               
    }

    


    public function actualizarDocumentos(){
        
        $id_contrato = $_POST['id_contrato'];
        include 'vistas/radicados/contratos/tabla_documentos.php';
        echo $tabla_documentos;
               
    }

    
    


    public function buscarRemitente() {

        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();

        $terceros = $TercerosModel->getTercerosLIKE($_POST['texto']);

        $tabla_terceros = "<table id='tabla_terceros'  class='table table-hover'>

            <thead>
                <tr>     
                    <th><center>NOMBRE</center></th> 
                </tr>
                </thead>
            <tbody>";

        foreach ($terceros as $clave => $valor) {

            $tabla_terceros .= "<tr onclick='seleccionar_remitente(" . $valor['id_tercero'] . ", \"" . ($valor['nombre_tercero']) . "\");'>";  
            $tabla_terceros .= "<td><strong>" . $valor['nombre_tercero'] . "</strong></td>";
            $tabla_terceros .= "</tr>";

        }

       $tabla_terceros .= "

            </tbody></table>";

        echo $tabla_terceros;

    }


    
      
    
    public function buscarDestinatario() {

        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();

        $contratistas = $ContratistasModel->getContratistasLIKE($_POST['texto']);

        $tabla_contratistas = "<table id='tabla_contratistas'  class='table table-hover'>

        <thead>
            <tr>     
                <th><center>NOMBRE</center></th> 
            </tr>
            </thead>
        <tbody>";

        foreach ($contratistas as $clave => $valor) {

            $tabla_contratistas .= "<tr onclick='seleccionar_destinatario(" . $valor['id_contratista'] . ", \"" . $valor['nombres_contratista'] . "\", \"" . $valor['apellidos_contratista'] . "\");'>";  
            $tabla_contratistas .= "<td><strong>" . $valor['nombres_contratista']." ".$valor['apellidos_contratista'] . "</strong></td>";
            $tabla_contratistas .= "</tr>";

        }

       $tabla_contratistas .= "

        </tbody></table>";

        echo $tabla_contratistas;

      }



    public function insertar() {
      
        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();                 

        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();                 

        $max_consecutivo = $ContratosModel->getConsecutivo() + 1;

        $cantidad = strlen($max_consecutivo);
        for($i=$cantidad; $i<5; $i++){
            $consecutivo2 .= "0"; 
        }

        $consecutivo = $consecutivo2.$max_consecutivo;
        $numero_contrato = date("Ymd").$consecutivo;
        
        $resp = $ContratosModel->insertar(
                                    $max_consecutivo,
                                    $numero_contrato,
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
                                    $_POST["saliente_contrato"],
                                    $_POST["tieneanexos_contrato"]
                                );        
        
        $SalientesModel->actualizarContrato($_POST["saliente_contrato"], $resp);

        if( $resp != 0 ){
            
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

        }else{

            echo 0;			

        }      
        
    }
    
    public function guardar() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
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
        
        $this->model->cargar("ContratosModel.php", 'radicados');
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
        
        $this->model->cargar("ContratosModel.php", 'radicados');
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
        
        $this->model->cargar("ContratosModel.php", 'radicados');
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
        
        $this->model->cargar("ContratosModel.php", 'radicados');
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

    public function nueva() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();            
    
        $ContratosModel->insertar_trazabilidad(
            $_POST["id_contrato"],
            $_POST["bitacora_contrato_editar"]
        ); 
        
    }    



    public function mover_default() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->mover_default(
                                    $_POST["radicados"], 
                                    $_POST["carpeta_contrato"]
                                );        
      
        if( $resp != 0 ){
            
            $array_radicados = explode(",", $_POST['radicados']);

            foreach($array_radicados as $array){

                if($array[0] != 0){
                    $ContratosModel->insertar_trazabilidad(
                        $array[0],
                        "Movió el radicado de carpeta"
                    ); 
                }
            }

             echo 1;             
        }else{
            echo 0;		
        }
        
    }    

    public function cambiar_default() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->cambiar_default(
                                    $_POST["radicados"], 
                                    $_POST["responsable_contrato"]
                                );        

                   
            $array_radicados = explode(",", $_POST['radicados']);

            foreach($array_radicados as $array){

                if($array[0] != 0){
                    $ContratosModel->insertar_trazabilidad(
                        $array[0],
                        "Se modificó el responsable del Radicado"
                    ); 
                }
            }

             echo 1;    

       
        
    }    


    public function cambiarestado_default() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->cambiarestado_default(
                                    $_POST["radicados"], 
                                    $_POST["estado_contrato"]
                                );        

                   
            $array_radicados = explode(",", $_POST['radicados']);

            foreach($array_radicados as $array){

                if($array[0] != 0){
                    $ContratosModel->insertar_trazabilidad(
                        $array[0],
                        "Se modificó el estado del Radicado"
                    ); 
                }
            }

             echo 1;    

       
        
    }    

    
    public function archivar_default() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->insertar_archivar(
                                    $_POST["radicados"], 
                                    $_POST["archivador"],
                                    $_POST["fechainicio"],
                                    $_POST["fechafinal"],
                                    $_POST["unidad"],
                                    $_POST["codigo"],
                                    $_POST["folios"],
                                    $_POST["anexos"]
                                );        

             echo 1;    
       
        
    }    



    public function cambiarestado() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->cambiarestado_default(
                                    $_POST["radicados"], 
                                    $_POST["estado_contrato"]
                                );        

                   
        $array_radicados = explode(",", $_POST['radicados']);

        foreach($array_radicados as $array){

            if($array[0] != 0){
                $ContratosModel->insertar_trazabilidad(
                    $array[0],
                    "Se modificó el estado del Radicado"
                ); 
            }
        }

            echo 1;    
        
    }    



    public function nueva_default() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();   
        
        $array_radicados = explode(",", $_POST['radicados']);

        foreach($array_radicados as $array){
    
            if($array[0] != 0){

                $ContratosModel->insertar_trazabilidad(
                    $array[0],
                    $_POST["bitacora_contrato"]
                ); 
                
            }

        }
        
    }    


    public function eliminar() {
        
        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        
        $ContratosModel->eliminar($_POST["radicados"]);
        
        echo "1";        
        
    }
   

    public function enviarBandejaContrato() {
        
        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        
        $ContratosModel->enviarBandejaContrato($_POST["radicados"]);

        
        $array_radicados = explode(",", $_POST['radicados']);

        foreach($array_radicados as $array){
    
            if($array[0] != 0){

                $ContratosModel->insertar_trazabilidad(
                    $array[0],
                    "Envió el radicado nuevamente a la Bandeja de Entrada"
                ); 
                
            }

        }
        
        echo "1";        
        
    }
   

    
    function EnviarCorreo($mensaje, $asunto, $correo1='', $nombre1=''){
                         
        $mails = new Correos();
        
        if($correo1 != ""){
            $mails->AddBCC( $correo1, $nombre1 );        
        }
           
                        
        $mails->Subject = $asunto;          
        $mails->Body = $mensaje;              
                 
        $enviado = $mails->Send();         
            
        if($enviado){
            echo   "EL MENSAJE FUE ENVIADO ".$mails->ErrorInfo;                     
        }else{
            echo "NO FUE POSIBLE ENVIAR EL MENSAJE ".$mails->ErrorInfo;             
        }  
        
    }

    
    public function cargarSubseriesContratos() {
        
        $froms = new Formularios();
         
        $this->model->cargar("SubseriesModel.php", "administracion");
        $SubseriesModel = new SubseriesModel();

        $subseries = $SubseriesModel->getTodosPorSerie($_POST['id_serie_contrato']);

        echo $froms->Lista_Desplegable(
            $subseries,
            'nombre_subserie',
            'id_subserie',
            'subserie_contrato',
            '',
            '',
            'cargar_tiposdocumentales_contratos()'
        );

    }       
             
        
    public function cargarTiposdocumentalesContratos() {
        
        $froms = new Formularios();
        
        $this->model->cargar("TiposdocumentalesModel.php", "administracion");
        $TiposdocumentalesModel = new TiposdocumentalesModel();

        $tiposdocumentales = $TiposdocumentalesModel->getTodosPorSubserie($_POST['id_subserie_contrato']);

        echo $froms->Lista_Desplegable(
            $tiposdocumentales,
            'nombre_tipodocumental',
            'id_tipodocumental',
            'tipodocumental_contrato',
            '',
            '',
            ''
        );

    }     

             
 }