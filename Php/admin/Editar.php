<?php include("../bd.php")?>
<?php 

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "SELECT*FROM usuarios WHERE IdUsuario = '$id'";
		$resultado = mysqli_query($conexión, $query);
		if(mysqli_num_rows($resultado) == 1){
			$row = mysqli_fetch_array($resultado);
			$rol = $row['IdRol'];
			$nombre = $row['Nombre'];
			$contraseña = $row['Contraseña'];
			$email = $row['Email'];
			$telefono = $row['Telefono'];
		}
	}

	if (isset($_POST['guardar'])) {
			$id = $_GET['id'];
			$rol = $_POST['tipoRol'];
			$nombre = $_POST['nombre'];
			$contraseña = $_POST['contraseña'];
			$email = $_POST['email'];
			$telefono = $_POST['phone'];

			$query = "UPDATE usuarios SET IdRol = '$rol', Nombre = '$nombre', Contraseña = '$contraseña', Email = '$email', Telefono = '$telefono' WHERE IdUsuario = '$id'";
			$resultado = mysqli_query($conexión, $query);
			if(!$resultado){
				die("No se pudo actualizar");
			}

			header("Location: Admin.php");
	}
?>
<?php include("../include/header.php")?>
<div>
    <a href="Admin.php">Volver</a>
</div>
<div>
	<center>
	<form action="Editar.php?id=<?php echo $_GET['id'] ?>" method="POST">
		<br>
		<label>Rol: </label>
		<select name="tipoRol" class="seleccion">
            <?php 
                include('Php/bd.php');
                $query = $conexión -> query("SELECT*FROM rolusuario");
                while($valor = mysqli_fetch_array($query)){
                    echo '<option value="'.$valor['IdRol'].'"">'.$valor['NombreRol'].'</option>';
                }
            ?>
        </select>
        <br>
        <br>
		<label>Nombre: </label>
		<input type="text" name="nombre" id="" value="<?php echo("$nombre") ?>">
		<br><br>
		<label>Contraseña: </label>
		<input type="text" name="contraseña" id="" value="<?php echo("$contraseña") ?>">
		<br><br>
		<label>Email: </label>
		<input type="Email" name="email" id="" value="<?php echo("$email") ?>">
		<br><br>
		<label>Telefono: </label>
		<input type="phone" name="phone" id="" value="<?php echo("$telefono") ?>">
		<br><br>
		<button name="guardar">
			Guardar
		</button>	
	</form>
	</center>
</div>
<?php include("../include/footer.php");?>
