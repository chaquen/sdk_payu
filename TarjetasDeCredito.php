<?php
require_once 'Config.php';

class TarjetasDeCredito{

	static function crear($id_cliente,$nombre_pagador,$numero_tarjeta,$expira,$franquicia,$documento_tarjeta,$documento_pagador,$direccion1,$direccion2,$direccion3,$ciudad,$estado,$pais,$codigo_postal,$telefono){
	 	$parameters = array(
			// Ingresa aquí el identificador del cliente,
			PayUParameters::CUSTOMER_ID => $id_cliente,
			// Ingresa aquí el nombre del cliente
			PayUParameters::PAYER_NAME => $nombre_pagador,
			// Ingresa aquí el número de la tarjeta de crédito
			PayUParameters::CREDIT_CARD_NUMBER => $numero_tarjeta,
			// Ingresa aquí la fecha de expiración de la tarjeta de crédito en formato AAAA/MM
			PayUParameters::CREDIT_CARD_EXPIRATION_DATE => $expira,
			// Ingresa aquí el nombre de la franquicia de la tarjeta de crédito VISA
			PayUParameters::PAYMENT_METHOD => $franquicia,
		        // Ingresa aquí el documento de identificación asociado a la tarjeta
			PayUParameters::CREDIT_CARD_DOCUMENT => $documento_tarjeta,
			// (OPCIONAL) Ingresa aquí el documento de identificación del pagador
			PayUParameters::PAYER_DNI => $documento_tarjeta,
			// (OPCIONAL) Ingresa aquí la primera línea de la dirección del pagador
			PayUParameters::PAYER_STREET => $direccion1,
			// (OPCIONAL) Ingresa aquí la segunda línea de la dirección del pagador
			PayUParameters::PAYER_STREET_2 => $direccion2,
			// (OPCIONAL) Ingresa aquí la tercera línea de la dirección del pagador
			PayUParameters::PAYER_STREET_3 => $direccion3,
			// (OPCIONAL) Ingresa aquí la ciudad de la dirección del pagador
			PayUParameters::PAYER_CITY => $ciudad,
			// (OPCIONAL) Ingresa aquí el estado o departamento de la dirección del pagador
			PayUParameters::PAYER_STATE => $estado,
			// (OPCIONAL) Ingresa aquí el código del país de la dirección del pagador
			PayUParameters::PAYER_COUNTRY => $pais,
			// (OPCIONAL) Ingresa aquí el código postal de la dirección del pagador
			PayUParameters::PAYER_POSTAL_CODE => $codigo_postal,
			// (OPCIONAL) Ingresa aquí el número telefónico del pagador
			PayUParameters::PAYER_PHONE => $telefono
		);

		$response = PayUCreditCards::create($parameters);

		if($response){
			return $response->token;
		}
		return false;
	}
	static function actualizar($id_token,$nombre_pagador,$numero_tarjeta,$expira,$franquicia,$documento_tarjeta,$documento_pagador,$direccion1,$direccion2,$direccion3,$ciudad,$estado,$pais,$codigo_postal,$telefono){
	 	$parameters = array(
			// Ingresa aquí el identificador del token de la tarjeta.
			PayUParameters::TOKEN_ID => $id_token,
			// Ingresa aquí el nombre del cliente
			PayUParameters::PAYER_NAME => $nombre_pagador,
			// Ingresa aquí la fecha de expiración de la tarjeta de crédito en formato AAAA/MM
			PayUParameters::CREDIT_CARD_EXPIRATION_DATE => $expira,
			    // Ingresa aquí el documento de identificación asociado a la tarjeta
			PayUParameters::CREDIT_CARD_DOCUMENT => $documento_tarjeta,
			// (OPCIONAL) Ingresa aquí el documento de identificación del pagador
			PayUParameters::PAYER_DNI => $documento_pagador,
			// (OPCIONAL) Ingresa aquí la primera línea de la dirección del pagador
			PayUParameters::PAYER_STREET => $direccion1,
			// (OPCIONAL) Ingresa aquí la segunda línea de la dirección del pagador
			PayUParameters::PAYER_STREET_2 => $direccion2,
			// (OPCIONAL) Ingresa aquí la tercera línea de la dirección del pagador
			PayUParameters::PAYER_STREET_3 =>$direccion3,
			// (OPCIONAL) Ingresa aquí la ciudad de la dirección del pagador
			PayUParameters::PAYER_CITY => $ciudad,
			// (OPCIONAL) Ingresa aquí el estado o departamento de la dirección del pagador
			PayUParameters::PAYER_STATE => $estado,
			// (OPCIONAL) Ingresa aquí el código del país de la dirección del pagador
			PayUParameters::PAYER_COUNTRY => $moneda,
			// (OPCIONAL) Ingresa aquí el código postal de la dirección del pagador
			PayUParameters::PAYER_POSTAL_CODE => $codigo_postal,
			// (OPCIONAL) Ingresa aquí el número telefónico del pagador
			PayUParameters::PAYER_PHONE =>$telefono
		);

		$response= PayUCreditCards::update($parameters);

		if($response){
			return $response;
		}
		return false;
	}
	static function consultar($id){
	 	$parameters = array(
			// Ingresa aquí el identificador del token de la tarjeta.
			PayUParameters::TOKEN_ID => $id
		);

		$response = PayUCreditCards::find($parameters);

		if($response){
			$response->token;
			$response->number;
			$response->type;
			$response->name;
		    $response->document;
			$address=$response->address;
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
	static function eliminar($id,$id_cliente){
	 	$parameters = array(
			// Ingresa aquí el identificador del token de la tarjeta.
			PayUParameters::TOKEN_ID => $id,
			// Ingresa aquí el identificador del cliente,
			PayUParameters::CUSTOMER_ID => $id_cliente
		);

		$response = PayUCreditCards::delete($parameters);

		if($response){
			return $response;
		}
		return false;

	}
}