<?php

require_once 'core/TarjetasDeCredito.php';
//CREAR
/*try{
	$t=new TarjetasDeCredito();
	$id_cliente="78a55r1egc30";
	$nombre_pagador="otro mansito";
	$numero_tarjeta="4097440000000004";
	$expira="2019/11";
	$franquicia="VISA";
	//opcionales
	$documento_tarjeta="";
	$documento_pagador="";
	$direccion1="";
	$direccion2="";
	$direccion3="";
	$ciudad="";
	$estado="";
	$pais="";
	$codigo_postal="";
	$telefono="";


	var_dump($t->crear($id_cliente,$nombre_pagador,$numero_tarjeta,$expira,$franquicia,$documento_tarjeta,$documento_pagador,$direccion1,$direccion2,$direccion3,$ciudad,$estado,$pais,$codigo_postal,$telefono));
	//TOKEN => d758588a-200f-478a-b4af-91442ffe791d
}catch(Exception $e){
	echo 'Excepción: ',  $e->getMessage(), "\n";
}*/
//ACTUALIZAR
/*try{
	//para actualziar se debe crear un nuevo token con la nueva tarjeta
	//
	$t=new TarjetasDeCredito();
	$id_cliente="78a55r1egc30";
	$nombre_pagador="otro mansito X";
	$numero_tarjeta="5471300000000003";
	$expira="2019/11";
	$franquicia="MASTERCARD";
	//opcionales
	


	$TK=$t->crear($id_cliente,$nombre_pagador,$numero_tarjeta,$expira,$franquicia);
    echo $TK;
	//
	//
	//NUEVOS DATOS
	if($TK!=false){
		$id_token=$TK;
		$nombre_pagador="tro mansito X";
		$numero_tarjeta="5471300000000003";
		$expira="2019/11";
		$franquicia="MasterCard";
		$documento_tarjeta="";

		$t->actualizar($id_token,$nombre_pagador,$numero_tarjeta,$expira,$franquicia,$documento_tarjeta);	
		//NUEVO TOKEN 4118a679-fb74-4b85-95d5-52766584fec6
	}else{
		echo "NO se ha creado la tarjeta, por favor revisa los datos ";
	}
	
}catch(Exception $e){
	echo 'Excepción: ',  $e->getMessage(), "\n";
}*/

//CONSULTAR
/*try{
	$t=new TarjetasDeCredito();
	var_dump($t->consultar("d758588a-200f-478a-b4af-91442ffe791d"));
	echo "=>=>=>=>";
	var_dump($t->consultar("4118a679-fb74-4b85-95d5-52766584fec6"));
}catch(Exception $e){
	echo 'Excepción: ',  $e->getMessage(), "\n";
}*/
//ELIMINAR
/*try{
	$t=new TarjetasDeCredito();
	var_dump($t->eliminar("d758588a-200f-478a-b4af-91442ffe791d","78a55r1egc30"));
}catch(Exception $e){
	echo 'Excepción: ',  $e->getMessage(), "\n";
}*/