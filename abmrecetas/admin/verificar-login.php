<?php session_start(); //si sabemos que vamos a trabajar con sesiones la manera de que persistan esas referencias entre los documentos es activando session_start()
include("../php/conexion.php"); //lo mismo para las consultas a la base de datos, tiene que estar vinculada la variable $cnx

//mysqli_real_escape_string() escapa los caracteres para prevenir inyecciones sql, es importante para los campos que terminan dentro de una consulta sql
$correo = mysqli_real_escape_string($cnx, trim($_POST['mail'])) ;

$clave = mysqli_real_escape_string($cnx, trim($_POST['clave']));

$consulta = mysqli_query($cnx, "SELECT * FROM administradores WHERE correo = '$correo' AND clave = SHA1('$clave') ");

if($registro = mysqli_fetch_assoc($consulta)){
    //si atrapa un registro la función mysqli_fetch_assoc() quiere decir existe secorresponden los datos ingresados por el usuario y los que existen en la base
   $_SESSION['ingreso'] = $correo;
    //redirección al panel
   header("Location:panel.php"); 
    
}else{
    //redirección al formulario de login
   header("Location:index.php?log=error"); 
    
}



?>