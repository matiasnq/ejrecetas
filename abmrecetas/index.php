<?php
//vincular documentos críticos
require("php/conexion.php"); //vincula la variable $cnx a todo lo que quede volcado en esta plantilla
require("php/encoding.php"); //vincula la función mostrarTxt() para corregir los caracteres especiales


//estructura de datos del menú principal
$menu = array(
    'inicio' => 'Home',
    'recetario' => 'Recetario',
    'contacto' => 'Llamanos Ya'

);

//si existe o nó el parámetro seccion en la url, guardar el valor correspondiente
$queseccion = isset($_GET['seccion']) ? $_GET['seccion'] : 'inicio';


?>
<!doctype html>
<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Somos "Fanáticos del Cupcake!"</title>   
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Satisfy" rel="stylesheet">
	<link href="icomoon/style.css" rel="stylesheet"> 
	<link href="css/estilos.css" rel="stylesheet"> 
</head>
<body>
   

	<header class="encabezado"> 
		<img src="imagenes/logo.jpg" alt="Logo de Fanáticos del Cupcake!" />
		<h1>Somos "Fanáticos del Cupcake!"</h1>	
		<nav class="menu">
			<ul>
			<?php
	
      /* $queseccion = $_GET['seccion'];  
         var_dump($queseccion);
       */
      
//recorrer el array del menú, con sus llaves y valores	  
     foreach($menu as $k => $v){
     
		//si el valor de queseccion es igual a la llave de esta opción de menú, le corresponde la clase actual
		$clase = ($queseccion == $k) ? 'class="actual"' : '';
         
		//imprime en el código fuente la estructura del markup por opción de menú
        echo '<li><a href="index.php?seccion='.$k.'" '.$clase.'>'.$v.'</a></li>';
         
     }           
			
			?>
 
			</ul>
		</nav> 
	</header>
	<section class="seccion">		
		<?php
        //para resolver como plantilla la carga de los contenidos, se verifica con el switch la sección actual
       switch($queseccion){          
           case 'detalle':
             $ruta = "detalle.php" ; 
           break;
           case 'recetario':
             $ruta = "recetario.php" ; 
           break;
           case 'contacto':    
               $ruta = "contacto.php";
           break;
           case 'inicio':
           default:
               $ruta = "home.php";     
       } 
	   //para incluir el documento correspondiente según el caso
       include($ruta);        
        ?>			
	</section>		
	<footer class="pie">
	Copyright &copy 202* | <a href="mailto:mail@mipagina.com.ar">Pro Webmaster</a>
	</footer>
	
   
  
</body>
</html>







