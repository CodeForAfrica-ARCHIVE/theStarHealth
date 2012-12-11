<link rel="stylesheet" href="style.css" type="text/css" media="all" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript">
 
$(document).ready(function(){
	var ac_config = {
		source: "data.php",
		select: function(event, ui){
			$("#city").val(ui.item.city);
			$("#state").val(ui.item.state);
			$("#zip").val(ui.item.zip);
		},
		minLength:1
	};
	$("#city").autocomplete(ac_config);
});
</script>
<form action="#" method="post">
	 <p><label for="city">City</label><br />
		 <input type="text" name="city" id="city" value="" /></p>
	 <p><label for="state">State</label><br />
		 <input type="text" name="state" id="state" value="" /></p>
	 <p><label for="zip">Zip</label><br />
	 	 <input type="text" name="zip" id="zip" value="" /></p>
</form>
