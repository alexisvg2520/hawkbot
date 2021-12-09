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
    $sql1 = "CREATE TABLE ventas (
    Nombre_producto VARCHAR(40) NOT NULL,
    Costos INT(10) NOT NULL,
    Ciudad VARCHAR(40) NOT NULL,
    Fecha DATE
    )";

     
    // use exec() because no results are returned
    $conn1->exec($sql1);
     
    echo "Tabla ventas creada correctamente";
    
  } catch(PDOException $e) {
    echo $sql1 . "<br>" . $e->getMessage();
  
  }
  
  $conn1 = null;

  


    try {
      $conn3 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql3 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha) VALUES('Computadora',7000,'Quito','2014-03-01')";
      $sql4 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha) VALUES('Computadora',4500,'Guayaquil','2014-07-01')";
      $sql5 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha) VALUES('Computadora',8030,'Guayaquil','2015-08-01')";
      $sql6 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4600,'Quito','2015-02-01')";
      $sql7 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',7629,'Quito','2016-09-01')";
      $sql8 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',5000,'Guayaquil','2016-11-01')";
      $sql9 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',5890,'Quito','2017-12-01')";
      $sql10 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4086,'Guayaquil','2017-01-01')";
      $sql11 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',2990,'Guayaquil','2020-03-01')";
      $sql12 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',7798,'Quito','2020-10-01')";
      $sql13 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2020-06-01')";
      $sql14= "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',3094,'Quito','2014-04-01')";
      $sql15 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',2873,'Quito','2015-06-01')";
      $sql16 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',1727,'Quito','2016-09-01')";
      $sql17 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',2993,'Guayaquil','2017-08-01')";
      $sql18 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',3832,'Guayaquil','2018-01-01')";
      $sql19 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',1093,'Guayaquil','2019-03-01')";
      $sql20 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4000,'Quito','2020-12-01')";
      $sql21 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',1883,'Guayaquil','2020-01-01')";
      $sql22 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4372,'Quito','2015-11-01')";
      $sql23 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',3904,'Guayaquil','2016-10-01')";
      $sql24 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',2900,'Quito','2015-12-01')";
      $sql25 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',1028,'Guayaquil','2012-01-01')";
      $sql26 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',900,'Guayaquil','2005-04-01')";
      $sql27 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',1000,'Quito','2019-05-01')";
      $sql28 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',1990,'Quito','2018-07-01')";
     
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