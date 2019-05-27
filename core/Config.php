<?php
require_once 'Datos.php';
require_once 'payu-php-sdk-4.5.6/lib/PayU.php';

PayU::$apiKey=_API_KEY;
PayU::$apiLogin = _API_LOGIN; //Ingrese aquí su propio apiLogin.
PayU::$merchantId = _MERCHANT_ID; 
PayU::$language = SupportedLanguages::ES; //ESPAÑOL.
PayU::$isTest = true; //Dejarlo True cuando sean pruebas
//se debe configurar el API para que dirija las peticiones a la URL correspondientes utilizando la clase Environment 
if(PayU::$isTest){
	echo "TEST ";
	// URL de Pagos
	$urlPayments="https://sandbox.api.payulatam.com/payments-api/4.0/service.cgi";
	// URL de Consultas
	$urlReports="https://sandbox.api.payulatam.com/reports-api/4.0/service.cgi";
	// URL de Suscripciones para Pagos Recurrentes
	$urlSuscription="https://sandbox.api.payulatam.com/payments-api/rest/v4.9/";
}else{
	// URL de Pagos
    $urlPayments="https://api.payulatam.com/payments-api/4.0/service.cgi";	
    // URL de Consultas
    $urlReports="https://api.payulatam.com/reports-api/4.0/service.cgi";
    // URL de Suscripciones para Pagos Recurrentes
    $urlSuscription="https://api.payulatam.com/payments-api/rest/v4.9/";
}	

	// // URL de Pagos
	Environment::setPaymentsCustomUrl($urlPayments);
	// URL de Consultas
	Environment::setReportsCustomUrl($urlReports);
	// URL de Suscripciones para Pagos Recurrentes
	Environment::setSubscriptionsCustomUrl($urlSuscription);




