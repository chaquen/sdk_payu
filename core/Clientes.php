<?php
require_once 'Config.php';


Class Clientes {
	static function crear($nombre,$email){

		/*if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  echo("$email no es una dirección de correo valida");
		}*/
		$parameters = array(
			// Ingresa aquí el nombre del cliente
			PayUParameters::CUSTOMER_NAME => $nombre,
			// Ingresa aquí el correo del cliente
			PayUParameters::CUSTOMER_EMAIL => $email
		);

		$response = PayUCustomers::create($parameters);

		if($response) {
			return $response->id;
		}
	}

	static function actualizar($id_payu,$nombre,$correo){
		$parameters = array(
			// Ingresa aquí el identificador del cliente,
			PayUParameters::CUSTOMER_ID => $id_payu,
			// Ingresa aquí el nombre del cliente
			PayUParameters::CUSTOMER_NAME => $nombre,
			// Ingresa aquí el correo del cliente
			PayUParameters::CUSTOMER_EMAIL => $correo
		);
		$response = PayUCustomers::update($parameters);
		return $response;
		if($response){

		}
	}

	static function consultar($id_payu){
		$parameters = array(
			// Ingresa aquí el nombre del cliente
			PayUParameters::CUSTOMER_ID => $id_payu,
		);
		$response = PayUCustomers::find($parameters);
		
		return $response;
		/*if($response) {
			$response->fullName;
			$response->email;
			$creditCards=$response->creditCards;

			foreach ($creditCards as $creditCard) {
				$creditCard->token;
				$creditCard->number;
				$creditCard->type;
				$creditCard->name;
				$address=$creditCard->address;
				$address->line1;
				$address->line2;
				$address->line3;
				$address->city;
				$address->state;
				$address->country;
				$address->postalCode;
				$address->phone;
			}
		}*/
	}

	static function eliminar($id_payu){
		$parameters = array(
			// Ingresa aquí el identificador del cliente,
			PayUParameters::CUSTOMER_ID => $id_payu
		);

		$response = PayUCustomers::delete($parameters);

		if($response){

		}
	}

}