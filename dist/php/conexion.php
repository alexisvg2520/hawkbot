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
    Nombre_producto VARCHAR(40) NOT NULL,
    Costos INT(10) NOT NULL,
    Fecha DATE
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
      Nombre_producto VARCHAR(40) NOT NULL,
      Costos INT(10) NOT NULL,
      Fecha DATE
      )";
      
    
      // use exec() because no results are returned
     
      $conn2->exec($sql2);
     
    echo "Tabla ventas_gye creada correctamente";
    } catch(PDOException $e) {
      
      echo $sql2 . "<br>" . $e->getMessage();
    
    }
    
    $conn2 = null;


    try {
      $conn3 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql3 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha) VALUES('computadora',7000,'2014-03-01')";
      $sql4 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha) VALUES('computadora',4500,'2014-07-01')";
      $sql5 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha) VALUES('computadora',8030,'2015-08-01')";
      $sql6 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('computadora',4600,'2015-02-01')";
      $sql7 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('computadora',7629,'2016-09-01')";
      $sql8 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('computadora',5000,'2016-11-01')";
      $sql9 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('computadora',5890,'2017-12-01')";
      $sql10 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('computadora',4086,'2017-01-01')";
      $sql11 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('computadora',2990,'2020-03-01')";
      $sql12 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('computadora',7798,'2020-10-01')";
      $sql13 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('computadora',4993,'2020-06-01')";
      $sql14= "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('laptop',3094,'2014-04-01')";
      $sql15 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('laptop',2873,'2015-06-01')";
      $sql16 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('laptop',1727,'2016-09-01')";
      $sql17 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('laptop',2993,'2017-08-01')";
      $sql18 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('laptop',3832,'2018-01-01')";
      $sql19 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('laptop',1093,'2019-03-01')";
      $sql20 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('laptop',4000,'2020-12-01')";
      $sql21 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('laptop',1883,'2020-01-01')";
      $sql22 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('laptop',4372,'2015-11-01')";
      $sql23 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('laptop',3904,'2016-10-01')";
      $sql24 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('celular',2900,'2015-12-01')";
      $sql25 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('celular',1028,'2012-01-01')";
      $sql26 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('celular',900,'20005-04-01')";
      $sql27 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('celular',1000,'2019-05-01')";
      $sql28 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('celular',1990,'2018-07-01')";
     
      $conn3->exec($sql3);
      $conn3->exec($sql4);
      $conn3->exec($sql5);
      $conn3->exec($sql6);
      $conn3->exec($sql7);
      $conn3->exec($sql8);
      $conn3->exec($sql9);
      $conn3->exec($sql10);
      $conn3->exec($sql11);
      $conn3->exec($sql12);
      $conn3->exec($sql13);
      $conn3->exec($sql14);
      $conn3->exec($sql15);
      $conn3->exec($sql16);
      $conn3->exec($sql17);
      $conn3->exec($sql18);
      $conn3->exec($sql19);
      $conn3->exec($sql20);
      $conn3->exec($sql21);
      $conn3->exec($sql21);
      $conn3->exec($sql23);
      $conn3->exec($sql24);
      $conn3->exec($sql25);
      $conn3->exec($sql26);
      $conn3->exec($sql27);
      $conn3->exec($sql28);
      
      echo "New record created successfully";
    } catch(PDOException $e) {
      echo $sql3 . "<br>" . $e->getMessage();
    }
    
    $conn3 = null;
    ?>


?>