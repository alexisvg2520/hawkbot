<?php
include ("db.inc.php");

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

        $data = array (0=>round ($enero['s'],1),
            1=>round($febrero['s'],1),      
            2=>round($marzo['s'],1),  
            3=>round($abril['s'],1),  
            4=>round($mayo['s'],1),  
            5=>round($junio['s'],1),  
            6=>round($julio['s'],1),  
            7=>round($agosto['s'],1),  
            8=>round($septiembre['s'],1),  
            9=>round($octubre['s'],1),  
            10=>round($noviembre['s'],1),
            11=>round($diciembre['s'],1));

        echo json_encode($data);

    }

}
?>


        
        