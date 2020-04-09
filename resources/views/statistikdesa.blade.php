<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
    
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Perempuan',     200],
          ['Laki-Laki',      200]
        ]);

        var options = {
          title: 'Statistik Desa',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Statistik Desa</h4>
                            <ul class="list">
                              
                                    <div id="piechart_3d" style="width: 300px; height: 250px;"></div>
                                
                                
                            </ul>
                        </aside>