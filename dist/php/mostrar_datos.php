<?php
include "db.inc2.php";

$ciudad1 = $_POST['Quito'];
$ciudad2 = $_POST['Guayaquil'];
$producto1 = $_POST['Computadora'];
$producto2 = $_POST['Laptop'];
$producto3 = $_POST['Celular'];
$anio = $_POST['f_fecha'];



//ciudad 1
//ciudad 1 producto 1 
$enero = mysql_fetch_array(mys"SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=1 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1' ";
$febrero = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=2 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1' ";
$marzo = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=3 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1' ";
$abril = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=4 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1' ";
$mayo = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=5 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1' ";
$junio = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=6 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1' ";
$julio = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=7 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1' ";
$agosto = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=8 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1' ";
$septiembre= "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=9 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1' ";
$octubre = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=10 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1' ";
$noviembre = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=11 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1' ";
$diciembre = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=12 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1' ";
//ciudad 1 producto 2
$enero2 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=1 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1' ";
$febrero2 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=2 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1' ";
$marzo2 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=3 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1' ";
$abril2 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=4 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1' ";
$mayo2 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=5 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1' ";
$junio2 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=6 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1' ";
$julio2 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=7 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1' ";
$agosto2 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=8 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1' ";
$septiembre2= "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=9 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1' ";
$octubre2 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=10 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1' ";
$noviembre2 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=11 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1' ";
$diciembre2 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=12 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1' ";

//ciudad 1 producto 3
$enero3 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=1 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1' ";
$febrero3 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=2 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1' ";
$marzo3 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=3 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1' ";
$abril3 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=4 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1' ";
$mayo3 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=5 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1' ";
$junio3 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=6 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1' ";
$julio3 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=7 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1' ";
$agosto3 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=8 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1' ";
$septiembre3= "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=9 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1' ";
$octubre3 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=10 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1' ";
$noviembre3 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=11 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1' ";
$diciembre3 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=12 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1' ";

//ciudad 2 producto1
$enero4 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=1 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2' ";
$febrero4 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=2 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2' ";
$marzo4 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=3 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2' ";
$abril4 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=4 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2' ";
$mayo4 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=5 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2' ";
$junio4 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=6 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2' ";
$julio4 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=7 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2' ";
$agosto4 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=8 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2' ";
$septiembre4= "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=9 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2' ";
$octubre4 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=10 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2' ";
$noviembre4 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=11 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2' ";
$diciembre4 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=12 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2' ";
//ciudad 2 producto 2
$enero5 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=1 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2' ";
$febrero5 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=2 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2' ";
$marzo5 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=3 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2' ";
$abril5 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=4 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2' ";
$mayo5 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=5 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2' ";
$junio5 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=6 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2' ";
$julio5 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=7 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2' ";
$agosto5 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=8 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2' ";
$septiembre5= "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=9 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2' ";
$octubre5 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=10 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2' ";
$noviembre5 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=11 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2' ";
$diciembre5 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=12 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2' ";

//ciudad 2 producto 3
$enero6 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=1 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2' ";
$febrero6 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=2 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2' ";
$marzo6 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=3 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2' ";
$abril6 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=4 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2' ";
$mayo6 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=5 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2' ";
$junio6 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=6 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2' ";
$julio6 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=7 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2' ";
$agosto6 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=8 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2' ";
$septiembre6= "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=9 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2' ";
$octubre6 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=10 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2' ";
$noviembre6 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=11 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2' ";
$diciembre6 = "SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=12 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2' ";


$resultado = $conn->prepare($que);
$resultado->execute();

//variable tipo array
$json = array();

while ($row = $resultado->fetch(PDO::FETCH_ASSOC)){
    $json ['USUARIOS'][] = $row;
}
echo json_encode($json);
?>