<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$noticia = $_POST['noticia'];
$comentario = $_POST['comentario'];

$archivo = fopen("Noticias/datos.txt", "a");
fwrite($archivo, "Nombre: ".$nombre."\n");
fwrite($archivo, "Correo: ".$correo."\n");
fwrite($archivo, "Noticia: ".$noticia."\n");
fwrite($archivo, "Comentario: ".$comentario."\n\n");
fclose($archivo);

echo "Los datos se han guardado correctamente.";
?>