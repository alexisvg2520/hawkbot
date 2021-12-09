<?php
include("db.inc.php");
header ("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=datos-reporte.xls");

$connec = mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST["ciudad"]) && isset($_POST["producto"])){
    if(isset($_POST["anio"])){

        $ciudad = $_POST['ciudad'];
        $producto = $_POST['producto'];
        $anio = $_POST['anio'];

$enero = mysqli_fetch_array(mysqli_query($connec,"SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=1 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto' AND  Ciudad='$ciudad'   "));
$febrero = mysqli_fetch_array(mysqli_query($connec,"SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=2 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto' AND  Ciudad='$ciudad'   "));
$marzo = mysqli_fetch_array(mysqli_query($connec,"SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=3 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto' AND  Ciudad='$ciudad'   "));
$abril = mysqli_fetch_array(mysqli_query($connec,"SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=4 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto' AND  Ciudad='$ciudad'   "));
$mayo = mysqli_fetch_array(mysqli_query($connec,"SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=5 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto' AND  Ciudad='$ciudad'   "));
$junio = mysqli_fetch_array(mysqli_query($connec,"SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=6 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto' AND  Ciudad='$ciudad'   "));
$julio = mysqli_fetch_array(mysqli_query($connec,"SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=7 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto' AND  Ciudad='$ciudad'   "));
$agosto = mysqli_fetch_array(mysqli_query($connec,"SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=8 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto' AND  Ciudad='$ciudad'   "));
$septiembre= mysqli_fetch_array(mysqli_query($connec,"SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=9 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto' AND  Ciudad='$ciudad'   "));
$octubre = mysqli_fetch_array(mysqli_query($connec,"SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=10 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto' AND  Ciudad='$ciudad'   "));
$noviembre = mysqli_fetch_array(mysqli_query($connec,"SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=11 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto' AND  Ciudad='$ciudad'   "));
$diciembre = mysqli_fetch_array(mysqli_query($connec,"SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=12 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto' AND  Ciudad='$ciudad'   "));

$data = array ("ene" =>round ($enero['s'],1),
"feb"=>round($febrero['s'],1),      
"mar"=>round($marzo['s'],1),  
"abr"=>round($abril['s'],1),  
"may"=>round($mayo['s'],1),  
"jun"=>round($junio['s'],1),  
"jul"=>round($julio['s'],1),  
"ago"=>round($agosto['s'],1),  
"sep"=>round($septiembre['s'],1),  
"oct"=>round($octubre['s'],1),  
"nov"=>round($noviembre['s'],1),
"dic"=>round($diciembre['s'],1));

$result = $connec->query($enero);

echo "<table>";
echo "<caption>Reportes</caption>";
echo "<tr>";
echo " <th >Ene</th>";
echo " <th >Feb</th>";

echo "</tr>";

while($row=$result->fetch_array(MYSQLI_ASSOC)){ 
    echo "<tr>  <td>" .  $row["$data"] ."</td> </tr>";
     } 
     echo "</table>";

$result->free();
    }
}




 