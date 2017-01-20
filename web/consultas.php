<?php
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$mensaje=$_POST["mensaje"];

$link=mysqli_connect("localhost","root","","mattress","3306");
mysqli_query($link, "INSERT INTO consultas (nombre,email,mensaje) VALUES ('".$nombre."','".$email."','".$mensaje."')");
mysqli_close($link);
header("Location:index.php");
?>