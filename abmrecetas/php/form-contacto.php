<?php

//las variables guardan, el contenido de los campos del formulario, recortando lso espacios en blanco
$quenombre = trim($_POST['nombre']);
$quemail = trim($_POST['mail']);
$quemensaje = trim($_POST['mensaje']);

//var_dump($_POST);

//si la longitud de alguno de los campos es 0
if(
strlen($quenombre) == 0 ||
strlen($quemail) == 0 ||
strlen($quemensaje) == 0
){
    //alguno de estos campos o varios podían no tener contenido
   $respuesta = 'error'; 
    
}else{
    
    //todos los campos tienen contenido
    
    //envío de mail desde el servidor
    //podemos pasar como parámetros a las variables
    $destinatario = 'vs.meijide@gmail.com';
    $asunto = "Contacto desde la Web Recetario";
    
    //componer el mensaje 
    $mensaje = "";
    //recorre todos los campos que vienen por POST
    foreach($_POST as $k => $v){
        //concatena a la variable como 
        //Campo: Info usuario -y un salto de linea
        //$mensaje .= ucfirst($k).': '.$v.'\r\n';
                                
        $mensaje .= ucfirst($k).": $v\r\n"; //más simple y por alguna razón a 000webhost le gusta más
    }
    
    
    //mail al administrador
    $envioadmin = mail($destinatario, $asunto, $mensaje);
    
    
    //envío del mail con contenido html
    //el 4to parámetro de la funcion mail() define los headers
    $cabecera = "MIME-Version: 1.0\r\n";
    $cabecera .= "Content-type: text/html; charset=utf-8\r\n";
    $cabecera .= "From: no-replay@dominio.com";
                
            //componer otro mensaje , le podemos meter markup
            $mensaje2 = "";
            foreach($_POST as $k => $v){
                    //para reemplazar el salto de linea por la etiqueta br
                    $mensaje2 .= ucfirst($k).': '.$v.'<br>';
            }    
    //ingrese aquí su bonita plantilla de mailing de la clase de tablas 
    $html = "<div style='background:red;color:white;'>".$mensaje2."</div>";
    
    //mail al usuario que completo el form
    $envious = mail($quemail, "Gracias por contactarte desde nuestra web", $html, $cabecera);
       
    
    if($envioadmin && $envious){
        //los dos mails se enviaron correctamente
        $respuesta= 'ok';
        
    }else{
        //algo pasó
        $respuesta= 'mastarde';
    }    
    
}
//redireccióna donde se van a querer mostrar los mensajes
header("Location:../index.php?seccion=contacto&rta=$respuesta");





?>






