
<?php 
## LA PARTE NO COMENTADA DE ESTA CABECERA DEBERA SER INTRODUCIDA EN TODA PAGINA QUE QUERAMOS QUE SEA PRIVADA Y CON UN CONTROL DE USUARIOS

			##  EL CONTENIDO DE SESION ES
				/*
				$_SESSION['nivel']    <---- nivel de usuario asignado en la base de datos segun preferencias, en mi caso uso
											0 para usuario generico y 1 para administrador
				$_SESSION['usuario']  <---- nombre de usuario (correo)
				$_SESSION['clave']	  <---- clave de usuario
				$_SESSION['estado']	  <---- estado guarda si el usuario esta logueado 	
*/

#SABER SI ESTA LOGUEADO
 
			###
			##  si la cookie existe (porque marcamos que no se cerrara sesion) asigna el contenido de la cookie a session_id
			##  si no existe actuara sin ella
			### 
			
if(isset($_COOKIE['ms'])){
 session_id($_COOKIE['ms']);
}
			###
			##  acontinuacion comprueva si existe la sesion
			### 
 session_start();
 if(isset($_SESSION['usuario']) and $_SESSION['estado'] == 'valido'  ) 
{ 
       // Lo dejas entrar a la pagina 
} 
else 
{   
			###
			##  si la sesion no existe se redirige a la pagina login
			### 

       // Usuario que no se ha logueado 

	    header('location:index.php');     
} 
?>
<!--si queremos borrar la sesion nos dirigiremos a la siguiete pagina-->
<a href="destruir.php"/>destruir