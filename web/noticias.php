<?php
$email=$_POST["email"];

$link=mysqli_connect("localhost","root","","mattress","3306");
mysqli_query($link, "INSERT INTO noticias (email) VALUES ('".$email."')");
mysqli_close($link);
header("Location:index.php");
?>