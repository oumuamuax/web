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

    $author=$_POST['autor'];
    $numbook=$_POST['libro'];
    $numpag=$_POST['numpag'];
    $title=$_POST['titulo'];

    //printf($name);
    //printf($movil);

    $sql="INSERT libro(libro,titulo,autor,numpag)VALUES('$numbook','$title','$author','$numpag')";
    //printf($sql);
    if (!mysqli_query($conn,$sql)){
        printf("Errores: %s\n",mysqli_error($conn));
    }

    mysqli_close($conn);
    ?>
    <h1><div aling="center">Registrado</div></h1>
</body>
</html>

