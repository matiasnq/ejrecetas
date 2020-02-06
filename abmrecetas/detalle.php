 <?php
//valor del parámetro item en la url
$queitem = $_GET['item'];
//manda la consulta a la base de datos, devuelve un único registro dada la condición, se pide la correspondencia por el valor del primery key
$respuesta = mysqli_query($cnx, "SELECT recetas.*,  niveles.titulo AS elnivel FROM recetas LEFT JOIN niveles ON recetas.quenivel = niveles.idnivel WHERE idreceta=$queitem");
//atrapa el registro
$registroitem = mysqli_fetch_assoc($respuesta);

?>
<div class="migajas">				
<ul>
    <li><a href="index.php?seccion=recetario">Recetario</a></li>
    <li><?php
        //corrige el encoding
        echo mostrarTxt($registroitem['titulo']);
        ?></li>
</ul>				
</div>
			<h2><?php
                
        echo mostrarTxt($registroitem['titulo']);
        ?></h2> 
			<p>
<?php
                //el valor del alias como nombre de campo
echo "Nivel: ".$registroitem['elnivel']."<br>";

?>

               Fecha de Publicación: <?php
             //para dar formato a una fecha guardada en la base de datos, hay que pasarla por strtotime()   
$fecha = strtotime($registroitem['fechapub']);
//date() define la salida de ese formato de fecha
$fechaformato = date("j/n/Y", $fecha);
 //imprime en el código fuente               
 echo $fechaformato;
                
                
                ?></p>
			<div class="detalle"> 
				<img src="imagenes/default-foto.jpg" alt="Variedad: " class="pic"/>
				
				<h3>Ingredientes</h3>
				<ul> 
				<?php
                    //todos los ingredientes están en el mismo campo, separados por una coma
                    
   $losingredientes = $registroitem['ingredientes'];       
    //explode() convierte un string en un array, definiendo un caracter que lo separe                
   $arrayi = explode(",", $losingredientes);
                    
   foreach($arrayi as $v){
       //si es un array, podemos recorrerlo para imprimir la estructura que necesitamos
       echo "<li>".mostrarTxt($v)."</li>";
   }                 
                    
                    ?>
					 
				</ul>
				
				<h3>Pasos</h3>
				<ol>
					<li>derretir la manteca con un poco de canela</li>
					<li>freir con eso la banana</li>
					<li>dejar enfrian y pisar ocn el tenedor, mandar a la heladera 15min</li>
					<li>mezclar rayadura de chocolate a la mezcla y usar para la base de la masa de la magdalena</li>
				</ol> 
				 
			</div>
			
			
			
			<div class="recetas-aleatorias">
			<h4>Otras Recetas</h4>
				<div class="item">
					<a href="detalle.html">
						<img src="imagenes/default-foto.jpg" alt="Foto"/>
					<span>Nombre Variedad</span></a>
				</div>			
				<div class="item">
					<a href="detalle.html">
						<img src="imagenes/default-foto.jpg" alt="Foto"/>
					<span>Nombre Variedad mas Largo</span></a>
				</div>
				<div class="item">
					<a href="detalle.html">
						<img src="imagenes/default-foto.jpg" alt="Foto"/>
					<span>Nombre Variedad</span></a>
				</div>
			</div>
		 
		
	
<?php mysqli_close($cnx); ?>