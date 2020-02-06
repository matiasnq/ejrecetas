<?php
//manda la consulta a la base de datos, devuelve los registros seleccionados
$respuesta = mysqli_query($cnx, "SELECT idreceta, titulo, foto FROM recetas");
//cuenta la cantidad de registros devueltos por la consulta
$cantidad = mysqli_num_rows($respuesta);


?>
		<h2>Nuestro Recetario</h2>
		<p>Tenemos en total <?php 
            //imprime la cantidad
            echo $cantidad; 
            
            ?> recetas y contando...</p>
		
		
		<div class="recetas-catalogo">
		
<?php
        //mientras devuelva un registro
    while($registro = mysqli_fetch_assoc($respuesta)){ 
        
        //imprime en el codigo fuente
  ?>		
		<div class="item">
			<a href="index.php?seccion=detalle&item=<?php echo $registro['idreceta'];/*usamos el identificador, que al ser la clave primaria nos asegura que sea único por registro */?>">
				<img src="<?php
        //los condicionales puede usarse para establecer estados, en este caso una imagen por defautl
                if($registro['foto'] == null){
                    //el campo en la base de datos es null
                    echo "imagenes/default-foto.jpg";
                }else{
                    echo 'admin/'.$registro['foto'];
                }                       
                          
                          ?>" alt="Foto"/>
			<span><?php 
        //la función mostrarTxt() existe en el documento encoding.php, corrige los caracteres especiales
        echo mostrarTxt($registro['titulo']); ?></span></a>
		</div>
       <?php        
    }
    
    mysqli_close($cnx);        
            
?>            
			
								
													 
		
		
		</div>
		
	