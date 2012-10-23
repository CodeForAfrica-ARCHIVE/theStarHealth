<?php
function chart(){
?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
		['ID','% using bednet','% with fever or malaria','Province','% poor'],
	<?php
	
		$link = mysql_connect('localhost', 'root', '');
	mysql_select_db('health');
	echo mysql_error($link);
	if(isset($_GET['province']))
		{
		$province=$_GET['province'];
		$sql=mysql_query("SELECT * FROM sh_bednet WHERE province='$province'");
		}
		else
		{
		$sql=mysql_query("SELECT * FROM sh_bednet");
		}
	
	$data=array();
	while($row=mysql_fetch_array($sql))
	{
		$data[]= "['".$row['county']."', ".$row['bednet'].", ".$row['feverormalaria'].", '".$row['province']."', ".$row['poverty']."]";
	}
	echo implode(', ', $data);
	?>
          
        
        ]);

        var options = {
          title: 'The larger the bubble, the higher the poverty rate',
          hAxis: {title: '% using bednet'},
          vAxis: {title: '% with fever or malaria'},
          bubble: {textStyle: {fontSize: 11}}
        };

        var chart = new google.visualization.BubbleChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <div align='center'>
	<div id="chart_div" style="width: 100%; height: 300px;"></div>
	<div align='center'><form> <select  style='width:100%' value='county' name="URL" onchange="window.location.href= '?dataset=illnessvspoverty&province='+this.form.URL.options[this.form.URL.selectedIndex].value">
	 <option value=''>Select Province</option>
	 <option value='Rift Valley'>Rift Valley</option>
	 <option value='Central'>Central</option>
	 <option value='Nyanza'>Nyanza</option>
	 <option value='Western'>Western</option>
	 <option value='Eastern'>Eastern</option>
	 <option value='Coast'>Coast</option>
	 <option value='North Eastern'>North Eastern</option>
	 <option value='Nairobi'>Nairobi</option>
	 
	 </select></form>
	 </div></div>
	 <?php
	 }
	 ?>