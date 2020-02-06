<?php
/*
$servidor = ""; //configuración hosting
$usuario = ""; //creado desde hosting
$clave = "";//creado desde hosting
$base = "";//creado desde hosting
*/
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base = "fancupcake";

//php cuenta con funciones nativas para trabajar con mysql
//si no hay conexión, se redirecciona a otro documento
$cnx = mysqli_connect($servidor, $usuario, $clave, $base) or die(header("Location:../mantenimiento.html"));    

?>






