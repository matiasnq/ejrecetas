
	
		<h2>Completá el siguiente formulario</h2>
			<p>Para consultas y suscripciones dejanos tu mensaje.</p>	
			
<?php

if(isset($_GET['rta'])){
    
  if($_GET['rta'] == 'error'){
     echo "Los Campos Nombre, Mail y Mensaje son obligatorios";       
  }elseif ($_GET['rta'] == 'ok'){
      echo 'Se envió su consulta correctamente';
  } elseif ($_GET['rta'] == 'mastarde'){
      echo 'Intentá enviar el formulario en otro momento';
  }  
    
}


?>


			<div class="contenedor-formulario">
				<form method="POST" action="php/form-contacto.php" class="caja">
				 
					<label for="nombre">Nombre:</label>
					<input name="nombre"  id="nombre" type="text" /> 
				 
					<label for="mail">Mail:</label>
					<input name="mail"  id="mail" type="email" />
				 
					<label for="mensaje">Mensaje:</label>
					<textarea cols="20" rows="6" name="mensaje"  id="mensaje"></textarea>
			 
					<input name="suscripcion" id="suscripcion" type="checkbox" checked  />
					<label for="suscripcion">Suscribirme al Newsletter. </label> 
				 
					<input type="submit" value="Enviar" /> 
					
				</form>	
			</div> 
			
		





 