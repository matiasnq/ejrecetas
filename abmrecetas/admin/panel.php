<!doctype html>
<html> 
<head>
	<meta charset="utf-8" /> 
	<title>Panel Web "Fanáticos del Cupcake!"</title>   
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Satisfy" rel="stylesheet">
	<link href="../icomoon/style.css" rel="stylesheet"> 
	<link href="../css/estilos.css" rel="stylesheet">  
</head>
<body>
   
   <?php
    
    require("encabezado.php");
    
    ?>
		<section  class="seccion panel">
			<h2>Panel: Nuestro Recetario</h2>
		 
			<a href="formulario-recetas.php">
				<span class="icon-plus-circle" aria-hidden="true"></span>
				Agregar Receta Nueva
			</a>   
			 
			<table class="data">
				<tr>
					<th> Foto</th>
					<th>Variedad</th>
					<th>Ingredientes</th>
					<th>Pasos</th>
					<th>acciones</th>
				</tr>
				
				
				<tr>
					<td><img src="../imagenes/default-foto.jpg" class="pic"/></td>
					<td>Nombre Variedad</td>
					<td>banana, chocolate, canela, manteca</td>
					<td>derretir la manteca con un poco de canela, freir con eso la banana, dejar enfrian y pisar con el tenedor, mandar a la heladera 15min. mezclar rayadura de chocolate a la mezcla. usar para la base de la masa de la magdalena.</td>
					<td>
						<a href="formulario-recetas.php?editar=">
							<span class="icon-pencil2" aria-hidden="true"></span>
							Editar
						</a> 
						<a href="#">
							<span class="icon-bin" aria-hidden="true"></span>
							Eliminar
						</a> 
					</td>
				</tr>
				
				
				
				 
			</table> 
		</section> 
	<footer class="pie">
	Copyright &copy 2017 | <a href="mailto:mail@professionalwebmaster.com.ar">Professional Webmaster</a>
	</footer>
	 
  
</body>
</html> 