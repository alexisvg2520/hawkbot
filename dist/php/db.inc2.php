<?php
$servername = "localhost";
$username = "prueba";
$password = "c8u$7ShG";
$dbname = "reportes";

$connec = mysqli_connect($servername,$username,$password, $dbname);

if ($connec->connect_error) {
    die("Conexión fallida: " . $connec->connect_error);
  }
