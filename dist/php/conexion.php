<?php
$servername = "localhost";
$username = "prueba";
$password = "c8u$7ShG";
$dbname = "reportes";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Coneccion fallida " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE reportes";
if($conn->query($sql)===TRUE){
    echo "Conectado correctamente a la Base de datos reportes";
}else{
    echo "Error al crear la Base de datos ". $conn->error;
}
$conn->close();

$conn1 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
try {
    $conn1 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // sql to create table
    $sql1 = "CREATE TABLE ventas_uio (
    Fecha DATE,
    Nombre_producto VARCHAR(40) NOT NULL,
    Costos INT(10) NOT NULL
    )";

     
    // use exec() because no results are returned
    $conn1->exec($sql1);
     
    echo "Tabla ventas_uio creada correctamente";
    
  } catch(PDOException $e) {
    echo $sql1 . "<br>" . $e->getMessage();
  
  }
  
  $conn1 = null;

  $conn2 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  try {
      $conn2 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
      // sql to create table
    $sql2 = "CREATE TABLE ventas_gye(
      Fecha DATE,
      Nombre_producto VARCHAR(40) NOT NULL,
      Costos INT(10) NOT NULL
      )";
      
    
      // use exec() because no results are returned
     
      $conn2->exec($sql2);
     
    echo "Tabla ventas_gye creada correctamente";
    } catch(PDOException $e) {
      
      echo $sql2 . "<br>" . $e->getMessage();
    
    }
    
    $conn2 = null;


?>