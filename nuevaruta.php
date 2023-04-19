<?php
    $id = $_GET['id'];
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
			<h3 style="text-align:center">NUEVO REGISTRO</h3>
		</div>

		<form class="form-horizontal" method="POST" action="guardarruta.php" autocomplete="off">
			<div class="form-group">
				<label for="id_vehiculo" class="col-sm-2 control-label">Placa Vehículo</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="id_vehiculo" name="id_vehiculo"
						placeholder="Identificación Vehículo" required>
				</div>
			</div><br>
			<div class="form-group">
				<label for="cupos" class="col-sm-2 control-label">Cupos disponibles</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="cupos" name="cupos" placeholder="Cupos disponibles"
						required>
				</div>
			</div><br>
			<div class="form-group">
				<label for="nombre_conductor" class="col-sm-2 control-label">Nombre conductor </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nombre_conductor" name="nombre_conductor" placeholder="Nombre conductor" required>
				</div>
			</div><br>
			<div class="form-group">
				<label for="id_conductor" class="col-sm-2 control-label">Identificación conductor </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="id_conductor" name="id_conductor" placeholder="Identificación conductor" required>
				</div>
			</div><br>
			<div class="form-group">
				<label for="telefono_conductor" class="col-sm-2 control-label">Teléfono conductor </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="telefono_conductor" name="telefono_conductor" placeholder="Teléfono conductor" required>
				</div>
			</div><br>
			<div class="form-group">
				<label for="fecha" class="col-sm-2 control-label">Fecha</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha ruta" required>
				</div>
			</div><br>
			<div class="form-group">
				<label for="lugar_partida" class="col-sm-2 control-label">Lugar de partida</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="lugar_partida" name="lugar_partida" placeholder="Lugar de partida" required>
				</div>
			</div><br>
			<div class="form-group">
				<label for="lugar_destino" class="col-sm-2 control-label">Lugar de destino</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="lugar_destino" name="lugar_destino" placeholder="Lugar de destino" required>
				</div>
			</div><br>
			<div class="form-group">
				<label for="hora" class="col-sm-2 control-label">Hora de salida</label>
				<div class="col-sm-10">
					<input type="time" class="form-control" id="hora" name="hora"
						placeholder="Hora inicio ruta" required>
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