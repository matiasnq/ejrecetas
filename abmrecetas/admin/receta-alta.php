<?php
require("../php/conexion.php");//si sabemos que vamos a trabajar con consultas a la base de datos, tiene que estar vinculada la variable $cnx

//los índices en $_POST son el valor del atributo name="" en el campo de formulario
$titulo = $_POST['variedad'];
$ingredientes = $_POST['ingredientes'];
$pasos = $_POST['pasos'];
$foto = $_FILES['foto']; //otra variable superglobal, guarda información de archivos adjuntos, es una matriz, por lo tanto tiene subíndices para poder acceder a las características de cada archivo si hubiera múltiples adjuntos
//var_dump($_FILES);

if($_FILES['foto']['size'] > 0
  &&
	($_FILES['foto']['type'] == 'image/pjpeg'
	|| $_FILES['foto']['type'] == 'image/jpeg')
  ){    
  /*
  la proposición anterior evalúa:
  que el tamaño del adjunto con índice 'foto' sea mayor a 0
  y que
	el tipo de imagen sea formato pjpeg (formato preferido en entornos viejos windows pero que también pueden leerse con la extensión .jpg) 
	ó 
	jpeg (formato estándar para archivos con extensión .jpg)
	

  
  */
  
  //concatenar un nombre de archivo para la imagen, con la intención de que no se pisen los nombres de archivo
    $nombrearchivo = time()."-nombre-marca.jpg";
	
	
  //  move_uploaded_file() espera la ruta de origen -que es una de las características del adjunto, y la ruta de destino en el servidor
    move_uploaded_file($_FILES['foto']['tmp_name'], $nombrearchivo);    
}


//disparar la consulta de insersión a la base de datos 
mysqli_query($cnx, "INSERT INTO recetas(quenivel, ingredientes, pasos, foto, titulo, fechapub) VALUES('a','$ingredientes', '$pasos', '$nombrearchivo', '$titulo', NOW())");








?>