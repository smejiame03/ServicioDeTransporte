<?php

    include("conexion.php");

    $con = conectar();

    $id_vehiculo = $_POST['id_vehiculo'];
	$cupos = $_POST['cupos'];
	$nombre_conductor = $_POST['nombre_conductor'];
	$id_conductor = $_POST['id_conductor'];
	$telefono_conductor = $_POST['telefono_conductor'];
	$fecha = $_POST['fecha'];
	$lugar_partida = $_POST['lugar_partida'];
	$lugar_destino = $_POST['lugar_destino'];
	$hora = $_POST['hora'];

    $consulta = "INSERT INTO registro_rutas(id_vehiculo,cupos,nombre_conductor,id_conductor,telefono_conductor,fecha,lugar_partida,lugar_destino,hora) 
    VALUES ('$id_vehiculo','$cupos','$nombre_conductor','$id_conductor','$telefono_conductor','$fecha','$lugar_partida','$lugar_destino','$hora')";

    $resul = mysqli_query($con,$consulta);
    mysqli_close($con);
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
						<h5>Ingrese nuevamente sesion para visualizar los cambios</h2>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
				</div>
			</div>
			<div class="row" style="text-align:center">
				<a href="login.html" class="btn btn-primary">Iniciar Sesión</a>
            </div><br>
            <div class="row" style="text-align:center">
				<a href="inicio.html" class="btn btn-primary">Ir a la página principal</a>
            </div><br>
		</div>
	</body>
</html>

