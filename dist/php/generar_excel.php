<?php
include("db.inc.php");
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

header ("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("content-Disposition: attachment; filename=datos-reporte.xls");
?>
<table>
<caption>Reportes</caption>  
<tr> 
    <th >Ene</th>
    <th >Feb</th>
    <th >Mar</th>
    <th >Abr</th>
    <th >May</th>
    <th >Jun</th>
    <th >Jul</th>
    <th >Ago</th>
    <th >Sep</th>
    <th >Oct</th>
    <th >Nov</th>
    <th >Dic</th>
</tr>
<?php $resultado = mysqli_query($connec,$enero,$febrero,$marzo,$abril,$mayo,$junio,$julio,$agosto,$septiembre,$octubre,$noviembre,$diciembre);
while($row=mysqli_fetch_assoc($resultado)){ ?>
<tr> 
    <td><?php echo $row["ciudad"];?></td>
    <td><?php echo $row["producto"];?></td>
    <td><?php echo $row["anio"];?></td>
</tr>
<?php } mysqli_free_result($resultado);?>
</table>