<?php
function cdisability(){
?>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Disability', 'Total'],
		  <?php 
	$link = mysql_connect('localhost', 'root', '');
	mysql_select_db('health');
	echo mysql_error($link);
		  if(isset($_GET['county']))
		  {
		  $county=$_GET['county'];
		  
		  $sql=mysql_query("SELECT * FROM sh_bednet WHERE county='$county'");
		  while($row=mysql_fetch_array($sql))
			  {
			  echo "//['None', ".$row['none']."],\n";
			  echo "['Mental', ".$row['mentald']."],";
			  echo "['Physical', ".$row['physicald']."],";
			  echo "['Hearing', ".$row['hearingd']."],";
			  echo "['Visual', ".$row['visuald']."],";
			  echo "['Speech', ".$row['speechd']."]";
			  }
		  }
		  else
		  {
		  
		  ?>
         // ['None',     37081776],
          ['Other',      120307],
          ['Mental',  155874],
          ['Physical', 505028],
          ['Hearing', 236491],
          ['Visual', 366811],
          ['Speech',    204438]
		  <?php }?>
        ]);

        var options = {
          title: 'Disability in different counties'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
	<div align='center'>
    <div id="chart_div" style="width: 100%px; height: 300px;"></div>
	<div align='center'>
	 <form>
	 <select value='county' style='width:100%' name="URL" onchange="window.location.href= '?dataset=cdisability&county='+this.form.URL.options[this.form.URL.selectedIndex].value">
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
	 </div>
<?php
}
?>