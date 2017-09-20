<?php 
  use app\models\Penulis; 
?>
<script>

FusionCharts.ready(function(){
      var revenueChart = new FusionCharts({
        "type": "Column3d",
        "renderAt": "grafik-penulis",
        "width": "100%",
        "height": "300",
        "dataFormat": "json",
        "dataSource": {
          "chart": {
              "caption" : "Grafik Penulis",
              "xAxisName": "Nama Penulis",
              "yAxisName": "Jumlah",
              "theme": "fint"
           },
          "data":        
              [ <?php print Penulis::getGrafikPenulis(); ?> ]
        }
    });
    revenueChart.render();
})
        
</script> 
<div id="grafik-penulis"> FusionChart XT will load here! </div>