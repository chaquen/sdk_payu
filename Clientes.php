<?php
require_once 'Config.php';


Class Clientes {
	static function crear(){
		$parameters = array(
			// Ingresa aquí el nombre del cliente
			PayUParameters::CUSTOMER_NAME => "Pedro Perez",
			// Ingresa aquí el correo del cliente
			PayUParameters::CUSTOMER_EMAIL => "pperez@payulatam.com"
		);

		$response = PayUCustomers::create($parameters);

		if($response) {
			$response->id;
		}
	}

	static function actualizar(){
		$parameters = array(
			// Ingresa aquí el identificador del cliente,
			PayUParameters::CUSTOMER_ID => "24978c6l3e",
			// Ingresa aquí el nombre del cliente
			PayUParameters::CUSTOMER_NAME => "Pedro Perez",
			// Ingresa aquí el correo del cliente
			PayUParameters::CUSTOMER_EMAIL => "pperez@payulatam.com"
		);
		$response = PayUCustomers::update($parameters);

		if($response){

		}
	}

	static function consultar(){
		$parameters = array(
			// Ingresa aquí el nombre del cliente
			PayUParameters::CUSTOMER_ID => "24978c6l3e",
		);
		$response = PayUCustomers::find($parameters);

		if($response) {
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
		}
	}

	static function eliminar(){
		$parameters = array(
			// Ingresa aquí el identificador del cliente,
			PayUParameters::CUSTOMER_ID => "24978c6l3e"
		);

		$response = PayUCustomers::delete($parameters);

		if($response){

		}
	}

}