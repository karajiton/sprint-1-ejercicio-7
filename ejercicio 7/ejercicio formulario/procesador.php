<?php
session_start();
$nombre = $_GET['nombre'];
$edad = $_GET['edad'];
$genero = $_GET['genero'];
$posicion = $_GET['posicion'];

$_SESSION['nombre'] = $nombre;
$_SESSION['genero'] = $genero;


echo "<h1> Formulario llenado con exito</h1>";
echo "Tu nombre es: " . $nombre . "<br/>";
echo "Tu edad es: " . $edad . "<br/>";
echo "Tu genero es: " . $genero . "<br/>";
echo "<p> Posicion </p>";

    foreach ($posicion as $tipo) {
        echo " <li>$tipo</li>"; 

        
    }

?>