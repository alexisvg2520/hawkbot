<<?php
include("db.inc.php");

<<<<<<< HEAD

$conexion = mysqli_connect('$servername', '$username',  '$password'  );
=======
$connec = mysqli_connect($servername,$username,$password);

mysqli_select_db($dbname,$connec);
>>>>>>> 22fb7c17c7e25bdbd3d315f8b627057a13a93f57

mysqli_select_db('$dbname', $conexion);
