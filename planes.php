<?php
require_once 'core/Planes.php';

//CREAR PLAN
/*
try {
    $descripcion="prueba de plan ";
	$codigo_plan="888-666";
	$intervalo="MONTH";
	$cantidad_intervalos="1";
	$moneda="COP";
	$valor="50000";
	$impuesto="0";
	$base_devolucion="0";
	$total_cobros="12";
	$dias_de_prueba="0";
	$p=new Planes();
	var_dump($p->crear($descripcion,$codigo_plan,$intervalo,$cantidad_intervalos,$moneda,$valor,$impuesto,$base_devolucion,$total_cobros,$dias_de_prueba));
	//ID PLAN 4e5d10d4-b027-45b6-b767-c29d4f343258 para 666
} catch (Exception $e) {
    echo 'Excepción: ',  $e->getMessage(), "\n";
}*/
//CONSULTA DE PLAN
/*try {
$p=new Planes();
 var_dump($p->consultar('888-666'));
} catch(Exception $e){
	echo 'Excepción: ',  $e->getMessage(), "\n";
}*/

//ACTUALIZAR PLAN
/*try {
    $nueva_descripcion="prueba de plan  <.|.>";
	$nuevo_codigo="888-666";
	$nueva_moneda="COP";
	$nuevo_valor="55000";
	$nuevo_impuesto="0";
	$nuevo_retorno_base="0";
	$total_cobros="12";
	$total_rechazos="1";
	$total_pendiente="1";
	$intervalos_intentos="2";
	$p=new Planes();
	var_dump($p->actualizar($nueva_descripcion,$nuevo_codigo,$nueva_moneda,$nuevo_valor,$nuevo_impuesto,$nuevo_retorno_base,$intervalos_intentos,$total_rechazos,$total_pendiente));
	
} catch (Exception $e) {
    echo 'Excepción: ',  $e->getMessage(), "\n";
}*/

//ELIMINAR PLAN
/*try{
 $p=new Planes();
 var_dump($p->eliminar('888-666'));
}catch(Exception $e){
	echo 'Excepción: ',  $e->getMessage(), "\n";
}*/