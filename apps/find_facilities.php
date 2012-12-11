<div style="width:300px;height:250px;overflow:auto;" id='result'>
<script type='text/javascript'>
function hideShow(){
document.getElementById('result').style.display='none';
document.getElementById('formstuff').style.display='block';

}
</script>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
<?php
$county = $_POST['county'];
$service= $_POST['facility'];

require_once('../config.php');
	$query = "SELECT * FROM ehealth WHERE `county`='$county' AND `$service`='Y'";
	$sql = mysql_query($query);
	$total = mysql_num_rows($sql);
	if($total<1)
	{
		echo "No results found";
	}
	echo "<table class='zebra-striped'>
        <tbody>";
	while($row=mysql_fetch_array($sql))
	{
		echo "<tr><td>".$row['Facility Name']."</td></tr>";
	}
	
	echo " </tbody>
      </table>";
?>
<button class='btn btn-primary' onClick="ajaxrequest_more('apps/facilities.php')";>Try another query</button>

</div>