<<?php
include("db.inc.php");


$conexion = mysqli_connect('$servername', '$username',  '$password'  );

mysqli_select_db('$dbname', $conexion);
