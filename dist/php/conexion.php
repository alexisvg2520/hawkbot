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
      $sql3 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha) VALUES('Computadora',7000,'Quito','2014-02-01')";
      $sql4 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha) VALUES('Computadora',4500,'Guayaquil','2014-07-01')";
      $sql5 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha) VALUES('Computadora',8030,'Guayaquil','2014-09-01')";
      $sql6 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4600,'Quito','2014-02-01')";
      $sql7 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',7629,'Quito','2017-12-01')";
      $sql8 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',5000,'Guayaquil','2020-11-01')";
      $sql9 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',5890,'Quito','2017-11-01')";
      $sql10 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4086,'Guayaquil','2017-05-01')";
      $sql11 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',2990,'Guayaquil','2020-01-01')";
      $sql12 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',7798,'Quito','2020-06-01')";
      $sql13 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2020-06-01')";
      $sql14 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2020-09-01')";
      $sql15 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2020-04-01')";
      $sql16 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2020-03-01')";
      $sql17 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2015-06-01')";
      $sql18 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',3094,'Quito','2014-07-01')";
      $sql19 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',2873,'Quito','2014-04-01')";
      $sql20 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',1727,'Quito','2020-07-01')";
      $sql21 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',2993,'Guayaquil','2017-08-01')";
      $sql22 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',3832,'Guayaquil','2017-06-01')";
      $sql23 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',1093,'Guayaquil','2019-02-01')";
      $sql24 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4000,'Quito','2020-12-01')";
      $sql25 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',1883,'Guayaquil','2019-12-01')";
      $sql26 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4372,'Quito','2016-02-01')";
      $sql27 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',3904,'Quito','2016-11-01')";
      $sql28 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',3904,'Quito','2016-08-01')";
      $sql29 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',3904,'Guayaquil','2016-02-01')";
      $sql30 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',3904,'Guayaquil','2016-12-01')";
      $sql31 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',3904,'Quito','2015-12-01')";
      $sql32 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',3904,'Guayaquil','2012-11-01')";
      $sql33 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',2900,'Quito','2015-05-01')";
      $sql34 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',1028,'Guayaquil','2012-10-01')";
      $sql35 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',900,'Guayaquil','2005-04-01')";
      $sql36 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',1000,'Quito','2019-02-01')";
      $sql37 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',1990,'Guayaquil','2018-07-01')";
      $sql38 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',1990,'Quito','2018-07-01')";
      $sql39 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',1990,'Guayaquil','2016-07-01')";
      $sql40 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',1990,'Guayaquil','2016-02-01')";
      $sql41 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',1990,'Quito','2015-11-01')";
      $sql42 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',1990,'Quito','2015-10-01')";
      $sql43 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',1990,'Quito','2015-02-01')";
      $sql44 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',1990,'Guayaquil','2014-01-01')";
      $sql45 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',1990,'Guayaquil','2014-12-01')";
      $sql46 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',1990,'Quito','2012-04-01')";
      $sql47 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',1990,'Quito','2012-04-01')";
      $sql48 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',1990,'Quito','2012-02-01')";
      $sql49 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',1990,'Quito','2012-03-01')";

      $sql50 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2010-04-01')";
      $sql51 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2010-08-01')";
      $sql52 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2010-04-01')";
      $sql53 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2010-08-01')";
      $sql54 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2011-12-01')";
      $sql55 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2011-05-01')";
      $sql56 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2011-02-01')";
      $sql57 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2011-05-01')";
      $sql58 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2012-10-01')";
      $sql59 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2012-03-01')";
      $sql60 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2012-01-01')";
      $sql61 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2012-06-01')";
      $sql62 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2013-03-01')";
      $sql63 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2013-07-01')";
      $sql64 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2013-09-01')";
      $sql65 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2013-12-01')";
      $sql66 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2015-03-01')";
      $sql67 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2015-07-01')";
      $sql68 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2015-09-01')";
      $sql69 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2015-12-01')";
      $sql70 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2016-11-01')";
      $sql71 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2016-02-01')";
      $sql72 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2016-10-01')";
      $sql73 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2016-05-01')";
      $sql74 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2017-03-01')";
      $sql75 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2017-08-01')";
      $sql76 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2018-11-01')";
      $sql77 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2018-02-01')";
      $sql78 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2018-10-01')";
      $sql79 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2018-05-01')";
      $sql80 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2019-03-01')";
      $sql81 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2019-07-01')";
      $sql82 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2019-09-01')";
      $sql83 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2019-12-01')";
      $sql84 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2020-03-01')";
      $sql85 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Quito','2020-07-01')";
      $sql86 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2020-09-01')";
      $sql87 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Computadora',4993,'Guayaquil','2020-12-01')";

      $sql88 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Quito','2010-04-01')";
      $sql89 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Quito','2010-08-01')";
      $sql90 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2010-04-01')";
      $sql91 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2010-08-01')";
      $sql92 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Quito','2011-12-01')";
      $sql93 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Quito','2011-05-01')";
      $sql94 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2011-02-01')";
      $sql95 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2011-05-01')";
      $sql96 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Quito','2012-10-01')";
      $sql97 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Quito','2012-03-01')";
      $sql98 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2012-01-01')";
      $sql99 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2012-06-01')";
      $sql100 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Quito','2013-03-01')";
      $sql101 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Quito','2013-07-01')";
      $sql102 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2013-09-01')";
      $sql103 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2013-12-01')";
      $sql104 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Quito','2015-03-01')";
      $sql105 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Quito','2015-07-01')";
      $sql106 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2015-09-01')";
      $sql107 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2015-12-01')";
      $sql108 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Quito','2016-11-01')";
      $sql109 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Quito','2016-02-01')";
      $sql110 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2016-10-01')";
      $sql111 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2016-05-01')";
      $sql112 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2017-03-01')";
      $sql113 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2017-08-01')";
      $sql114 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Quito','2018-11-01')";
      $sql115 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Quito','2018-02-01')";
      $sql116 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2018-10-01')";
      $sql117 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2018-05-01')";
      $sql118 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Quito','2019-03-01')";
      $sql119 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Quito','2019-07-01')";
      $sql120 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2019-09-01')";
      $sql121 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2019-12-01')";
      $sql122 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Quito','2020-03-01')";
      $sql123 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Quito','2020-07-01')";
      $sql124 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2020-09-01')";
      $sql125 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Laptop',4993,'Guayaquil','2020-12-01')";

      $sql126 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Quito','2010-04-01')";
      $sql127 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Quito','2010-08-01')";
      $sql128 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2010-04-01')";
      $sql129 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2010-08-01')";
      $sql130 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Quito','2011-12-01')";
      $sql131 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Quito','2011-05-01')";
      $sql132 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2011-02-01')";
      $sql133 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2011-05-01')";
      $sql134 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Quito','2012-10-01')";
      $sql135 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Quito','2012-03-01')";
      $sql136 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2012-01-01')";
      $sql137 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2012-06-01')";
      $sql138 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Quito','2013-03-01')";
      $sql139 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Quito','2013-07-01')";
      $sql140 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2013-09-01')";
      $sql141 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2013-12-01')";
      $sql142 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Quito','2015-03-01')";
      $sql143 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Quito','2015-07-01')";
      $sql144 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2015-09-01')";
      $sql145 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2015-12-01')";
      $sql146 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Quito','2016-11-01')";
      $sql147 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Quito','2016-02-01')";
      $sql148 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2016-10-01')";
      $sql149 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2016-05-01')";
      $sql150 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2017-03-01')";
      $sql151 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2017-08-01')";
      $sql152 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Quito','2018-11-01')";
      $sql153 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Quito','2018-02-01')";
      $sql154 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2018-10-01')";
      $sql155 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2018-05-01')";
      $sql156 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Quito','2019-03-01')";
      $sql157 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Quito','2019-07-01')";
      $sql158 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2019-09-01')";
      $sql159 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2019-12-01')";
      $sql160 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Quito','2020-03-01')";
      $sql161 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Quito','2020-07-01')";
      $sql162 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2020-09-01')";
      $sql163 = "INSERT INTO ventas (Nombre_producto, Costos, Ciudad, Fecha)VALUES('Celular',4993,'Guayaquil','2020-12-01')";
      
     
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
      $conn3->exec($sql29);
      $conn3->exec($sql30);
      $conn3->exec($sql31);
      $conn3->exec($sql32);
      $conn3->exec($sql33);
      $conn3->exec($sql34);
      $conn3->exec($sql35);
      $conn3->exec($sql36);
      $conn3->exec($sql37);
      $conn3->exec($sql38);
      $conn3->exec($sql39);
      $conn3->exec($sql40);
      $conn3->exec($sql41);
      $conn3->exec($sql42);
      $conn3->exec($sql43);
      $conn3->exec($sql44);
      $conn3->exec($sql45);
      $conn3->exec($sql46);
      $conn3->exec($sql47);
      $conn3->exec($sql48);
      $conn3->exec($sql49);
      $conn3->exec($sql50);
      $conn3->exec($sql51);
      $conn3->exec($sql52);
      $conn3->exec($sql53);
      $conn3->exec($sql54);
      $conn3->exec($sql55);
      $conn3->exec($sql56);
      $conn3->exec($sql57);
      $conn3->exec($sql58);
      $conn3->exec($sql59);
      $conn3->exec($sql60);
      $conn3->exec($sql61);
      $conn3->exec($sql62);
      $conn3->exec($sql63);
      $conn3->exec($sql64);
      $conn3->exec($sql65);
      $conn3->exec($sql66);
      $conn3->exec($sql67);
      $conn3->exec($sql68);
      $conn3->exec($sql69);
      $conn3->exec($sql70);
      $conn3->exec($sql71);
      $conn3->exec($sql72);
      $conn3->exec($sql73);
      $conn3->exec($sql74);
      $conn3->exec($sql75);
      $conn3->exec($sql76);
      $conn3->exec($sql77);
      $conn3->exec($sql78);
      $conn3->exec($sql79);
      $conn3->exec($sql80);
      $conn3->exec($sql81);
      $conn3->exec($sql82);
      $conn3->exec($sql83);
      $conn3->exec($sql84);
      $conn3->exec($sql85);
      $conn3->exec($sql86);
      $conn3->exec($sql87);
      $conn3->exec($sql88);
      
      $conn3->exec($sql89);
      $conn3->exec($sql90);
      $conn3->exec($sql91);
      $conn3->exec($sql92);
      $conn3->exec($sql93);
      $conn3->exec($sql94);
      $conn3->exec($sql95);
      $conn3->exec($sql96);
      $conn3->exec($sql97);
      $conn3->exec($sql98);
      $conn3->exec($sql99);
      $conn3->exec($sql100);
      $conn3->exec($sql101);
      $conn3->exec($sql102);
      $conn3->exec($sql103);
      $conn3->exec($sql104);
      $conn3->exec($sql105);
      $conn3->exec($sql106);
      $conn3->exec($sql107);
      $conn3->exec($sql108);
      $conn3->exec($sql109);
      $conn3->exec($sql110);
      $conn3->exec($sql111);
      $conn3->exec($sql112);
      $conn3->exec($sql113);
      $conn3->exec($sql114);
      $conn3->exec($sql115);
      $conn3->exec($sql116);
      $conn3->exec($sql117);
      $conn3->exec($sql118);
      $conn3->exec($sql119);
      $conn3->exec($sql120);
      $conn3->exec($sql121);
      $conn3->exec($sql122);
      $conn3->exec($sql123);
      $conn3->exec($sql124);
      $conn3->exec($sql125);
      $conn3->exec($sql126);
      $conn3->exec($sql127);
      $conn3->exec($sql128);
      $conn3->exec($sql129);
      $conn3->exec($sql130);
      $conn3->exec($sql131);
      $conn3->exec($sql132);
      $conn3->exec($sql133);
      $conn3->exec($sql134);
      $conn3->exec($sql135);
      $conn3->exec($sql136);

      $conn3->exec($sql137);
      $conn3->exec($sql138);
      $conn3->exec($sql139);
      $conn3->exec($sql140);
      $conn3->exec($sql141);
      $conn3->exec($sql142);
      $conn3->exec($sql143);
      $conn3->exec($sql144);
      $conn3->exec($sql145);
      $conn3->exec($sql146);
      $conn3->exec($sql147);
      $conn3->exec($sql148);
      $conn3->exec($sql149);
      $conn3->exec($sql150);
      $conn3->exec($sql151);
      $conn3->exec($sql152);
      $conn3->exec($sql153);
      $conn3->exec($sql154);
      $conn3->exec($sql155);
      $conn3->exec($sql156);
      $conn3->exec($sql157);
      $conn3->exec($sql158);
      $conn3->exec($sql159);
      $conn3->exec($sql160);
      $conn3->exec($sql161);
      $conn3->exec($sql162);
      $conn3->exec($sql163);
      
      echo "New record created successfully";
    } catch(PDOException $e) {
      echo $sql3 . "<br>" . $e->getMessage();
    }
    
    $conn3 = null;
    
?>