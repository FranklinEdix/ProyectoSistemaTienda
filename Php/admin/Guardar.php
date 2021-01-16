<?php include("../bd.php")?>
<?php 

	if(isset($_POST['guardar'])){
		$id = $_POST['Id'];
		$tipo = $_POST['tipoRol'];
		$nombre = $_POST['nombre'];
		$contraseña = $_POST['contraseña'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		$query = "INSERT INTO usuarios(IdUsuario, IdRol, Nombre, Contraseña, Email, Telefono) VALUES ('$id', '$tipo', '$nombre', '$contraseña', '$email', '$phone')";
		$resultado = mysqli_query($conexión, $query);

		if($resultado){
			header("Location: Admin.php");
		}else{
			die("Error al guardar");
		}
			
	}


?>