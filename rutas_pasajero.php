<?php
    require 'conexion.php';
    $con=conectar();
    $consulta = "SELECT * FROM registro_rutas";
    $resul = mysqli_query($con,$consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="view" content="width=device-width, initial-scale=1"> <!--para que se ajuste el tamaño si se abre desde celular--> 
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!--hojas de estilo-->
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Rutas</title>
</head>
<body>
    <div class="container">
        <br><div class="row" style="text-align:center">
            <h3>RUTAS DISPONIBLES</h3>
    </div><br>
    </div>
    <div class="container" style="text-align:center">
        <div class="row table-responsive">
            <table class="table table-striped"  style="margin: 0 auto;">
                <thead>
                    <tr>
                        <th>Placa vehiculo</th>
                        <th>Cupos disponibles</th>
                        <th>Nombre Conductor</th>
                        <th>Teléfono Conductor</th>
                        <th>Lugar partida</th>
                        <th>Lugar destino</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = $resul->fetch_array(MYSQLI_ASSOC)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id_vehiculo'] ?></td>
                        <td><?php echo $row['cupos'] ?></td>
                        <td><?php echo $row['nombre_conductor'] ?></td>
                        <td><?php echo $row['telefono_conductor'] ?></td>
                        <td><?php echo $row['lugar_partida'] ?></td>
                        <td><?php echo $row['lugar_destino'] ?></td>
                        <td><?php echo $row['fecha'] ?></td>
                        <td><?php echo $row['hora'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
        <div class="row" style="text-align:center">
            <a href="pasajero.html" class="btn btn-primary">Regresar</a>
        </div><br>
        <div class="row" style="text-align:center">
            <a href="inicio.html" class="btn btn-primary">Cerrar sesión</a>
        </div><br>
    </div>
</body>
</html>