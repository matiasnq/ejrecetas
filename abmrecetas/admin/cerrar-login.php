<?php session_start();//si sabemos que vamos a trabajar con sesiones la manera de que persistan esas referencias entre los documentos es activando session_start()

session_destroy();//desactiva-destruye todas las sesiones, $_SESSION queda vacío
//unset($_SESSION['ingreso']); //borra un índice en particular

 //redirección al formulario de login
header("Location:index.php?acceso=salir"); 





?>