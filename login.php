<?php

    $user="root";
    $password="";
    $hostname="localhost";
    $dbname="finalbd";

    $con=mysqli_connect($hostname,$user,$password,$dbname) or die ("Error al conectar el servidor".mysqli_error());

    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $id_rol_app = $_POST['id_rol_app'];

    $consulta = "SELECT * FROM usuarios WHERE correo='$correo' and contraseña='$contraseña' and id_rol_app='$id_rol_app'";

    $resul = mysqli_query($con,$consulta);
    $filas = mysqli_num_rows($resul);
    if($filas){
        if($id_rol_app == '1'){
            $row = $resul->fetch_array(MYSQLI_ASSOC);
            $id= $row['id_usuario'];
            header('Location: conductor.php?id='.$id);
        }
        else
        {
            header('Location: pasajero.html');
        }
    }
    mysqli_free_result($resul);
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
			<div class="row" >
				<div class="row" style="text-align:center">
					<h3>Error de autenticación</h3>
				</div>
			</div>
            <div class="row" style="text-align:center">
                <a href="inicio.html" class="btn btn-primary">Regresar</a>
            </div><br>
            <div class="row" style="text-align:center">
                <a href="login.html" class="btn btn-primary">Intentar nuevamente</a>
            </div><br>
		</div>
	</body>
</html>