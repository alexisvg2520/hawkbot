<?php
include ("db.inc2.php");

$ciudad1 = $_POST['Quito'];
$ciudad2 = $_POST['Guayaquil'];
$producto1 = $_POST['Computadora'];
$producto2 = $_POST['Laptop'];
$producto3 = $_POST['Celular'];
$anio = $_POST['f_fecha'];



//ciudad 1
//ciudad 1 producto 1 
$enero = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=1 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1'   "));
$febrero = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=2 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1'   "));
$marzo = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=3 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1'   "));
$abril = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=4 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1'   "));
$mayo = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=5 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1'   "));
$junio = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=6 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1'   "));
$julio = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=7 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1'   "));
$agosto = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=8 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1'   "));
$septiembre= mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=9 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1'   "));
$octubre = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=10 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1'   "));
$noviembre = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=11 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1'   "));
$diciembre = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=12 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad1'   "));
//ciudad 1 producto 2
$enero2 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=1 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1'   "));
$febrero2 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=2 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1'   "));
$marzo2 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=3 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1'   "));
$abril2 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=4 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1'   "));
$mayo2 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=5 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1'   "));
$junio2 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=6 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1'   "));
$julio2 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=7 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1'   "));
$agosto2 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=8 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1'   "));
$septiembre2= mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=9 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1'   "));
$octubre2 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=10 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1'   "));
$noviembre2 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=11 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1'   "));
$diciembre2 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=12 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad1'   "));

//ciudad 1 producto 3
$enero3 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=1 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1'   "));
$febrero3 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=2 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1'   "));
$marzo3 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=3 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1'   "));
$abril3 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=4 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1'   "));
$mayo3 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=5 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1'   "));
$junio3 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=6 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1'   "));
$julio3 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=7 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1'   "));
$agosto3 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=8 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1'   "));
$septiembre3= mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=9 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1'   "));
$octubre3 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=10 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1'   "));
$noviembre3 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=11 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1'   "));
$diciembre3 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=12 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad1'   "));

//ciudad 2 producto1
$enero4 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=1 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2'   "));
$febrero4 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=2 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2'   "));
$marzo4 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=3 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2'   "));
$abril4 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=4 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2'   "));
$mayo4 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=5 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2'   "));
$junio4 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=6 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2'   "));
$julio4 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=7 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2'   "));
$agosto4 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=8 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2'   "));
$septiembre4= mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=9 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2'   "));
$octubre4 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=10 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2'   "));
$noviembre4 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=11 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2'   "));
$diciembre4 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=12 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto1' AND  Ciudad='$ciudad2'   "));
//ciudad 2 producto 2
$enero5 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=1 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2'   "));
$febrero5 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=2 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2'   "));
$marzo5 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=3 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2'   "));
$abril5 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=4 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2'   "));
$mayo5 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=5 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2'   "));
$junio5 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=6 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2'   "));
$julio5 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=7 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2'   "));
$agosto5 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=8 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2'   "));
$septiembre5= mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=9 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2'   "));
$octubre5 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=10 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2'   "));
$noviembre5 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=11 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2'   "));
$diciembre5 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=12 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto2' AND  Ciudad='$ciudad2'   "));

//ciudad 2 producto 3
$enero6 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=1 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2'   "));
$febrero6 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=2 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2'   "));
$marzo6 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=3 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2'   "));
$abril6 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=4 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2'   "));
$mayo6 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=5 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2'   "));
$junio6 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=6 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2'   "));
$julio6 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=7 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2'   "));
$agosto6 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=8 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2'   "));
$septiembre6= mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=9 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2'   "));
$octubre6 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=10 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2'   "));
$noviembre6 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=11 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2'   "));
$diciembre6 = mysql_fetch_array(mysql_query("SELECT SUM(Costos) as s FROM ventas where MONTH (Fecha)=12 AND YEAR (Fecha)='$anio' AND Nombre_producto = '$producto3' AND  Ciudad='$ciudad2'   "));

//producto 1 ciudad 1
$data1 = array (0=>round ($enero['s'],1),
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
                11=>round($diciembre['s'],1)        );

//producto 2 ciudad 1
$data2 = array (0=>round($enero2['s'],1),
                1=>round($febrero2['s'],1),      
                2=>round($marzo2['s'],1),  
                3=>round($abril2['s'],1),  
                4=>round($mayo2['s'],1),  
                5=>round($junio2['s'],1),  
                6=>round($julio2['s'],1),  
                7=>round($agosto2['s'],1),  
                8=>round($septiembre2['s'],1),  
                9=>round($octubre2['s'],1),  
                10=>round($noviembre2['s'],1),
                11=>round($diciembre2['s'],1)        );


//producto 3 ciudad 1
$data3 = array (0=>round($enero3['s'],1),
                1=>round($febrero3['s'],1),      
                2=>round($marzo3['s'],1),  
                3=>round($abril3['s'],1),  
                4=>round($mayo3['s'],1),  
                5=>round($junio3['s'],1),  
                6=>round($julio3['s'],1),  
                7=>round($agosto3['s'],1),  
                8=>round($septiembre3['s'],1),  
                9=>round($octubre3['s'],1),  
                10=>round($noviembre3['s'],1),
                11=>round($diciembre3['s'],1)        );


//producto 1 ciudad 1
$data4 = array (0=>round($enero4['s'],1),
                1=>round($febrero4['s'],1),      
                2=>round($marzo4['s'],1),  
                3=>round($abril4['s'],1),  
                4=>round($mayo4['s'],1),  
                5=>round($junio4['s'],1),  
                6=>round($julio4['s'],1),  
                7=>round($agosto4['s'],1),  
                8=>round($septiembre4['s'],1),  
                9=>round($octubre4['s'],1),  
                10=>round($noviembre4['s'],1),
                11=>round($diciembre4['s'],1)        );


//producto 1 ciudad 1
$data5 = array (0=>round($enero5['s'],1),
                1=>round($febrero5['s'],1),      
                2=>round($marzo5['s'],1),  
                3=>round($abril5['s'],1),  
                4=>round($mayo5['s'],1),  
                5=>round($junio5['s'],1),  
                6=>round($julio5['s'],1),  
                7=>round($agosto5['s'],1),  
                8=>round($septiembre5['s'],1),  
                9=>round($octubre5['s'],1),  
                10=>round($noviembre5['s'],1),
                11=>round($diciembre5['s'],1)        );

//producto 1 ciudad 1
$data6 = array (0=>round($enero6['s'],1),
                1=>round($febrer6['s'],1),      
                2=>round($marzo6['s'],1),  
                3=>round($abril6['s'],1),  
                4=>round($mayo6['s'],1),  
                5=>round($junio6['s'],1),  
                6=>round($julio6['s'],1),  
                7=>round($agosto6['s'],1),  
                8=>round($septiembre6['s'],1),  
                9=>round($octubre6['s'],1),  
                10=>round($noviembre6['s'],1),
                11=>round($diciembre6['s'],1)        );




            

echo json_encode($data1);
echo json_encode($data2);
echo json_encode($data3);
echo json_encode($data4);
echo json_encode($data5);
echo json_encode($data6);
?>