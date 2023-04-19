<?php

    include("conexion.php");

    $con = conectar();

    $id_ruta = $_GET['id'];

    $consulta = "DELETE FROM registro_rutas WHERE id_ruta='$id_ruta'";
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
						<h3>REGISTRO ELIMINADO</h3>
						<h5>Ingrese nuevamente sesion para visualizar los cambios</h2>
						<?php } else { ?>
						<h3>ERROR AL ELIMINAR</h3>
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

