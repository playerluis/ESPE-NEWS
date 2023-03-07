<?php
	$archivo = fopen("datos.txt", "a") or die("No se pudo abrir el archivo");
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$texto = "Nombre: ".$nombre." - Correo: ".$correo."\n";
	fwrite($archivo, $texto);
	fclose($archivo);
	header("Location: deportes.php?guardado=true&nombre=".$nombre."&correo=".$correo);
?>
