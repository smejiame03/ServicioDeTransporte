<?php
    require 'conexion.php';
    $con=conectar();
    $id = $_GET['id'];
    $consulta = "SELECT * FROM vehiculos where id_conductor=$id ";
    $resul = mysqli_query($con,$consulta);
    $consulta1 = "SELECT * FROM registro_rutas where id_conductor=$id ";
    $resul1 = mysqli_query($con,$consulta1);
    $consulta2 = "SELECT * FROM usuarios where id_usuario=$id ";
    $resul2 = mysqli_query($con,$consulta2);
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="view" content="width=device-width, initial-scale=1"> <!--para que se ajuste el tamaño si se abre desde celular--> 
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!--hojas de estilo-->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Conductor</title>
</head>

<body>
    <div class="container">
        <div class="row" style="text-align:center">
            <?php
                while($row = $resul2->fetch_array(MYSQLI_ASSOC)) {
            ?>
            <h2 style="text-align:center"> Bienvenid@ <?php echo $row['nombre'] ?> </h2><br>
            <?php } ?>
            <br><h4>Tus vehículos registrados</h2>
        </div>
    </div><br>
    <div class="container" style="text-align:center">
        <div class="row table-responsive">
            <table class="table table-striped" style="text-align: center" style="margin: 0 auto;">
                <thead>
                    <tr>
                        <th>Placa vehiculo</th>
                        <th>Tipo de vehiculo 1=Moto, 2=Carro</th>
                        <th>Fecha de vencimiento SOAT</th>
                        <th>Fecha de vencimiento tecnomecánica</th>
                        <th>Capacidad personas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = $resul->fetch_array(MYSQLI_ASSOC)) {
                    ?>
                    <tr>
                        <td><?php echo $row['placa_vehiculo'] ?></td>
                        <td><?php echo $row['id_tipovehiculo'] ?></td>
                        <td><?php echo $row['fecha_vencimientosoat'] ?></td>
                        <td><?php echo $row['fecha_vencimientotecno'] ?></td>
                        <td><?php echo $row['capacidad_personas'] ?></td>
                        <td><a href="modificarvehiculo.php?id=<?php echo $id?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                        <td><a href="#" data-href="eliminarvehiculo.php?id=<?php echo $row['placa_vehiculo'];?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <div class="row" style="text-align:center">
        <br><h4>Tus rutas registradas</h2>
    </div><br>
    <div class="container" style="text-align:center">
        <div class="row table-responsive">
            <table class="table table-striped" style="text-align: center" style="margin: 0 auto;">
                <thead>
                    <tr>
                        <th>ID Ruta</th>
                        <th>Placa vehiculo</th>
                        <th>Nombre conductor</th>
                        <th>Teléfono conductor</th>
                        <th>Fecha</th>
                        <th>Lugar partida</th>
                        <th>Lugar destino</th>
                        <th>Hora</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row1 = $resul1->fetch_array(MYSQLI_ASSOC)) {
                    ?>
                    <tr>
                        <td><?php echo $row1['id_ruta'] ?></td>
                        <td><?php echo $row1['id_vehiculo'] ?></td>
                        <td><?php echo $row1['nombre_conductor'] ?></td>
                        <td><?php echo $row1['telefono_conductor'] ?></td>
                        <td><?php echo $row1['fecha'] ?></td>
                        <td><?php echo $row1['lugar_partida'] ?></td>
                        <td><?php echo $row1['lugar_destino'] ?></td>
                        <td><?php echo $row1['hora'] ?></td>
                        <td><a href="modificarruta.php?id=<?php echo $id?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                        <td><a href="#" data-href="eliminarruta.php?id=<?php echo $row1['id_ruta'];?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    
    <br><br>
    <div class="row">
        <a href="nuevovehiculo.php?id=<?php echo $id ?>" class="btn btn-primary">Nuevo registro vehículo</a>
    </div><br>
    <div class="row">
        <a href="nuevaruta.php?id=<?php echo $id ?>" class="btn btn-primary">Nuevo registro ruta</a>
    </div><br>
    <div class="row">
        <a href="inicio.html" class="btn btn-primary">Cerrar sesión</a>
    </div><br>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
        <script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
</body>

</html>