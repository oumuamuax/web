<html lang="es">
<head>
    <title>
        Insertar en post
    </title>
</head>
<body>
<?php
$host='localhost';
$user='pma';
$password='123456789';
$database='practicafinal';

$conn=mysqli_connect($host,$user,$password,$database);
if (mysqli_connect_errno()){
    printf("Fallo de conexion: %s\n", mysqli_connect_errno());
}

$falta=$_POST['falta'];
$nombre=$_POST['nombre'];
$socio=$_POST['socio'];
$telefono=$_POST['telefono'];

//printf($name);
//printf($movil);

$sql="INSERT socio(falta,nombre,socio,telefono)VALUES('$falta','$nombre','$socio','$telefono')";
//printf($sql);
if (!mysqli_query($conn,$sql)){
    printf("Errores: %s\n",mysqli_error($conn));
}

mysqli_close($conn);
?>
<h1><div aling="center">Registrado</div></h1>
</body>
</html>

