<?php

require_once 'Config.php';


Class Suscripciones{

	/*static function crear_todo_nuevo(){
		$parameters = array(
			// Ingresa aquí el número de cuotas a pagar.
			PayUParameters::INSTALLMENTS_NUMBER => "1",
			// Ingresa aquí la cantidad de días de prueba
			PayUParameters::TRIAL_DAYS => "10",

			// -- Parámetros del cliente --
			// Ingresa aquí el nombre del cliente
			PayUParameters::CUSTOMER_NAME => "Pedro Perez",
			// Ingresa aquí el email del cliente
			PayUParameters::CUSTOMER_EMAIL => "pperezz@payulatam.com",

			// -- Parámetros de la tarjeta de crédito --
			// Ingresa aquí el nombre del pagador.
			PayUParameters::PAYER_NAME => "Sample User Name",
			// Ingresa aquí el número de la tarjeta de crédito
			PayUParameters::CREDIT_CARD_NUMBER => "4242424242424242",
			// Ingresa aquí la fecha de expiración de la tarjeta de crédito en formato AAAA/MM
			PayUParameters::CREDIT_CARD_EXPIRATION_DATE => "2014/12",
			// Ingresa aquí el nombre de la franquicia de la tarjeta de crédito
			PayUParameters::PAYMENT_METHOD => "VISA",
		        // Ingresa aquí el documento de identificación asociado a la tarjeta
		        PayUParameters::CREDIT_CARD_DOCUMENT => "1020304050",
			// (OPCIONAL) Ingresa aquí el documento de identificación del pagador
			PayUParameters::PAYER_DNI => "1020304050",
			// (OPCIONAL) Ingresa aquí la primera línea de la dirección del pagador
			PayUParameters::PAYER_STREET => "Address Name",
			// (OPCIONAL) Ingresa aquí la segunda línea de la dirección del pagador
			PayUParameters::PAYER_STREET_2 => "17 25",
			// (OPCIONAL) Ingresa aquí la tercera línea de la dirección del pagador
			PayUParameters::PAYER_STREET_3 => "Of 301",
			// (OPCIONAL) Ingresa aquí la ciudad de la dirección del pagador
			PayUParameters::PAYER_CITY => "City Name",
			// (OPCIONAL) Ingresa aquí el estado o departamento de la dirección del pagador
			PayUParameters::PAYER_STATE => "State Name",
			// (OPCIONAL) Ingresa aquí el código del país de la dirección del pagador
			PayUParameters::PAYER_COUNTRY => "CO",
			// (OPCIONAL) Ingresa aquí el código postal de la dirección del pagador
			PayUParameters::PAYER_POSTAL_CODE => "00000",
			// (OPCIONAL) Ingresa aquí el número telefónico del pagador
			PayUParameters::PAYER_PHONE => "300300300",

			// -- Parámetros del plan --
			// Ingresa aquí la descripción del plan
			PayUParameters::PLAN_DESCRIPTION => "Sample Plan 001",
			// Ingresa aquí el código de identificación para el plan
			PayUParameters::PLAN_CODE => "sample-plan-code-001",
			// Ingresa aquí el intervalo del plan
			PayUParameters::PLAN_INTERVAL => "MONTH",
			// Ingresa aquí la cantidad de intervalos
			PayUParameters::PLAN_INTERVAL_COUNT => "1",
			// Ingresa aquí la moneda para el plan
			PayUParameters::PLAN_CURRENCY => "COP",
			// Ingresa aquí el valor del plan
			PayUParameters::PLAN_VALUE => "10000",
			//(OPCIONAL) Ingresa aquí el valor del impuesto
			PayUParameters::PLAN_TAX => "1600",
			//(OPCIONAL) Ingresa aquí la base de devolución sobre el impuesto
			PayUParameters::PLAN_TAX_RETURN_BASE => "8400",
			// Ingresa aquí la cuenta Id del plan
			PayUParameters::ACCOUNT_ID => "512321",
			// Ingresa aquí el intervalo de reintentos
			PayUParameters::PLAN_ATTEMPTS_DELAY => "1",
			// Ingresa aquí la cantidad de cobros que componen el plan
			PayUParameters::PLAN_MAX_PAYMENTS => "12",
			// Ingresa aquí la cantidad total de reintentos para cada pago rechazado de la suscripción
			PayUParameters::PLAN_MAX_PAYMENT_ATTEMPTS => "3",
			// Ingresa aquí la cantidad máxima de pagos pendientes que puede tener una suscripción antes de ser cancelada.
			PayUParameters::PLAN_MAX_PENDING_PAYMENTS => "1",
			// Ingresa aquí la cantidad de días de prueba de la suscripción.
			PayUParameters::TRIAL_DAYS => "30",
		);

		$response = PayUSubscriptions::createSubscription($parameters);

		if($response){
			$response->id;
			$response->plan->id;
			$response->customer->id;
		}
	}*/
	static function crear_elementos_existentes($id_plan,$id_cliente,$id_token,$prueba,$numero_cuotas){
		$parameters = array(
		// Ingresa aquí el código del plan a suscribirse.
		PayUParameters::PLAN_CODE => $id_plan,
		// Ingresa aquí el identificador del pagador.
		PayUParameters::CUSTOMER_ID => $id_cliente,
		// Ingresa aquí el identificador del token de la tarjeta.
		PayUParameters::TOKEN_ID => $id_token,
		// Ingresa aquí la cantidad de días de prueba de la suscripción.
		PayUParameters::TRIAL_DAYS => $prueba,
		// Ingresa aquí el número de cuotas a pagar.
		PayUParameters::INSTALLMENTS_NUMBER => $numero_cuotas,
		);

		$response = PayUSubscriptions::createSubscription($parameters);

		if($response){
		 return $response->id;
		}
		return false;
	}
	static function crear_suscripcion_tarjeta_nueva($num_cuotas,$dias_prueba,$id_cliente,$nombre_pagador,$numero_tarjeta,$expira,$franquicia,$documento_tarjeta,$documento_cliente,$direccion1,$direccion2,$direccion3,$ciudad,$estado,$pais,$codigo_postal,$telefono,$codigo_plan){
		$parameters = array(
			// Ingresa aquí el número de cuotas a pagar.
			PayUParameters::INSTALLMENTS_NUMBER => $num_cuotas,
			// Ingresa aquí la cantidad de días de prueba
			PayUParameters::TRIAL_DAYS => $dias_prueba,

			// -- Parámetros del cliente --
			// Ingresa aquí el identificador del pagador.
			PayUParameters::CUSTOMER_ID => $id_cliente,

			// -- Parámetros de la tarjeta de crédito --
			// Ingresa aquí el nombre del pagador.
			PayUParameters::PAYER_NAME => $nombre_pagador,
			// Ingresa aquí el número de la tarjeta de crédito
			PayUParameters::CREDIT_CARD_NUMBER => $numero_tarjeta,
			// Ingresa aquí la fecha de expiración de la tarjeta de crédito en formato AAAA/MM
			PayUParameters::CREDIT_CARD_EXPIRATION_DATE => $expira,
			// Ingresa aquí el nombre de la franquicia de la tarjeta de crédito
			PayUParameters::PAYMENT_METHOD => $franquicia,
		        // Ingresa aquí el documento de identificación asociado a la tarjeta
		        PayUParameters::CREDIT_CARD_DOCUMENT => $documento_tarjeta,
			// (OPCIONAL) Ingresa aquí el documento de identificación del pagador
			PayUParameters::PAYER_DNI => $documento_cliente,
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
			PayUParameters::PAYER_PHONE => $telefono,

			// -- Parámetros del plan --
			// Ingresa aquí el código del plan a suscribirse.
			PayUParameters::PLAN_CODE =>$codigo_plan,
		 );

		$response = PayUSubscriptions::createSubscription($parameters);

		if($response){
			return $response->id;
		}
		 return false;
	}
	static function crear_suscripcion_plan_nuevo($num_cuotas,$dias_prueba,$id_cliente,$id_token,$descripcion_plan,$codigo_plan,$intervalo_plan,$cantidad_intervalos,$moneda,$valor,$impuesto,$base_retorno,){
		$parameters = array(
			// Ingresa aquí el número de cuotas a pagar.
			PayUParameters::INSTALLMENTS_NUMBER => $num_cuotas,
			// Ingresa aquí la cantidad de días de prueba
			PayUParameters::TRIAL_DAYS => $dias_prueba,

			// -- Parámetros de la tarjeta de crédito --
			// Ingresa aquí el identificador del pagador.
			PayUParameters::CUSTOMER_ID => $id_cliente,
			// Ingresa aquí el identificador del token de la tarjeta.
			PayUParameters::TOKEN_ID => $id_token,

			// -- Parámetros del plan --
			// Ingresa aquí la descripción del plan
			PayUParameters::PLAN_DESCRIPTION => $descripcion_plan,
			// Ingresa aquí el código de identificación para el plan
			PayUParameters::PLAN_CODE => $codigo_plan,
			// Ingresa aquí el intervalo del plan
			PayUParameters::PLAN_INTERVAL => $intervalo,
			// Ingresa aquí la cantidad de intervalos
			PayUParameters::PLAN_INTERVAL_COUNT => $cantidad_intervalos,
			// Ingresa aquí la moneda para el plan
			PayUParameters::PLAN_CURRENCY => $moneda,
			// Ingresa aquí el valor del plan
			PayUParameters::PLAN_VALUE => $valor,
			//(OPCIONAL) Ingresa aquí el valor del impuesto
			PayUParameters::PLAN_TAX => $impuesto,
			//(OPCIONAL) Ingresa aquí la base de devolución sobre el impuesto
			PayUParameters::PLAN_TAX_RETURN_BASE => $base_retorno,
			// Ingresa aquí la cuenta Id del plan
			PayUParameters::ACCOUNT_ID => _ACCOUNT_ID,
			// Ingresa aquí el intervalo de reintentos
			PayUParameters::PLAN_ATTEMPTS_DELAY => _INTERVALO_INTENTOS,
			// Ingresa aquí la cantidad de cobros que componen el plan
			PayUParameters::PLAN_MAX_PAYMENTS => $numero_cuotas,
			// Ingresa aquí la cantidad total de reintentos para cada pago rechazado de la suscripción
			PayUParameters::PLAN_MAX_PAYMENT_ATTEMPTS => _TOTAL_REINTENTOS_RECHAZO,
			// Ingresa aquí la cantidad máxima de pagos pendientes que puede tener una suscripción antes de ser cancelada.
			PayUParameters::PLAN_MAX_PENDING_PAYMENTS => _TOTAL_PENDIENTES,
			// Ingresa aquí la cantidad de días de prueba de la suscripción.
			PayUParameters::TRIAL_DAYS => $dias_de_prueba,
		);

		$response = PayUSubscriptions::createSubscription($parameters);

		if($response){
			return [$response->id,$response->plan->id];
		}

		return false;

	}
	static function actualizar(){/*NO DISPONIBLE*/}
	static function consultar(){/*NO DISPONIBLE*/}
	static function eliminar($id){
		$parameters = array(
			// Ingresa aquí el ID de la suscripción.
			PayUParameters::SUBSCRIPTION_ID => $id,
		);

		$response = PayUSubscriptions::cancel($parameters);

		if($response){
		}
	}
}