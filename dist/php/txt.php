<?php
include ("db.inc.php");


$connec = mysqli_connect($servername,$username,$password,$dbname);
$file = 'datos.txt';
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

        echo json_encode($data);

    }

}


$rs = mysql_query($data,$connec);
if (mysql_num_rows($rs) != 0) {
    $jump = "\r\n";
    $separator = "\t";
    $fp = fopen($file, 'a');
    $registro = 'ventas' . $data;
    fwrite($fp, $registro);
    while($row = mysql_fetch_array($rs)) {
        $registro = $row['$data'] ;
        fwrite($fp, $registro);
    }
}
fclose($fp);
chmod($file, 0777);
echo 'Se han guardado '.mysql_num_rows($rs).' registros en el txt!';
?>