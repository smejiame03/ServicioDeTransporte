<?php
    require 'conexion.php';
    $con = conectar();
    $id = $_GET['id'];
    $consulta = "SELECT * FROM vehiculos where id_conductor=$id ";
    $resul = mysqli_query($con,$consulta);
    $row = $resul->fetch_array(MYSQLI_ASSOC);
?>
<html lang="es">
    <head>
    <meta name="view" content="width=device-width, initial-scale=1"> <!--para que se ajuste el tamaño si se abre desde celular--> 
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!--hojas de estilo-->
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
		<div class="container">
			<div class="row"> 
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="actualizarvehiculo.php" autocomplete="off">
                <!-- input oculto para enviar el id del conductor -->
                <input type="hidden" id="placa_vehiculo" name="placa_vehiculo" value="<?php echo $row['placa_vehiculo']; ?>"/>
                <div class="form-group">
					<label for="id_tipovehiculo" class="col-sm-2 control-label">Tipo de vehículo</label>
					<div class="col-sm-10">
						<select class="form-control" id="id_tipovehiculo" name="id_tipovehiculo">
							<option value="1" <?php if($row['id_tipovehiculo']=='1') echo 'selected'; ?>>Moto</option>
							<option value="2"<?php if($row['id_tipovehiculo']=='2') echo 'selected'; ?>>Carro</option>
						</select>
					</div>
				</div><br>
                <div class="form-group">
					<label for="fecha_vencimientosoat" class="col-sm-2 control-label">Fecha de vencimiento del soat</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fecha_vencimientosoat" name="fecha_vencimientosoat" placeholder="Fecha de vencimiento del soat" required value="<?php echo $row['fecha_vencimientosoat']; ?>">
					</div>
				</div>
                <div class="form-group">
					<label for="fecha_vencimientotecno" class="col-sm-2 control-label">Fecha vencimiento de tecnomecánica</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fecha_vencimientotecno" name="fecha_vencimientotecno" placeholder="Fecha vencimiento de tecnomecánica" value="<?php echo $row['fecha_vencimientotecno']; ?>" required>
					</div>
				</div>
				
                <div class="form-group">
					<label for="capacidad_personas" class="col-sm-2 control-label">Capacidad de personas dentro del vehículo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="capacidad_personas" name="capacidad_personas" placeholder="Capacidad de personas" value="<?php echo $row['capacidad_personas']; ?>"required>
					</div>
				</div><br>
						
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="conductor.php?id=<?php echo $id ?>" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>