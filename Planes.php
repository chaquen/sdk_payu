<?php
require_once 'Config.php';


Class Planes {

	static function  crear($descripcion,$codigo_plan,$intervalo,$cantidad_intervalos,$moneda,$valor,$impuesto,$base_devolucion,$total_cobros,$dias_de_prueba){
		$plan = array(
			// Ingresa aquí la descripción del plan
			PayUParameters::PLAN_DESCRIPTION => $descripcion,
			// Ingresa aquí el código de identificación para el plan
			PayUParameters::PLAN_CODE => $codigo_plan,
			// Ingresa aquí el intervalo del plan
			//DAY||WEEK||MONTH||YEAR
			PayUParameters::PLAN_INTERVAL => $intervalo,
			// Ingresa aquí la cantidad de intervalos
			PayUParameters::PLAN_INTERVAL_COUNT => $cantidad_intervalos,
			// Ingresa aquí la moneda para el plan COP
			PayUParameters::PLAN_CURRENCY => $moneda,
			// Ingresa aquí el valor del plan
			PayUParameters::PLAN_VALUE => $valor,
			//(OPCIONAL) Ingresa aquí el valor del impuesto
			PayUParameters::PLAN_TAX => $impuesto,
			//(OPCIONAL) Ingresa aquí la base de devolución sobre el impuesto
			PayUParameters::PLAN_TAX_RETURN_BASE => $base_devolucion,
			// Ingresa aquí la cuenta Id del plan
			PayUParameters::ACCOUNT_ID => _ACCOUNT_ID,
			// Ingresa aquí el intervalo de reintentos
			PayUParameters::PLAN_ATTEMPTS_DELAY => _INTERVALO_INTENTOS,
			// Ingresa aquí la cantidad de cobros que componen el plan
			PayUParameters::PLAN_MAX_PAYMENTS => $total_cobros,
			// Ingresa aquí la cantidad total de reintentos para cada pago rechazado de la suscripción
			PayUParameters::PLAN_MAX_PAYMENT_ATTEMPTS => _TOTAL_REINTENTOS_RECHAZO,
			// Ingresa aquí la cantidad máxima de pagos pendientes que puede tener una suscripción antes de ser cancelada.
			PayUParameters::PLAN_MAX_PENDING_PAYMENTS => _TOTAL_PENDIENTES,
			// Ingresa aquí la cantidad de días de prueba de la suscripción.
			PayUParameters::TRIAL_DAYS => $dias_de_prueba,
		);

		$response = PayUSubscriptionPlans::create($plan);
		if($response){
			return $response->id;
		}
		return false;
	}

	static function actualizar($nueva_descripcion,$nuevo_codigo,$nueva_moneda,$nuevo_valor,$nuevo_impuesto,$nuevo_retorno_base,$total_rechazos,$total_pendiente){
		$plan = array(
			// Ingresa aquí la descripción del plan
			PayUParameters::PLAN_DESCRIPTION => $nueva_descripcion,
			// Ingresa aquí el código de identificación para el plan
			PayUParameters::PLAN_CODE => $nuevo_codigo,
			// Ingresa aquí la moneda para el plan
			PayUParameters::PLAN_CURRENCY => $nueva_moneda,
			// Ingresa aquí el valor del plan
			PayUParameters::PLAN_VALUE => $nuevo_valor,
			//(OPCIONAL) Ingresa aquí el valor del impuesto
			PayUParameters::PLAN_TAX => $nuevo_impuesto,
			//(OPCIONAL) Ingresa aquí la base de devolución sobre el impuesto
			PayUParameters::PLAN_TAX_RETURN_BASE => $nuevo_retorno_base,
			// Ingresa aquí el intervalo de reintentos
			PayUParameters::PLAN_ATTEMPTS_DELAY => $intervalos_intentos,
			// Ingresa aquí la cantidad total de reintentos para cada pago rechazado de la suscripción
			PayUParameters::PLAN_MAX_PAYMENT_ATTEMPTS => $total_rechazos,
			// Ingresa aquí la cantidad máxima de pagos pendientes que puede tener una suscripción antes de ser cancelada.
			PayUParameters::PLAN_MAX_PENDING_PAYMENTS => $total_pendiente,
		);

		$response = PayUSubscriptionPlans::update($plan);
		var_dump($response);
		if($response){

		}
	}

	static function consultar($codigo){
		$parameters = array(
			// Ingresa aquí el código de identificación para el plan
			PayUParameters::PLAN_CODE => $codigo,
		);

		$response = PayUSubscriptionPlans::find($parameters);
		return $response;
	} 

	static function eliminar($codigo){
		$parameters = array(
			// Ingresa aquí el código de identificación para el plan
			PayUParameters::PLAN_CODE => $codigo,
		);

		$response = PayUSubscriptionPlans::delete($parameters);
		var_dump($response);
		if($response) {
		}
	}
}