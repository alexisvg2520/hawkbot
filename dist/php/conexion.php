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
     
    echo "Tabla ventas_gye creada correctamente";
    
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
      $sql3 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha) VALUES('Computadora',7000,'2014-03-01')";
      $sql4 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha) VALUES('Computadora',4500,'2014-07-01')";
      $sql5 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha) VALUES('Computadora',8030,'2015-08-01')";
      $sql6 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Computadora',4600,'2015-02-01')";
      $sql7 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Computadora',7629,'2016-09-01')";
      $sql8 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Computadora',5000,'2016-11-01')";
      $sql9 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Computadora',5890,'2017-12-01')";
      $sql10 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Computadora',4086,'2017-01-01')";
      $sql11 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Computadora',2990,'2020-03-01')";
      $sql12 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Computadora',7798,'2020-10-01')";
      $sql13 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Computadora',4993,'2020-06-01')";
      $sql14= "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Laptop',3094,'2014-04-01')";
      $sql15 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Laptop',2873,'2015-06-01')";
      $sql16 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Laptop',1727,'2016-09-01')";
      $sql17 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Laptop',2993,'2017-08-01')";
      $sql18 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Laptop',3832,'2018-01-01')";
      $sql19 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Laptop',1093,'2019-03-01')";
      $sql20 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Laptop',4000,'2020-12-01')";
      $sql21 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Laptop',1883,'2020-01-01')";
      $sql22 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Laptop',4372,'2015-11-01')";
      $sql23 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Laptop',3904,'2016-10-01')";
      $sql24 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Celular',2900,'2015-12-01')";
      $sql25 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Celular',1028,'2012-01-01')";
      $sql26 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Celular',900,'2005-04-01')";
      $sql27 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Celular',1000,'2019-05-01')";
      $sql28 = "INSERT INTO ventas_uio (Nombre_producto, Costos,Fecha)VALUES('Celular',1990,'2018-07-01')";
     
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


    try {
      $conn4 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn4->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql100 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha) VALUES('Computadora',8500,'2020-02-01')";
      $sql101 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha) VALUES('Computadora',7000,'2020-09-01')";
      $sql102 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha) VALUES('Computadora',8720,'2019-02-01')";
      $sql103 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Computadora',2060,'2017-11-01')";
      $sql104 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Computadora',7040,'2018-12-01')";
      $sql105 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Computadora',8530,'2020-04-01')";
      $sql106 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Computadora',6900,'2016-07-01')";
      $sql107 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Computadora',5040,'2014-08-01')";
      $sql108 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Computadora',3990,'2012-10-01')";
      $sql109 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Computadora',6790,'2017-09-01')";
      $sql110 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Computadora',5870,'2016-01-01')";
      $sql111 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Laptop',6990,'2019-01-01')";
      $sql112 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Laptop',6790,'2018-04-01')";
      $sql113 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Laptop',5000,'2017-09-01')";
      $sql114 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Laptop',5890,'2016-02-01')";
      $sql115 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Laptop',5500,'2016-01-01')";
      $sql116 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Laptop',4300,'2015-12-01')";
      $sql117 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Laptop',2030,'2009-08-01')";
      $sql118 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Laptop',2500,'2015-10-01')";
      $sql119 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Laptop',4000,'2018-05-01')";
      $sql120 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Laptop',3990,'2010-11-01')";
      $sql121 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Celular',3000,'2016-03-01')";
      $sql122 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Celular',3500,'2019-04-01')";
      $sql123 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Celular',2500,'2017-07-01')";
      $sql124 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Celular',1000,'2015-06-01')";
      $sql125 = "INSERT INTO ventas_gye (Nombre_producto, Costos,Fecha)VALUES('Celular',850,'2008-12-01')";
     
      $conn4->exec($sql100);
      $conn4->exec($sql101);
      $conn4->exec($sql102);
      $conn4->exec($sql103);
      $conn4->exec($sql104);
      $conn4->exec($sql105);
      $conn4->exec($sql106);
      $conn4->exec($sql107);
      $conn4->exec($sql108);
      $conn4->exec($sql109);
      $conn4->exec($sql110);
      $conn4->exec($sql111);
      $conn4->exec($sql112);
      $conn4->exec($sql113);
      $conn4->exec($sql114);
      $conn4->exec($sql115);
      $conn4->exec($sql116);
      $conn4->exec($sql117);
      $conn4->exec($sql118);
      $conn4->exec($sql119);
      $conn4->exec($sql120);
      $conn4->exec($sql121);
      $conn4->exec($sql122);
      $conn4->exec($sql123);
      $conn4->exec($sql124);
      $conn4->exec($sql125);
      
      echo "New record created successfully";
    } catch(PDOException $e) {
      echo $sql3 . "<br>" . $e->getMessage();
    }
    
    $conn4 = null;
    ?>


?>