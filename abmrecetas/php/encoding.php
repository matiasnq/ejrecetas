<?php


/*esta función recibirá una cadena de texto y la convierte a utf8, para prevenir posibles errores de codificación que surgen cuando hay distintos  orígenes de fuentes de datos*/

function mostrarTxt($valor){
	//1ro averiguamos que codificación tenía
	$codificacion = mb_detect_encoding($valor, "UTF-8, ISO-8859-1");
	//2do sea cual fuere, la convierte a utf-8		
	$valor = iconv($codificacion, "UTF-8", $valor);	
	//devolvemos la cadena de texto codificada a utf8
	return $valor;	
};

?>