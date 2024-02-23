<?php
// Variables de conexion con base de datos

$host='localhost';
$user='pma';
$password='123456789';
$database='sergioario';

// Variables de inyeccion de datos en las tablas

$autor=$_POST['autor'];
$numpag=$_POST['numpag'];
$titulo=$_POST['titulo'];

// Este codigo conecta con la base de datos y si hay algun error nos lo dice.

$conn=mysqli_connect($host,$user,$password,$database);
if (mysqli_connect_errno()){
    printf("Error catastrofico: %s\n", mysqli_connect_errno());
}

// Aqui sitodo esta bien, seleccionamos la tabla para insertar datos.

$sql="INSERT sergio(autor,numpag,titulo)VALUES('$autor','$numpag','$titulo')";
//printf($sql);
if (!mysqli_query($conn,$sql)){
    printf("Errores: %s\n",mysqli_error($conn));
}

mysqli_close($conn);