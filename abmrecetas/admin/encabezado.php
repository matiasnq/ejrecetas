<?php session_start();//si sabemos que vamos a trabajar con sesiones la manera de que persistan esas referencias entre los documentos es activando session_start()
 
//si no está seteado el índice 'ingreso'
if(!isset($_SESSION['ingreso'])){
	 //redirección al formulario de login
    // misterio resuelto... faltata Location:
   header("Location:index.php?acceso=denegado"); 
}



?>
		<header  class="encabezado"> 
			<img src="../imagenes/logo.jpg" alt="Logo" />
			<h1>Bienvenido Administrador</h1> 
			<nav class="menu logout">
				<ul>
					<li><a href="cerrar-login.php">Cerrar Sesión</a></li> 
				</ul>														 
			</nav>
		</header>