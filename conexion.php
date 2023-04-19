<?php
function conectar(){
    $user="root";
    $password="";
    $hostname="localhost";
    $dbname="finalbd";

    $con=mysqli_connect($hostname,$user,$password,$dbname) or die ("Error al conectar el servidor".mysqli_error());

    return $con;
    }
?>