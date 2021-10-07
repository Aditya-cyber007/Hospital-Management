<?php 
session_start();
if(isset($_SESSION['email'])){
  echo " <h2 class='forgot' align='left'><a href='logout.php'>Logout</h2>";
include"database.php";
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Patient'],
          <?php
          $query="SELECT COUNT(date) AS patient_number,date FROM patient GROUP BY date;";
          $result=mysqli_query($conn,$query);
        
          while($data=mysqli_fetch_array($result)){
            $date=$data['date'];
            $patient_number=$data['patient_number'];
            ?>
            [<?php echo "'".$date."'";?>,<?php echo $patient_number;?>],
            <?php
          }
          ?>
        ]);

        var options = {
          title: "'Doctor's Graph" ,
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
<?php
}
else{
  header("Location: login.html");
    exit();
}

?>