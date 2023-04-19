<?php

    include("conexion.php");

    $con = conectar();

    $placa_vehiculo = $_POST['placa_vehiculo'];
    $id_tipovehiculo = $_POST['id_tipovehiculo'];
    $fecha_vencimientosoat = $_POST['fecha_vencimientosoat'];
    $fecha_vencimientotecno = $_POST['fecha_vencimientotecno'];
    $capacidad_personas = $_POST['capacidad_personas'];

    $consulta = "UPDATE vehiculos SET id_tipovehiculo='$id_tipovehiculo', fecha_vencimientosoat='$fecha_vencimientosoat', fecha_vencimientotecno='$fecha_vencimientotecno', capacidad_personas='$capacidad_personas' WHERE placa_vehiculo='$placa_vehiculo'";
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
						<h3>REGISTRO MODIFICADO</h3>
						<h5>Ingrese nuevamente sesion para visualizar los cambios</h2>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
				</div>
			</div>
			<div class="row" style="text-align:center">
            	<a href="login.html"  class="btn btn-primary">Iniciar Sesión</a>
        	</div><br>
        	<div class="row" style="text-align:center">
            	<a href="inicio.html" class="btn btn-primary">Ir a la página principal</a>
        	</div><br>
		</div>
	</body>
</html>