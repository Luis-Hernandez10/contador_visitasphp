<?php 

function contar_usuarios(){
$archivo = 'contador.txt';

if (file_exists($archivo)) {
	$cuenta = file_get_contents($archivo) + 1;/*Cuenta va a ser el numero actual mas 1 si yo soy el visitate uno y recargo la pagina sere el 2*/
	file_put_contents($archivo, $cuenta);/*sustituimos valor antiguo por el nuevo*/

	return $cuenta;
	} else {
		file_put_contents($arvhivo, 1);
		return 1;
	}

}

//echo contar_usuarios();

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>Contador de visitas</title>
 	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
 	<link rel="stylesheet" href="estilos.css">
 </head>
 <body>
 	<h1>Contador de Visitas</h1>
 	<div class="Visitantes">
 		<p class="numero"><?php echo contar_usuarios();  ?></p>
 		<p class="texto">visitas</p>
 	</div>
 
 </body>
 </html>