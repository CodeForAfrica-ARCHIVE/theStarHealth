<?php 
function front_page()
{
if(isset($_POST['registered_facilities']))
{
?>
<div class='row-fluid'>
	<div style='padding-left:10px;padding-right:10px;padding-top:10px;-moz-box-shadow:1px 1px 2px 3px #ccc;-webkit-box-shadow: 1px 1px 2px 3px #ccc;box-shadow:1px 1px 2px 3px #ccc;'>
<h3>Facilities</h3>
	<?php
	$county = $_POST['county'];
	$service = $_POST['facility'];
	$query = "SELECT * FROM ehealth WHERE county='$county' AND $service='Y'";
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
	
	</div>
</div>
<?php
}
else
{
?>
<div style='padding-left:10px;padding-right:10px;padding-top:10px;-moz-box-shadow:1px 1px 2px 3px #ccc;-webkit-box-shadow: 1px 1px 2px 3px #ccc;box-shadow:1px 1px 2px 3px #ccc;'>

<?php	
	if(isset($_GET['dataset']))
	{
		if($_GET['dataset']=='illnessvspoverty')
		{
		chart();
		}
		elseif($_GET['dataset']=='facilities')
		{
		show_map();
		}
		//elseif($_GET['dataset']=='disability')
		//{
		//disability();
		//}
		//elseif($_GET['dataset']=='cdisability')
		//{
		//cdisability();
		//}
		else
		{
		show_map();
		}
	}
	else
	{
	show_map();
	}
	?>
	</div>
	<div id="content" role="main">
		<?php //tha_content_top();
		
//		if ( have_posts() ) {
	//		while ( have_posts() ) {
		//		the_post();
			//	get_template_part( '/partials/content', get_post_format() );
		//	}
			//the_bootstrap_content_nav( 'nav-below' );
	//	}
		//else {
			//get_template_part( '/partials/content', 'not-found' );
	//	}
	
		//tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php //tha_content_after();
//sections showing different latest in cats


	?>
	<br>
	<div class='row-fluid'>
	<div style='padding-left:10px;padding-right:10px;padding-top:10px;-moz-box-shadow:1px 1px 2px 3px #ccc;-webkit-box-shadow: 1px 1px 2px 3px #ccc;box-shadow:1px 1px 2px 3px #ccc;'>
<h3>Registered Practitioners</h3>
<link rel="stylesheet" href="<?php wp_get_theme();?>/jquery_autocomplete/style.css" type="text/css" media="all" />
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript">
 
$(document).ready(function(){
	var ac_config = {
		source: "<?php wp_get_theme();?>/jquery_autocomplete/data.php",
		select: function(event, ui){
		   $("#city").val(ui.item.city);
			$("#reg").val(ui.item.reg);
			$("#zip").val(ui.item.zip);
		  $("#state").val(ui.item.state);
			
			
		},
		minLength:1
	};
	$("#city").autocomplete(ac_config);
});
</script>
<form action="#" method="post">
	 <table width='100%'><tr><td style='width:40%'><label for="city">Name</label></td><td>
		 <input type="text" name="city" id="city" value=""  style='width:90%'/></td></tr>
		<tr><td> <label for="state">Qualification</label></td><td>
		 <input type="text" name="state" id="state" value="" disabled="disabled" style='width:90%'/></td></tr>
		<tr><td> <label for="zip">Specialty</label></td><td>
	 	 <input type="text" name="zip" id="zip" value="" disabled="disabled" style='width:90%'/></td></tr>
		 <tr><td> <label for="reg">Registration Number</label></td><td>
	 	 <input type="text" name="reg" id="reg" value="" disabled="disabled" style='width:90%'/></td></tr>
		 </table>
</form>
<br>


	</div>
	<br>
<div style='padding-left:10px;padding-right:10px;padding-top:10px;-moz-box-shadow:1px 1px 2px 3px #ccc;-webkit-box-shadow: 1px 1px 2px 3px #ccc;box-shadow:1px 1px 2px 3px #ccc;'>
<h3>Registered Facilities</h3>
<form method='POST' action=''>
<table style='width:100%'>
<tr>
<td  style='width:40%'>County</td><td> 
<select style='width:90%' name='county'>
<option>Select County</option>
<?php 
$sql = mysql_query("SELECT * FROM counties");
while($row=mysql_fetch_array($sql))
{
	echo "<option value='".$row['county']."'>".$row['county']."</option>";
}
?>
</select>
</td>
</tr>
<tr>
<td>Facility</td><td><select style='width:90%' name='facility'><option>Select facility</option>
<?php 
$sql = mysql_query("SELECT * FROM services");
while($row=mysql_fetch_array($sql))
{
	echo "<option value='".$row['service']."'>".$row['service']."</option>";
}
?>
</select></td>
</tr>
<tr>
<td></td><td><input class='btn btn-primary' type='submit' value='find' name='registered_facilities'></td>
</tr>
</table>
</form>
<br>
</div>
	<br>
	<div style='padding-left:10px;padding-right:10px;padding-top:10px;-moz-box-shadow:1px 1px 2px 3px #ccc;-webkit-box-shadow: 1px 1px 2px 3px #ccc;box-shadow:1px 1px 2px 3px #ccc;'>
<h3>Disability Visualization</h3>
	<?php

if(!isset($_GET['county']))
{
	disability();
}
else
{
	cdisability();
}

?>
</div>

	</div>
	<br>
<!-- #primary -->
<?php
}
}
?>