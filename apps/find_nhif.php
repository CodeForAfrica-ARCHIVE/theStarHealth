<div style="width:300px;height:250px;overflow:auto;" id='result'>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
<?php
require_once('../config.php');
$town = $_POST['town'];
$max = $_POST['max'];
$min = $_POST['min'];
	$sql = mysql_query("SELECT * FROM nhif WHERE Town='$town' AND Rate<=$max AND Rate>=$min")or die(mysql_error());
	$total = mysql_num_rows($sql);
	if($total<1){echo "No results";} 
	echo "<table class='zebra-striped'><thead><tr><td><b>Hospital name</b></td><td><b>Rate per night</b></td></tr></thead><tbody>";
	while($row=mysql_fetch_array($sql))
	{
	echo '<tr><td>'.$row['Name'].'</td><td>'.$row['Rate'].'KSH</td></tr>';
	}
	echo "</tbody></table>";
?>
<button class='btn btn-primary' onClick="ajaxrequest_more2('apps/nhif.php')";>Try another query</button>

</div>