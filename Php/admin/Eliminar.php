<?php include("../bd.php")?>
<?php 

	if(isset($_GET['id'])){

		$id = $_GET['id'];

		$query = "DELETE FROM usuarios WHERE idUsuario = '$id'";
		$resultado = mysqli_query($conexión, $query);

		if($resultado){
			header("Location: Admin.php");
		}else{
			die("No se pudo eliminar correctamente");
		}
	}
?>