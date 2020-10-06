<?php
	
class Correos extends PHPMailer{
		
	public function __construct(){
		
		//Para Usar Gmail se debe activar la siguiente opción
		//https://myaccount.google.com/lesssecureapps

			$params = Parametros::singleton();
			
			$this->IsSMTP();
			$this->SMTPSecure = 'tls';
			$this->Host = 'smtp.gmail.com';
			$this->SMTPAuth= true;
			$this->Port = 587;                 
			$this->From = "ismael.cabana@gmail.com";
			$this->FromName = utf8_decode("ESSMAR E.S.P.");
			$this->Username = "ismael.cabana@gmail.com";
			$this->Password = "L0g1nT1m301012020*";
			$this->AltBody = "Enfocados en la Calidad";

			/* LEGALTEAM 
			$this->IsSMTP();

			$this->Host = 'mail.legalteamcolombia.co';
			$this->Port="587";
			$this->SMTPAuth = true;
			
			$this->FromName = "ESSMAR E.S.P.";
			$this->AltBody = "Enfocados en la Calidad";
			
			$this->Username = "contacto@legalteamcolombia.co";
			$this->Password = "Ismael777880428";
			
			$this->From = "contacto@logintime.co";
			*/

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