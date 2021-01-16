<?php include("../include/header.php")?>
<?php include("../bd.php")?>
<center>
<div class="admin">
<div class="agregar">
	<form action="Agregar.php">
		<input type="submit" name="agregar" value="Agregar Nuevo Usuario" class="botonAgregar">
	</form>
</div>
<div>
	<table class="tablaAdmin">
		<thead>
			<tr style="background: gray">
			<th>IdUsuario</th >
			<th>IdRol</th >
			<th>Nombre</th >
			<th>Contraseña</th >
			<th>Email</th >
			<th>Telefono</th>
			</tr>
		</thead>
		<thead>
			<?php 
				$query = "SELECT*FROM usuarios";
				$resultado = mysqli_query($conexión, $query);
				while($row = mysqli_fetch_array($resultado)){
			?>

			<tr>
				<td style="border: 2px solid black;"><?php echo($row['IdUsuario']);?></td>
				<td style="border: 2px solid black;"><?php 
					$rol = $row['IdRol'];
					$query2 = "SELECT*FROM rolusuario WHERE IdRol='$rol'";
					$resultado2 = mysqli_query($conexión, $query2);
					$row2 = mysqli_fetch_array($resultado2);
					echo($row2['NombreRol']);
				?></td>
				<td style="border: 2px solid black;"><?php echo($row['Nombre']);?></td>
				<td style="border: 2px solid black;"><?php echo($row['Contraseña']);?></td>
				<td style="border: 2px solid black;"><?php echo($row['Email']);?></td>
				<td style="border: 2px solid black;"><?php echo($row['Telefono']);?></td>
				<td><a href="Eliminar.php?id=<?php echo $row['IdUsuario']; ?>">Eliminar</a></td>
				<td><a href="Editar.php?id=<?php echo $row['IdUsuario']; ?>">Editar</a></td>	
			</tr>
		<?php }?>
		</thead>
	</table>
</div>
</center>
</div>
<?php include("../include/footer.php");?>