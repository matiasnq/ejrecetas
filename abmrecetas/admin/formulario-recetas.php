<?php
//si existe el parámetro editar, el formulario deberá actualizar un registro, en vez de crear uno nuevo
$esEditar = isset($_GET['editar']) ? $_GET['editar'] : false;


?>
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
    
		<section class="seccion panel">
		
			<h2>
            <?php
                //si es modo edición, actualiza título
   if($esEditar){echo "Editar ";}else {echo "Nueva ";}          
                
                ?> Receta</h2> 
			 	<a href="panel.html">
				<span class="icon-arrow-left2" aria-hidden="true"></span>
				Volver al listado
			  </a> 
		   
			
			<div class="contenedor-formulario">
				<form method="POST" action="<?php
         //si es modo edición, actualiza el php que procesa el formulario
                                            
   if(!$esEditar){echo "receta-alta.php";}else {echo "receta-edicion.php";}          
                
                ?>" enctype="multipart/form-data" >
				 
					<label for="variedad">Variedad:</label>
					<input name="variedad"  id="variedad" type="text" />  
				 
					<label for="ingredientes">Ingredientes (separados por coma):</label>
					<textarea cols="20" rows="4" name="ingredientes"  id="ingredientes"></textarea>
				 
					<label for="pasos">Pasos (separados por punto):</label>
					<textarea cols="20" rows="4" name="pasos"  id="pasos"></textarea>
					
					<label for="foto">Foto (.jpg):</label>
					<input name="foto"  id="foto" type="file" />  
				 
				 
					<input type="submit" value="Alta Nueva Receta" /> 
					
				</form>	
			</div><!-- fin .contenedor-form -->	    
		</section> 	
	<footer class="pie">
	Copyright &copy 2017 | <a href="mailto:mail@professionalwebmaster.com.ar">Professional Webmaster</a>
	</footer>
   
   
  
</body>
</html> 