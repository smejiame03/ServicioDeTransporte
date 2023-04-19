<?php

    include("conexion.php");

    $con = conectar();

    $id_usuario = $_POST['id_usuario'];
    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
	$telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $barrio = $_POST['barrio'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $id_tipovinculo = $_POST['id_tipovinculo'];
    $id_rol_app = $_POST['id_rol_app'];

    $consulta = "INSERT INTO usuarios(id_usuario,nombre,apellido1,apellido2,telefono,direccion,barrio,correo,contraseña,id_tipovinculo,id_rol_app) 
    VALUES ('$id_usuario','$nombre','$apellido1','$apellido2','$telefono','$direccion','$barrio','$correo','$contraseña','$id_tipovinculo','$id_rol_app')";

    $resul = mysqli_query($con,$consulta);
?>


<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resul) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
				</div>
			</div>
			<div class="row" style="text-align:center">
				<a href="inicio.html" class="btn btn-primary">Regresar</a>
            </div><br>
            <div class="row" style="text-align:center">
				<a href="login.html" class="btn btn-primary">Iniciar Sesión</a>
            </div><br>
		</div>
	</body>
</html>