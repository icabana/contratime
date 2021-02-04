<?php
	
class Correos extends PHPMailer{
		
	public function __construct(){
		
		//Para Usar Gmail se debe activar la siguiente opción
		//https://myaccount.google.com/lesssecureapps

		$params = Parametros::singleton();
		
		
		/* LEGALTEAM */
			$this->IsSMTP();

			$this->Host = 'relay-hosting.secureserver.net';
			
			
			$this->FromName = "ESSMAR";
			$this->AltBody = "Empresa de Servicios Públicos del Distrito de Santa Marta.";
			
			
			$this->From = "contacto@essmarcontratos.co";
	   
		

		}
	
		function agregarDestinos($str){			
			$cc = explode(';', $str);
			foreach($cc as $ccMail ){
				$dtsCC = explode(',', $ccMail );
				$this->AddAddress($dtsCC[1],$dtsCC[0]);	
			}
			
		}
	
		function agregarCC($strCC){			
			$cc = explode(';', $strCC);
			foreach($cc as $ccMail ){
				$dtsCC = explode(',', $ccMail );
				$this->AddCC($dtsCC[1],$dtsCC[0]);	
			}
			
		}
	
		function agregarCCO($str){			
			$cc = explode(';', $str);
			foreach($cc as $ccMail ){
				$dtsCC = explode(',', $ccMail );
				$this->AddBCC($dtsCC[1],$dtsCC[0]);	
			}			
		}	
		
		function agregarReenvio($str){
			$cc = explode(';', $str);
			foreach($cc as $ccMail ){
				$dtsCC = explode(',', $ccMail );
				$this->AddReplyTo($dtsCC[1],$dtsCC[0]);	
			}			
		}
		
		function EnviarCorreo($mensaje, $asunto, $correos, $path = ''){
			
			$this->AddBCC( 'ismael.cabana@gmail.com' );    

			foreach($correos as $correo){
				$this->AddBCC( $correo );                
			}
							
			$this->Subject = $asunto;          
			$this->Body = $mensaje;              

			if($path != ""){
				$this->AddAttachment($path);
			}
					 
			$enviado = $this->Send();         
				
			if($enviado){
				return   "Correo electrónico enviado Correctamente";
			}else{
				return "NO FUE POSIBLE ENVIAR EL MENSAJE ".$this->ErrorInfo;             
			}  
			
		}
	
	}
?>