<?php

$nombre = $_POST['nombres'];
$apellido = $_POST['apellidos'];
$programa = $_POST['programa'];
$semestre = $_POST['semestre'];
$codigo = $_POST['codigo'];
$clave_cifrada = $hashed_password = crypt($_POST['contrasena']);
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];


echo "Hola mundo $nombre <br>";
echo "Hola mundo $apellido <br>";
echo "Hola mundo $programa <br>";
echo "Hola mundo $semestre <br>";
echo "Hola mundo $codigo <br>";

echo "Hola mundo $clave_cifrada <br>";
echo "Hola mundo $correo <br>";
echo "Hola mundo $edad <br>";
echo "Hola mundo $genero <br>";