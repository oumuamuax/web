<?php
// Variables de conexion con base de datos

    $host='localhost';
    $user='pma';
    $password='123456789';
    $database='examen';

// Variables de inyeccion de datos en las tablas

    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];

// Este codigo conecta con la base de datos y si hay algun error nos lo dice.

        $conn=mysqli_connect($host,$user,$password,$database);
        if (mysqli_connect_errno()){
            printf("Error catastrofico: %s\n", mysqli_connect_errno());
        }

// Aqui sitodo esta bien, seleccionamos la tabla para insertar datos.

    $sql="INSERT zoel(nombre,telefono,direccion)VALUES('$nombre','$telefono','$direccion')";
    //printf($sql);
    if (!mysqli_query($conn,$sql)){
        printf("Errores: %s\n",mysqli_error($conn));
    }

mysqli_close($conn);