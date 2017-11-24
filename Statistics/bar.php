 <?php  
 $connect = mysqli_connect("localhost", "rishabh", "manu123", "placement1");  
 $query = " SELECT count(*) as number from company";  
 $result = mysqli_query($connect, $query);  
 ?>

<!DOCTYPE HTML>
<HEAD>
	<TITLE>Companies Visiting</TITLE>

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

 <script type="text/javascript">
  google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['Year', 'No. of companies visiting',],
        ['2017-2018', <?php while($row = mysqli_fetch_array($result))  
                          { echo $row["number"];} ?>],
        // ['Los Angeles, CA', 3792000],
        // ['Chicago, IL', 2695000],
        // ['Houston, TX', 2099000],
        // ['Philadelphia, PA', 1526000]
      ]);

      var options = {
        // title: 'Population of Largest U.S. Cities',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Total No. of Companies',
          minValue: 0
        },
        vAxis: {
          title: 'Academic Year'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
</script>
</HEAD>
<BODY>
	
<div id="chart_div"></div>
</BODY>