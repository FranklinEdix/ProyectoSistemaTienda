<?php include("../include/header.php")?>
<?php include("../bd.php")?>
<div>
    <a href="Admin.php" class="volver">Volver</a>
</div>
<div>
	<center>
	<form action="Guardar.php" method="POST">
		<label>Ingrese id del usuario: </label>
		<input type="text" name="Id" id="">
		<br>
		<br>
		<label>Ingrese el rol: </label>
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
		<label>Ingrese el nombre: </label>
		<input type="text" name="nombre" id="">
		<br><br>
		<label>Ingrese la contraseña: </label>
		<input type="text" name="contraseña" id="">
		<br><br>
		<label>Ingrese el Email: </label>
		<input type="Email" name="email" id="">
		<br><br>
		<label>Ingrese el telefono: </label>
		<input type="phone" name="phone" id="">
		<br><br>
		<input type="submit" name="guardar" id="" value="Guardar Nuevo">	
	</form>
	</center>
</div>
<?php include("../include/footer.php");?>