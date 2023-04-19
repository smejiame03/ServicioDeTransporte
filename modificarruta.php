<?php
    require 'conexion.php';
    $con = conectar();
    $id = $_GET['id'];
    $consulta = "SELECT * FROM registro_rutas where id_conductor=$id ";
    $resul = mysqli_query($con,$consulta);
    $row = $resul->fetch_array(MYSQLI_ASSOC);
?>
<html lang="es">

<head>
	<meta name="view" content="width=device-width, initial-scale=1">
	<!--para que se ajuste el tamaño si se abre desde celular-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!--hojas de estilo-->
	<script src="js/jquery-3.6.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="row">
			<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
		</div>

		<form class="form-horizontal" method="POST" action="actualizarruta.php" autocomplete="off">
			<!-- input oculto para enviar el id de la ruta -->
            <input type="hidden" id="id_ruta" name="id_ruta" value="<?php echo $row['id_ruta']; ?>"/>
            <div class="form-group">
				<label for="id_vehiculo" class="col-sm-2 control-label">Placa Vehículo</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="id_vehiculo" name="id_vehiculo"
						placeholder="Identificación Vehículo" required value="<?php echo $row['id_vehiculo']; ?>">
				</div>
			</div><br>
			<div class="form-group">
				<label for="cupos" class="col-sm-2 control-label">Cupos disponibles</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="cupos" name="cupos" placeholder="Cupos disponibles"
						required value="<?php echo $row['cupos']; ?>">
				</div>
			</div><br>
			<div class="form-group">
				<label for="nombre_conductor" class="col-sm-2 control-label">Nombre conductor </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nombre_conductor" name="nombre_conductor" placeholder="Nombre conductor" required value="<?php echo $row['nombre_conductor']; ?>">
				</div>
			</div><br>
			<div class="form-group">
				<label for="telefono_conductor" class="col-sm-2 control-label">Teléfono conductor </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="telefono_conductor" name="telefono_conductor" placeholder="Teléfono conductor" value="<?php echo $row['telefono_conductor']; ?>" required>
				</div>
			</div><br>
			<div class="form-group">
				<label for="fecha" class="col-sm-2 control-label">Fecha</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha ruta" required value="<?php echo $row['fecha']; ?>">
				</div>
			</div><br>
			<div class="form-group">
				<label for="lugar_partida" class="col-sm-2 control-label">Lugar de partida</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="lugar_partida" name="lugar_partida" placeholder="Lugar de partida" required value="<?php echo $row['lugar_partida']; ?>">
				</div>
			</div><br>
			<div class="form-group">
				<label for="lugar_destino" class="col-sm-2 control-label">Lugar de destino</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="lugar_destino" name="lugar_destino" placeholder="Lugar de destino" required value="<?php echo $row['lugar_destino']; ?>">
				</div>
			</div><br>
			<div class="form-group">
				<label for="hora" class="col-sm-2 control-label">Hora de salida</label>
				<div class="col-sm-10">
					<input type="time" class="form-control" id="hora" name="hora"
						placeholder="Hora inicio ruta" required value="<?php echo $row['hora']; ?>">
				</div>
			</div><br>
			<div class="col-sm-offset-2 col-sm-10">
				<a href="conductor.php?id=<?php echo $id ?>" class="btn btn-default">Regresar</a>
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</form>
	</div>
</body>

</html>