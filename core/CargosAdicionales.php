<?php
require_once 'Config.php';

class CargosAdicionales{

 static function crear($cargo_extra,$valor,$moneda,$id_sus,$impuesto,$retorno_base){
 	$parameters = array(
		//Descripción del item
		PayUParameters::DESCRIPTION => $cargo_extra,
		//Valor del item
		PayUParameters::ITEM_VALUE => $valor,
		//Moneda
		PayUParameters::CURRENCY => $moneda,
		//Identificador de la subscripción
		PayUParameters::SUBSCRIPTION_ID => $id_sus,
		//Impuestos - opcional
		PayUParameters::ITEM_TAX => $impuesto,
		//Base de devolución - opcional
		PayUParameters::ITEM_TAX_RETURN_BASE => $retorno_base,
	);

	$response = PayURecurringBillItem::create($parameters);

	if($response){
		return $response->id;
	}

 }
 static function actualizar($id_cargo_extra,$nuevo_cargo_extra,$nuevo_valor,$nueva_moneda,$nuevo_impuesto,$nuevo_retorno_base){
 	$parameters = array(
		//Identificador del cargo extra
		PayUParameters::RECURRING_BILL_ITEM_ID => $id_cargo_extra,
		//Descripción del item
		PayUParameters::DESCRIPTION => $nuevo_cargo_extra,
		//Valor del item
		PayUParameters::ITEM_VALUE => $nuevo_valor,
		//Moneda
		PayUParameters::CURRENCY => $nueva_moneda,
		//Impuestos - opcional
		PayUParameters::ITEM_TAX => $nuevo_impuesto,
		//Base de devolución - opcional
		PayUParameters::ITEM_TAX_RETURN_BASE => $nuevo_retorno_base,
	);

	$response = PayURecurringBillItem::update($parameters);

	if($response){
		return $response;
	}
 }
 static function consultar($id){
 	$parameters = array(
		//Identificador del cargo extra
		PayUParameters::RECURRING_BILL_ITEM_ID => $id,
	);

	$response = PayURecurringBillItem::find($parameters);

	if($response){
		$response->description;
		$response->subscriptionId;
		$response->recurringBillId;
	}

 }
 static function eliminar($id){
 	$parameters = array(
		//Identificador del cargo extra
		PayUParameters::RECURRING_BILL_ITEM_ID => $id,
	);

	$response = PayURecurringBillItem::delete($parameters);

	if($response){
		return $response;
	}
 }
}