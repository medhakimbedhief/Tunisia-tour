

<?php
include_once "../FRONT/Controller/config.php" ;
include_once "../FRONT/Controller/commentC.php";
$commentC = new commentC();
/*$result=$commentC->affichercomment();
foreach($result as $rows)
{
   echo $rows['positives'];
}
*/
$positive=$commentC->positives();
$negative=$commentC->negatives();




?>
<!doctype html>
<html>
<input type="hidden" id="pos" value="<?php echo $positive; ?> ">
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
          var pos=document.getElementById("pos").value;

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['', 'percent'],
          ['positive', <?php echo $positive; ?>],
          ['negative',     <?php echo $negative ;?>]
        ]);

        var options = {
          title: 'Statistique des Commentaires'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 590px; height: 520px;"></div>
  </body>
</html>
