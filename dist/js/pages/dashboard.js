/*
 * Author: Abdullah A Almsaeed
 * Date: 4 Jan 2014
 * Description:
 *      This is a demo file used only for the main dashboard (index.html)
 **/

/* global moment:false, Chart:false, Sparkline:false */

$(function () {
  'use strict'

  // Make the dashboard widgets sortable Using jquery UI
  $('.connectedSortable').sortable({
    placeholder: 'sort-highlight',
    connectWith: '.connectedSortable',
    handle: '.card-header, .nav-tabs',
    forcePlaceholderSize: true,
    zIndex: 999999
  })
  $('.connectedSortable .card-header').css('cursor', 'move')
})



$(document).ready(function() {

  $("#btn_filtrar").click(function(){

    let ciudad=$("#opcion_ciudades option:selected").text();
    let producto=$("#opcion_productos option:selected").text();
    let anio=$("#fecha").val();   

    $.ajax({
      url: "dist/php/mostrar_datos.php",
      method: 'POST',
      async: true,
      data: {ciudad:ciudad, producto:producto, anio:anio},
      datatype:'json',
      cache: false,
      success:function(data) {
         alert( 'El servidor devolvio "' + data + '"' );
         $("#mostrar_json").html(data);
         
         
      }
    });

    $.getJSON("dist/php/mostrar_datos.php" , function(data) {
      var tbl_body = "";
      $.each(data, function() {
          var tbl_row = "";
          $.each(this, function(k , v) {
              tbl_row += "<td>"+v+"</td>";
          })
          tbl_body += "<tr>"+tbl_row+"</tr>";                 
      })
      $("#mostrar_tabla tbody").html(tbl_body);
  });


    
    $("#figura1").fadeIn(3000,function(){
      var title= {
    
        text: 'VENTAS EN LA CIUDAD DE ' + ciudad
         
     };
    
          
     var subtitle = {
        text: producto + ' en el año de ' + anio
     };
     var xAxis = {
        categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
           'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
     };
     var yAxis = {
        title: {
           text: 'Ventas ($ USD)'
        },
        plotLines: [{
           value: 0,
           width: 1,
           color: '#808080'
        }]
     };   
   
     var tooltip = {
        valueSuffix: '\xB0C'
     }
     var legend = {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
        borderWidth: 0
     };
     var series =  [{
           name: 'Tokyo',
           data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2,
              26.5, 23.3, 18.3, 13.9, 9.6]
        }, 
     ];
   
     var json = {};
     json.title = title;
     json.subtitle = subtitle;
     json.xAxis = xAxis;
     json.yAxis = yAxis;
     json.tooltip = tooltip;
     json.legend = legend;
     json.series = series;
   
     $('#container').highcharts(json);

    });
  });

   


});
