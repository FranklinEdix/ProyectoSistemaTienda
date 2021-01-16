<?php 
	include("Php/bd.php");

	$usuario = $_POST['Usuario'];
	$contraseña = $_POST['Password'];
	$rol = $_POST['tipoRol'];


	if($rol == 0001){
		$query = "SELECT*FROM usuarios WHERE IdUsuario = '$usuario' AND IdRol = '$rol' AND Contraseña = '$contraseña'";
		$resultado = mysqli_query($conexión, $query);

		$confirma = mysqli_num_rows($resultado);

		if($confirma){
			header("location:Php/admin/Usuario.php");
		}else{
			?><?php
			include('Index.php');
			?><center>
    			<h1 class="bad" style="Color: red;">Error en la autentificación intentelo de nuevo</h1>
    			</center> 
    		<?php
		}
	}
	if($rol == 0002){
		$query = "SELECT*FROM usuarios WHERE IdUsuario = '$usuario' AND IdRol = '$rol' AND Contraseña = '$contraseña'";
		$resultado = mysqli_query($conexión, $query);

		$confirma = mysqli_num_rows($resultado);

		if($confirma){
			header("location:Php/admin/Ventas.php");
		}else{?><?php
			include('Index.php');
			?><center>
    			<h1 class="bad" style="Color: red;">Error en la autentificación intentelo de nuevo</h1>
    			</center> 
    		<?php
		}
	}
	if($rol == 0003){
		$query = "SELECT*FROM usuarios WHERE IdUsuario = '$usuario' AND IdRol = '$rol' AND Contraseña = '$contraseña'";
		$resultado = mysqli_query($conexión, $query);

		$confirma = mysqli_num_rows($resultado);

		if($confirma){
			header("location:Php/admin/Almacen.php");
		}else{
			?><?php
			include('Index.php');
			?><center>
    			<h1 class="bad" style="Color: red;">Error en la autentificación intentelo de nuevo</h1>
    			</center> 
    		<?php
		}
	}


?>

