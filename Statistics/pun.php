 <?php  
 $connect = mysqli_connect("localhost", "rishabh", "manu123", "placement1");  
 
 $query = " SELECT count(*) as number from student where comp IS NULL"; //unplaced
 $query1 = " SELECT count(*) as number1 from student where comp IS NOT NULL";  //placed
 
 $result = mysqli_query($connect, $query);
 $result1 = mysqli_query($connect, $query1);
 ?>

<!DOCTYPE HTML>
<HEAD>
	<TITLE>Stats | Ongoing Placements</TITLE>

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

 <script type="text/javascript">
  google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['Placed/Unplaced', 'No. of Students',],
        ['Students Placed', <?php while($row1 = mysqli_fetch_array($result1))  
                          { echo $row1["number1"];} ?>],
        ['Yet to be Placed', <?php while($row = mysqli_fetch_array($result))  
                          { echo $row["number"];} ?> ],
      
      ]);

      var options = {
        // title: 'Population of Largest U.S. Cities',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Placement Stats Of Current Year',
          minValue: 0
        },
        vAxis: {
          title: ''
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