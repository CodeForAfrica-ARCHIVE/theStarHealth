<?php 
function disability(){
?>
<div style='width:90%;margin:auto;'>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
		 ['County', '<?php if(!isset($_GET['type']))
		 {
		 echo "Disabled";
		 } 
		 else
		 {
		 $type=str_replace('d', '', $_GET['type']);
		 echo ucwords($type)." disability";
		 }?>'
		 ],
		<?php 
		
require_once('config.php');
	
	$data=array();
	if(!isset($_GET['type']))
	{
		$sql=mysql_query("SELECT * FROM sh_bednet");
		while($row2=mysql_fetch_array($sql))
		{
		$speechd=$row2['speechd'];
			$hearingd=$row2['hearingd'];
			$otherd=$row2['otherd'];
			$mentald=$row2['mentald'];
			$physicald=$row2['physicald'];
			$visuald=$row2['visuald'];
			$total=$speechd+$hearingd+$otherd+$mentald+$physicald+$visuald;
			
			$data[]= "['".$row2['county']."', ".$total."]";
		}
	}
	else
	{	
		$type=$_GET['type'];
		$sql=mysql_query("SELECT * FROM sh_bednet");
		while($row=mysql_fetch_array($sql))
		{
		$data[]="['".$row['county']."', ".$row[$type]."]";
		}
	}
	echo implode(', ', $data);
	?>
         
         
          
        ]);

        var options = {
          title: 'All Counties',
          hAxis: {title: 'County', titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <div id="chart_div" style="width: 100%; height: 300px;"></div>

	<form style='display:none;'>
 <select value='type' style='width:48%' name="URL" onchange="window.location.href= '?dataset=disability&type='+this.form.URL.options[this.form.URL.selectedIndex].value">
<option>Select Disablity</option>
<option value='speechd'>Speech</option>
<option value='hearingd'>Hearing</option>
<option value='physicald'>Physical</option>
<option value='visuald'>Visual</option>
<option value='mentald'>Mental</option>
<option value='otherd'>Other</option>
</select>
	
	</form>
	 <form  style='display:none;'>
	 <select value='county' style='width:48%' name="URL" onchange="window.location.href= '?dataset=cdisability&county='+this.form.URL.options[this.form.URL.selectedIndex].value">
	 <option>Select County</option>
	 <option value="Nairobi">Nairobi</option>
<option value="Mombasa">Mombasa</option>
<option value="Kisumu">Kisumu</option>
<option value="Nakuru">Nakuru</option>
<option value="Kwale">Kwale</option>
<option value="Kilifi">Kilifi</option>
<option value="Tana River">Tana River</option>
<option value="Lamu">Lamu</option>
<option value="Taita/Taveta">Taita/Taveta</option>
<option value="Garissa">Garissa</option>

<option value="Wajir">Wajir</option>
<option value="Mandera">Mandera</option>
<option value="Marsabit">Marsabit</option>
<option value="Isiolo">Isiolo</option>
<option value="Meru">Meru</option>
<option value="Tharaka Nithi">Tharaka-Nithi</option>
<option value="Embu">Embu</option>
<option value="Kitui">Kitui</option>
<option value="Machakos">Machakos</option>

<option value="Makueni">Makueni</option>
<option value="Nyandarua">Nyandarua</option>
<option value="Nyeri">Nyeri</option>
<option value="Kirinyaga">Kirinyaga</option>
<option value="Murang'a">Muranga</option>
<option value="Kiambu">Kiambu</option>
<option value="Turkana">Turkana</option>
<option value="West Pokot">West Pokot</option>
<option value="Samburu">Samburu</option>

<option value="Trans Nzoia">Trans Nzoia</option>
<option value="Uasin Gishu">Uasin Gishu</option>
<option value="Elgeyo/Marakwet">Elgeyo Marakwet</option>
<option value="Nandi">Nandi</option>
<option value="Baringo">Baringo</option>
<option value="Laikipia">Laikipia</option>

<option value="Narok">Narok</option>
<option value="Kajiado">Kajiado</option>

<option value="Kericho">Kericho</option>
<option value="Bomet">Bomet</option>
<option value="Kakamega">Kakamega</option>
<option value="Vihiga">Vihiga</option>
<option value="Bungoma">Bungoma</option>
<option value="Busia">Busia</option>
<option value="Siaya">Siaya</option>

<option value="Homa Bay">Homa Bay</option>

<option value="Migori">Migori</option>
<option value="Nyamira">Nyamira</option>
	 </select>
	 </form>
	 </div>
<?php
}
?>