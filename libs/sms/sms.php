<?php
	
	class SMS extends PHPMailer{

		
		public function __construct(){

		}

		
		function enviarSMS($telefono, $mensaje){

			$params = array('username'=>'sisga', 'password'=>'Sisga_231233', 'to'=>'573043881447', 'text'=>'Mensaje de Prueba');

			$url = "http://api.messaging-service.com/";

			$curl = curl_init();
		
			curl_setopt_array($curl, array(
				CURLOPT_URL => $url,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "POST",
				CURLOPT_POSTFIELDS => $params,
				CURLOPT_HTTPHEADER => array(
					"Authorization: Basic c2lzZ2E6U2lzZ2FfMjMxMjMz",
					"Content-Type: application/json"
				),
			));
			
			$response = curl_exec($curl);
			
			curl_close($curl);

			echo $response;
			
		}

		
	}
?>