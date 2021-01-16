<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Zapatillas Sayumi</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <form class="box" action="verificar.php" method="POST">
        <h1>Login</h1>
        <select name="tipoRol" class="seleccion">
            <?php 
                include('Php/bd.php');
                $query = $conexión -> query("SELECT*FROM rolusuario");
                while($valor = mysqli_fetch_array($query)){
                    echo '<option value="'.$valor['IdRol'].'"">'.$valor['NombreRol'].'</option>';
                }
            ?>
        </select>
        <script src="https://kit.fontawesome.com/b31142aa6f.js" crossorigin="anonymous"></script>
        <input type="text" name="Usuario" placeholder="Username">
        <input type="Password" name="Password" placeholder="Password">
        <input type="submit" name="" value="Iniciar Cesión">
    </form>
</body>

</html>