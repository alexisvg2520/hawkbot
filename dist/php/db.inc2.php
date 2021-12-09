<<?php
$servername = "localhost";
$username = "prueba";
$password = "c8u$7ShG";
$dbname = "reportes";

$connec = mysqli_connect($servername,$username,$password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
  }
?>