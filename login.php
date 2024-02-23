<?php
    $servername='localhost';
    $database='prueba';
    $username=$_POST['nombre'];
    $password=$_POST['clocus'];
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die("Error de conexion: ".mysqli_connect_errno());
}
    else{
echo"Exito conexion";
        header('Location: /index.php');
    }
mysqli_close($conn);
