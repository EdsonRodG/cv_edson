<?php

function conectar(){

    /*
$host="localhost";
$user = "root";
$password= "";
$bd="contacto";
*/

$host = "localhost";
$user= "id17610420_bd_contacto123";
$password = "q&t@Sn4ME7q9RvMZ";
$bd = "id17610420_contacto";

$conexion = mysqli_connect($host,$user,$password) or die("Problemas con la conexión");;

mysqli_select_db($conexion,$bd);
return $conexion;
}

    
?>
